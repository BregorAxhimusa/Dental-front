<main>
	<div class="container-fluid">
		<h4 class="home-h4 ml-3 mt-3"><b>Clients</b></h4>
		<p class="home-h4 ml-3">Form this modul you can change add edit clients review</p>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<h4 class="home-h4-card ml-3">Add new client review</h4>
				<div class="card home-card">
					<div class="card-body">
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Name</b></label>
							<input class="form-control costum-input-home ml-5" type="text" id="username" placeholder="Name">
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Surname</b></label>
							<input class="form-control costum-input-home ml-4 custom-responsive-clients-surname" type="text" id="username" placeholder="Surname">
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Tittle</b></label>
							<input class="form-control costum-input-home ml-5" type="text" id="username" placeholder="Eg.Student">
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Image</b></label>
							<div class="custom-file">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label costum-input-home" style="margin-left: 40px;" for="inputGroupFile04"><span>Client Image</span></label>
							</div>
						</div>
						<div class="form-group d-flex">
							<label for="exampleFormControlTextarea2"><b>Text</b></label>
							<textarea class="form-control card-body-textarea rounded-0 ml-5" id="exampleFormControlTextarea2" rows="3"></textarea>
						</div>
						<button class="btn btn-success-custom-service btn-sm float-right mt-4" type="button">Add</button>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<h4 class="home-h4-card ml-4">List of your clients review</h4>
				<div class="card home-card ml-1">
					<div class="card-body table-responsive">
						<table class="table table-striped text-nowrap card-body-home">
							<thead class="thead custom-table-head">
								<tr class="custom-tr-table text-center">
									<th scope="col" class="w-25">Name Surname</th>
									<th scope="col" class="w-25">TITLE</th>
									<th scope="col" class="w-25">Image</th>
									<th scope="col" class="w-25">TEXT</th>
									<th scope="col" class="w-25">OPTIONS</th>
								</tr>
							</thead>
							<tbody class="custom-table-body">
								<tr class="text-center">
									<td>Adam Montare</td>
									<td>Specialist</td>
									<td>
										<select class="browser-default custom-select custom-select-table">
											<option selected>Doc.png</option>
											<option value="1">png</option>
										</select>
									</td>
									<td>Text
										<button type="button" class="custom-button-table" data-toggle="popover"  data-trigger="focus" title="Text" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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