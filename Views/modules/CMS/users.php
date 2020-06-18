<main>
	<div class="container-fluid">
		<h4 class="home-h4 ml-3 mt-3"><b>Users</b></h4>
		<p class="home-h4 ml-3">From this modul you can add edit users for this platform</p>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<h4 class="home-h4-card ml-3">Add new user</h4>
				<div class="card home-card">
					<div class="card-body">
						<div class="form-group d-flex card-body-home">
							<label for="name" class="mt-3"><b>Name</b></label>
							<input class="form-control costum-input-home ml-5" type="text" id="name" placeholder="Name">
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="surname" class="mt-3"><b>Surname</b></label>
							<input class="form-control costum-input-home ml-4 custom-responsive-user-surname" type="text" id="surname" placeholder="Surname">
						</div>
						<div class="form-group row ml-0">
							<label for="atribute" class="mt-3 mr-4"><b>Atribute</b></label>
							<div class="col-lg-3 col-md-3 responsive-ipad">
								<div class="custom-control custom-checkbox custo">
									<input type="checkbox" class="custom-control-input" id="all">
									<label class="custom-control-label" for="all">All</label>
								</div>
								<div class="custom-control custom-checkbox custo">
									<input type="checkbox" class="custom-control-input" id="service" checked>
									<label class="custom-control-label" for="service">Service</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 responsive-ipad">
								<div class="custom-control custom-checkbox custo custom-responsive-all">
									<input type="checkbox" class="custom-control-input" id="aboutus">
									<label class="custom-control-label" for="aboutus">About Us</label>
								</div>
								<div class="custom-control custom-checkbox custo">
									<input type="checkbox" class="custom-control-input" id="clients">
									<label class="custom-control-label" for="clients">Clients</label>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 responsive-ipad">
								<div class="custom-control custom-checkbox custom-contact">
									<input type="checkbox" class="custom-control-input" id="contactt">
									<label class="custom-control-label" for="contactt">Contact</label>
								</div>
								<div class="custom-control custom-checkbox custom-appointmens">
									<input type="checkbox" class="custom-control-input" id="Apoiments">
									<label class="custom-control-label" for="Apoiments">Apoiments</label>
								</div>
							</div>
							<div class="custom-control custom-checkbox custom-users  responsive-ipad-users">
								<input type="checkbox" class="custom-control-input" id="users">
								<label class="custom-control-label" for="users">Users</label>
							</div>
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="image" class="mt-3 mr-3"><b>Image</b></label>
							<div class="custom-file ">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label costum-input-home ml-4" for="inputGroupFile04"><span>Doctor image</span></label>
							</div>
						</div>
						<button class="btn btn-success-custom-service btn-sm float-right mt-4" type="button">Add</button>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<h4 class="home-h4-card ml-4">List of you'r users</h4>
				<div class="card home-card ml-1">
					<div class="card-body table-responsive">
						<table class="table table-striped text-nowrap card-body-home">
							<thead class="thead custom-table-head">
								<tr class="custom-tr-table text-center">
									<th scope="col" class="w-25">Name Surname</th>
									<th scope="col" class="w-25">IMAGE</th>
									<th scope="col" class="w-25">ATRIBUTE</th>
									<th scope="col" class="w-25">OPTIONS</th>
								</tr>
							</thead>
							<tbody class="custom-table-body">
								<tr class="text-center">
									<td>Dona Amear</td>
									<td>
										<select class="browser-default custom-select custom-select-table">
											<option selected>Doc.png</option>
											<option value="1">png</option>
										</select>
									</td>
									<td>Users,users
										<button type="button" class="custom-button-table" data-toggle="popover"  data-trigger="focus" title="Users" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum." onmouseover="test()"><i class="fas fa-ellipsis-h ml-1 mt-1" ></i></button>
									</td>
									<td>
										<button type="button" class="btn custom-icon-table-update"><i class="far fa-edit"></i></button>
										<button type="button" class="btn custom-icon-table-delete"><i class="far fa-times-circle"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>