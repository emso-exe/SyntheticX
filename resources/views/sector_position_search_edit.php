<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Edição de setor e cargo</span><i class="fas fa-edit"></i></h1>
	</div>

	<div class="d-block">
		<form class="m-4" id="form-sector-position-search" name="form-sector-position-search" action="" method="POST" onSubmit="">

        	<div class="form-group">
				<label for="ds_search" class="col-md-12 col-form-label col-form-label-lg">Setor ou Cargo</label>
				<div class="form-row col-md-12">
					<input class="form-control form-control-lg col-md-5" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search" required>
					<button class="btn btn-lg btn-success col-md-3 ml-3" type="submit" name="gravar" value="1"><i class="fas fa-search"></i><span class="ml-4">LOCALIZAR</span></button>
					<button class="btn btn-lg btn-warning col-md-3 ml-3" type="reset" name="limpar" value="0"><i class="fas fa-eraser"></i><span class="ml-4">LIMPAR</span></button>
				</div>
			</div>

			<div class="d-inline-flex w-100">
				<div class="table-height border overflow-auto mt-3 flex-fill">
					<table class="table table-striped">
					  <thead>
					    <tr class="bg-secondary text-light">
					      <th scope="col">Setor</th>
					      <th scope="col" class="border-left text-center col-md-1">Edição</th>
					      <th scope="col" class="text-center col-md-1">Exclusão</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>UX/UI</td>
					  	  <td class="border-left text-center"><i class="fas fa-pen-square fa-small-size text-primary"></i></td>
				      	  <td class="text-center"><i class="fas fa-minus-square fa-small-size text-danger"></i></td>
					    </tr>
					    <tr>
					      <td>Desenvolvimento</td>
					  	  <td class="border-left text-center"><i class="fas fa-pen-square fa-small-size text-primary"></i></td>
				      	  <td class="text-center"><i class="fas fa-minus-square fa-small-size text-danger"></i></td>
					    </tr>
					    <tr>
					      <td>Infraestrutura</td>
					  	  <td class="border-left text-center"><i class="fas fa-pen-square fa-small-size text-primary"></i></td>
				      	  <td class="text-center"><i class="fas fa-minus-square fa-small-size text-danger"></i></td>
					    </tr>
					  </tbody>
					</table>
				</div>
				&nbsp;&nbsp;
				<div class="table-height border overflow-auto mt-3 flex-fill">
					<table class="table table-striped">
					  <thead>
					    <tr class="bg-secondary text-light">
					      <th scope="col">Setor</th>
						  <th scope="col">Cargo</th>
					      <th scope="col" class="border-left text-center col-md-1 col-md-1">Perfil</th>						  
					      <th scope="col" class="border-left text-center col-md-1 col-md-1">Edição</th>
					      <th scope="col" class="text-center col-md-1">Exclusão</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>UX/UI</td>
						  <td>UX/UI</td>
						  <td class="border-left text-center">Usuário</td>
					  	  <td class="border-left text-center"><i class="fas fa-pen-square fa-small-size text-primary"></i></td>
				      	  <td class="text-center"><i class="fas fa-minus-square fa-small-size text-danger"></i></td>
						</tr>
					    <tr>
					      <td>Desenvolvimento</td>
						  <td>Desenvolvedor PHP</td>
						  <td class="border-left text-center">Administrador</td>
					  	  <td class="border-left text-center"><i class="fas fa-pen-square fa-small-size text-primary"></i></td>
				      	  <td class="text-center"><i class="fas fa-minus-square fa-small-size text-danger"></i></td>
					    </tr>						
					    <tr>
					      <td>Desenvolvimento</td>
						  <td>Programador</td>
						  <td class="border-left text-center">Super Usuário</td>
					  	  <td class="border-left text-center"><i class="fas fa-pen-square fa-small-size text-primary"></i></td>
				      	  <td class="text-center"><i class="fas fa-minus-square fa-small-size text-danger"></i></td>
					    </tr>
					    <tr>
					      <td>UX/UI</td>
						  <td>Infraestrutura</td>
						  <td class="border-left text-center">Usuário</td>
					  	  <td class="border-left text-center"><i class="fas fa-pen-square fa-small-size text-primary"></i></td>
				      	  <td class="text-center"><i class="fas fa-minus-square fa-small-size text-danger"></i></td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>

		</form>
	</div>

</div>
