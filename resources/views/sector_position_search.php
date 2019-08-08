<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Consulta a setor e cargo</span><i class="fas fa-search"></i></h1>
	</div>

	<div class="d-block">
		<form class="m-4" id="form-sector-position-search" name="form-sector-position-search" action="" method="POST" onSubmit="">

        	<div class="form-group">
				<label for="ds_search" class="col-md-12 col-form-label col-form-label-lg">Setor, cargo ou perfil</label>
				<div class="form-row col-md-12">
					<input class="form-control form-control-lg col-md-5" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search" required>
					<button class="btn btn-lg btn-success col-md-2 ml-5" type="submit" name="gravar" value="1"><i class="fas fa-search"></i><span class="ml-4">LOCALIZAR</span></button>
					<button class="btn btn-lg btn-secondary col-md-2 ml-3" type="submit" name="relatorio" value="0"><i class="fas fa-file-alt"></i><span class="ml-3">RELATÓRIO</span></button>
					<button class="btn btn-lg btn-warning col-md-2 ml-3" type="reset" name="limpar" value="0"><i class="fas fa-eraser"></i><span class="ml-4">LIMPAR</span></button>
				</div>
			</div>

			<div class="table-height border overflow-auto mt-3 flex-fill">
				<table class="table table-sm table-striped">
				  <thead>
				    <tr class="bg-secondary text-light">
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-setor" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Setor
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-setor">
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-up"></i><span class="ml-3">Ascendente</span></a>
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-down"></i><span class="ml-3">Descendente</span></a>
								<div class="dropdown-divider"></div>
								<div class="form-row ml-2 mr-2">
									<input class="form-control form-control-sm col-md-12" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search">
								</div>
							</div>
						</div>
					  </th>
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-cargo" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cargo
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-cargo">
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-up"></i><span class="ml-3">Ascendente</span></a>
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-down"></i><span class="ml-3">Descendente</span></a>
								<div class="dropdown-divider"></div>
								<div class="form-row ml-2 mr-2">
									<input class="form-control form-control-sm col-md-12" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search">
								</div>
							</div>
						</div>
					  </th>
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-cargo" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Perfil
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-perfil">
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-up"></i><span class="ml-3">Ascendente</span></a>
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-down"></i><span class="ml-3">Descendente</span></a>
								<div class="dropdown-divider"></div>
								<div class="form-row ml-2 mr-2">
									<input class="form-control form-control-sm col-md-12" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search">
								</div>
							</div>
						</div>
					  </th>					  
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>UX/UI</td>
					  <td>UX/UI</td>
				      <td>Usuário</td>					  
				    </tr>
				    <tr>
				      <td>Desenvolvimento</td>
					  <td>Desenvolvimento</td>
				      <td>Administrador</td>					  
				    </tr>
				    <tr>
				      <td>UX/UI</td>
					  <td>Infraestrutura</td>
				      <td>Super usuário</td>					  
				    </tr>
				    <tr>
				      <td>UX/UI</td>
					  <td>UX/UI</td>
				      <td>Usuário</td>					  
				    </tr>
				    <tr>
				      <td>Desenvolvimento</td>
					  <td>Desenvolvimento</td>
				      <td>Super usuário</td>					  
				    </tr>
				    <tr>
				      <td>Infraestrutura</td>
					  <td>Infraestrutura</td>
				      <td>Usuário</td>					  
				    </tr>
				  </tbody>
				</table>
			</div>

		</form>
	</div>

</div>
