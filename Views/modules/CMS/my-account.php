<main>
	<div class="container-fluid">
		<h4 class="home-h4 ml-3 mt-3"><b>My Account</b></h4>
		<p class="home-h4 ml-3"></p>
	</div>
	<div class="container-fluid">
		<form action="">
			<div class="row">
				<div class="card home-card mt-5">
					<div class="card-body">
						<img src="Views/dist/img/NoPath - Copy (15).png" width="240px" height="400px" class="ml-3" alt="...">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mt-5 ml-5 custom-col-responsive">
					<div class="row">
						<div class="col-md-6 col-sm-6 custom-col-responsive">
							<div class="form-group card-body-home">
								<label for="username" class="mt-3"><b>Name</b></label>
								<input class="form-control costum-input-home custom-responsive" type="text" id="nameaccount1233" placeholder="Name" disabled>
							</div>
							<div class="form-group card-body-home">
								<label for="username" class="mt-3"><b>Password</b></label>
								<input class="form-control costum-input-home custom-responsive" type="password" id="passwordaccount12333" placeholder="Surname" disabled>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 custom-col-responsive">
							<div class="form-group card-body-home">
								<label for="username" class="mt-3"><b>Surname</b></label>
								<input class="form-control costum-input-home custom-responsive" type="text" id="surnameaccount324" placeholder="Surname" disabled>
							</div>
							<div class="form-group card-body-home">
								<label for="username" class="mt-3"><b>Attributes</b></label>
								<input class="form-control costum-input-home custom-responsive" type="text" id="attributesaccoun123t" placeholder="Attributes" disabled>
							</div>
						</div>
					</div>
					<button class="btn btn-success-custom-service btn-sm float-right mt-4 mb-3" type="button" data-toggle="modal" data-target="#exampleModal">CHANGE</button>
					<div id="exampleModal" class="modal custom-modal-responsive" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Change Information</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 custom-col-responsive">
											<div class="form-group card-body-home">
												<label for="username" class="mt-3"><b>Name</b></label>
												<input class="form-control costum-input-home custom-responsive custom-responsive-row-account" type="text" id="nameaccount" placeholder="Name" disabled>
											</div>
											<div class="form-group card-body-home">
												<label for="username" class="mt-3"><b>Password</b></label>
												<input class="form-control costum-input-home custom-responsive custom-responsive-row-account" type="password" id="passwordaccount" placeholder="Surname" disabled>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 custom-col-responsive">
											<div class="form-group card-body-home">
												<label for="username" class="mt-3"><b>Surname</b></label>
												<input class="form-control costum-input-home custom-responsive custom-responsive-row-account" type="text" id="surnameaccount" placeholder="Surname" disabled>
											</div>
											<div class="form-group card-body-home">
												<label for="username" class="mt-3"><b>Attributes</b></label>
												<input class="form-control costum-input-home custom-responsive custom-responsive-row-account" type="text" id="attributesaccount" placeholder="Attributes" disabled>
											</div>
										</div>
									</div>
									<div class="form-group d-flex card-body-home">
										<label for="username" class="mt-3 mr-3"><b>Image</b></label>
										<div class="custom-file ">
											<input type="file" class="custom-file-input ml-3">
											<label class="custom-file-label costum-input-home" for="inputGroupFile04"><span>Background Image</span></label>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button class="btn btn-success-custom-modal-cancel btn-sm float-right" type="button" data-toggle="modal" data-target="#exampleModal">CANCEL</button>
									<button class="btn btn-success-custom-modal-confirm btn-sm float-right" type="button" data-toggle="modal" data-target="#exampleModal">CHANGE</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</main>