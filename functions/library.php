<?php
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function writeErrorFile($errors, $filename){
    $errorlog = fopen("../error_log.txt", "a");
    $errors = "\n".$errors;
    fwrite($errorlog,$errors);
    $txt = "\nFILE LOCATION : ".$filename."\n";
    fwrite($errorlog, $txt);
    fwrite($errorlog, "---------------------------------------------------------------------------------");
}

class fileProcess{
    private $allowedList = array();
    private $fileName;
    private $fileTempName;
    private $fileSize;
    private $fileErrors;
    private $fileType;
    private $fileExtension;
    private $tableName;
    private $colName;
    private $colId;

    function setAllowedList($allowedList){
        $this->allowedList = $allowedList;
    }
    function getAllowedList(){
        foreach($this->allowedList as $list){
            echo $list;
        }
    }

    function setRawFile($file){
        if(isset($file) && ($file['tmp_name'] != "" || $file['tmp_name'] != null)){
            //get file name
            $this->fileName = $file['name'];
            //get tmp name
            $this->fileTempName = $file['tmp_name'];
            //get file size
            $this->fileSize = $file['size'];
            //get error
            $this->fileErrors = $file['error'];
            //get file type
            $this->fileType = $file['type'];

            /**
             * dapatkan file extension untuk file
             */
            $fileExtension = explode('.', $picname);
            /**
             * memudahkan penggunaan file ext
             * biasanya file extension semua small letter 
             * */ 
            $this->fileExtension = strtolower(end($fileExtension));
        }
    }

    function uploadFile($directory, $dbconn, $userId){
        if(in_array($this->fileExtension, $this->allowedList)){
            //make sure no error
            if($picErr === 0){
                //make new name for file so it will not change the other file
                $newFileName = $_SESSION['staffid'].".".$this->fileExtension;

                //set file destination
                $fileDestination = $directory.$newFileName;
                /**
                 * move the file to the set location
                 * 1st param => temporary location == tempname
                 * 2nd param => new location
                 */
                $tableName = $this->tableName;$colName = $this->colName;$colId = $this->colId;
                move_uploaded_file($this->fileTempName, $fileDestination);
                $sqlUpdatePic = "UPDATE $tableName SET $colName='$fileDestination' WHERE $colId = '".$_SESSION['staffid']."'";
                echo $sqlUpdatePic;
                if(mysqli_query($dbconn,$sqlUpdatePic)){
                    return true;
                }else{
                    //echo mysqli_error($dbconn);
                    # array_push($errors, mysqli_error($dbconn));
                    return false;
                }
                
            }else{
                # array_push($errors, "WARNING: THERE WAS AN ERROR IN THE UPLOADED FILE");
                return false;
            }
        }else{
            return false;
            # array_push($errors, "WARNING: UPLOADED FILE ARE NOT ALLOWED");
        }
    }

    public function __toString()
    {
        try 
        {
            return ((string) $this->fileName.(string)$this->fileExtension);
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }
}
?>