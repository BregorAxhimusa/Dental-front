<main>
	<div class="container-fluid">
		<h4 class="home-h4 ml-3 mt-3"><b>About us</b></h4>
		<p class="home-h4 ml-3">Form this modul you can change add edit your staff</p>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<h4 class="home-h4-card ml-3">Add new staff</h4>
				<div class="card home-card">
					<div class="card-body">
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Name</b></label>
							<input class="form-control costum-input-home ml-5 custom-responsive-name" type="text" id="username" placeholder="Name">
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Surname</b></label>
							<input class="form-control costum-input-home ml-4 custom-responsive-surname" type="text" id="username" placeholder="Surname">
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Tittle</b></label>
							<input class="form-control costum-input-home ml-5" type="text" id="username" placeholder="Eg.Specialist">
						</div>
						<div class="form-group d-flex card-body-home">
							<label for="username" class="mt-3"><b>Image</b></label>
							<div class="custom-file">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label costum-input-home" style="margin-left: 40px" for="inputGroupFile04"><span>Doctor image</span></label>
							</div>
						</div>
						<button class="btn btn-success-custom-service btn-sm float-right mt-4" type="button">Add</button>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
				<h4 class="home-h4-card ml-4">List of your staff</h4>
				<div class="card home-card ml-1">
					<div class="card-body table-responsive">
						<table class="table table-striped text-nowrap card-body-home">
							<thead class="thead custom-table-head">
								<tr class="custom-tr-table text-center">
									<th scope="col" class="w-25">Name Surname</th>
									<th scope="col" class="w-25">TITLE</th>
									<th scope="col" class="w-25">Image</th>
									<th scope="col" class="w-25">OPTIONS</th>
								</tr>
							</thead>
							<tbody class="custom-table-body">
								<tr class="text-center">
									<td>Adam Montare</td>
									<td>Specialist</td>
									<td>
										<select class="browser-default custom-select custom-select-table">
											<option selected style="font-size: 10px!important;">Doc.png</option>
											<option value="1">png</option>
										</select>
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