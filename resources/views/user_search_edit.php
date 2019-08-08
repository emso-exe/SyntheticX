<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Edição de funcionário</span><i class="fas fa-user-edit"></i></h1>
	</div>

	<div class="d-block">
		<form class="m-4" id="form-user-search" name="form-user-search" action="" method="POST" onSubmit="">

        	<div class="form-group">
				<label for="ds_search" class="col-md-12 col-form-label col-form-label-lg">Matrícula, nome, login, setor, cargo ou status</label>
				<div class="form-row col-md-12">
					<input class="form-control form-control-lg col-md-5" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search" required>
					<button class="btn btn-lg btn-success col-md-3 ml-3" type="submit" name="gravar" value="1"><i class="fas fa-search"></i><span class="ml-4">LOCALIZAR</span></button>
					<button class="btn btn-lg btn-warning col-md-3 ml-3" type="reset" name="limpar" value="0"><i class="fas fa-eraser"></i><span class="ml-4">LIMPAR</span></button>
				</div>
			</div>

			<div class="table-height border overflow-auto mt-4">
				<table class="table table-striped">
				  <thead>
				    <tr class="bg-secondary text-light">
				      <th scope="col">Matrícula</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Setor</th>
				      <th scope="col">Cargo</th>
				      <th scope="col">Login</th>
				      <th scope="col" class="text-center col-md-1">Status</th>
				      <th scope="col" class="border-left text-center col-md-1">Edição</th>
				      <th scope="col" class="text-center col-md-1">Exclusão</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">10091</th>
				      <td>Mark Christopher Silva</td>
				      <td>UX/UI</td>
				      <td>Analista de qualidade</td>
				      <td>mark10091</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10093</th>
				      <td>Rafhael James Santos</td>
				      <td>Desenvolvimento</td>
				      <td>Programador VB</td>
				      <td>rafhael10093</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-warning"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10092</th>
				      <td>Bryan Miller Souza</td>
				      <td>Infraestrutura</td>
				      <td>Auxiliar de infra</td>
				      <td>bryan10092</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-danger"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10096</th>
				      <td>Joseph Peter Oliveira</td>
				      <td>Desenvolvimento</td>
				      <td>Programador Cobol</td>
				      <td>joseph10096</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10091</th>
				      <td>Mark Christopher Silva</td>
				      <td>UX/UI</td>
				      <td>Analista de qualidade</td>
				      <td>mark10091</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10093</th>
				      <td>Rafhael James Santos</td>
				      <td>Desenvolvimento</td>
				      <td>Programador VB</td>
				      <td>rafhael10093</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-warning"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10092</th>
				      <td>Bryan Miller Souza</td>
				      <td>Infraestrutura</td>
				      <td>Auxiliar de infra</td>
				      <td>bryan10092</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-danger"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10093</th>
				      <td>Rafhael James Santos</td>
				      <td>Desenvolvimento</td>
				      <td>Programador VB</td>
				      <td>rafhael10093</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-warning"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10092</th>
				      <td>Bryan Miller Souza</td>
				      <td>Infraestrutura</td>
				      <td>Auxiliar de infra</td>
				      <td>bryan10092</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-danger"></i></td>
				      <td class="border-left text-center"><i class="fas fa-user-edit fa-small-size text-primary"></i></td>
				      <td class="text-center"><i class="fas fa-user-times fa-small-size text-danger"></i></td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</form>
	</div>

</div>
