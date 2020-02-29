<div class="modal fade" id="minuteModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h2>UPLOAD FILE</h2>
						<img src="../../asset/BRL.png" class="right" width="50px" height="50px">
					</div>
					<div class="modal-body">
						<form id="addfile" action="../../php/minuteProcess.php" method="POST" enctype="multipart/form-data">
						
							<div class="form-group row">
								<label for="name" class="col-sm-3 col-form-label">File Name</label>
								<div class="col-sm-9">
									<input type="text" id="name" name="filename" placeholder="File name" class="form-control" required>
								</div>
							</div>

							
							<div class="form-group row">
								<label for="type" class="col-sm-3 col-form-label">File Type</label>
								<div class="col-sm-9">
									<select id="type" name="type" class="form-control" required>
										<option>Select Type</option>
										<option value="incoming">Incoming</option>
										<option value="outcoming">Outcoming</option>

									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="nric" class="col-sm-3 col-form-label">Upload</label>
								<div class="col-sm-9">
									<input type="file" name="file" required>
								</div>
							</div>
				
							<div id="msg" class="right"></div>
							
							<br><br>
							<input type="submit" class="btn btn-primary right" style="margin: 0 0 10px 10px" value="Submit">
							<input type="reset" class="btn btn-secondary right" value="Reset">
							
							<button type="button" class="btn btn-secondary left" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>