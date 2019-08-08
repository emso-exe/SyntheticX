<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Consulta a login</span><i class="fas fa-search"></i></h1>
	</div>

	<div class="d-block ">
		<form class="m-4" id="form-user-search" name="form-user-search" action="" method="POST" onSubmit="">

        	<div class="form-group">
				<label for="ds_search" class="col-md-12 col-form-label col-form-label-lg">Matrícula, nome, login, setor, cargo, perfil ou status</label>
				<div class="form-row col-md-12">
					<input class="form-control form-control-lg col-md-5" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search" required>
					<button class="btn btn-lg btn-success col-md-2 ml-5" type="submit" name="gravar" value="1"><i class="fas fa-search"></i><span class="ml-3">LOCALIZAR</span></button>
					<button class="btn btn-lg btn-secondary col-md-2 ml-3" type="submit" name="relatorio" value="0"><i class="fas fa-file-alt"></i><span class="ml-3">RELATÓRIO</span></button>
					<button class="btn btn-lg btn-warning col-md-2 ml-3" type="reset" name="limpar" value="0"><i class="fas fa-eraser"></i><span class="ml-3">LIMPAR</span></button>
				</div>
			</div>

			<div class="table-height border overflow-auto mt-4">
				<table class="table table-sm table-striped font-size-table">
				  <thead>
				    <tr class="bg-secondary text-light">
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-matricula" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Matrícula
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-matricula">
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
							<button id="btn-group-nome" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Nome
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-nome">
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
							<button id="btn-group-login" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Login
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-login">
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
							<button id="btn-group-login" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-login" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Ativação
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
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-login" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Último reset
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
				      <th scope="col" class="text-center">
						<div class="btn-group" role="group">
							<button id="btn-group-status" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Status
							</button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btn-group-status">
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-up"></i><span class="ml-3">Ascendente</span></a>
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-down"></i><span class="ml-3">Descendente</span></a>
								<div class="dropdown-divider"></div>
								<div class="form-check ml-3 checkbox-success">
									<input class="form-check-input checkbox-success" type="checkbox" value="" id="check-ativo">
									<i class="fas fa-circle text-success"></i><span><small class="ml-2" for="check-ativo">Ativo(a)</small></span>
								</div>
								<div class="form-check ml-3">
									<input class="form-check-input" type="checkbox" value="" id="check-inativo">
									<i class="fas fa-circle text-warning"></i><span><small class="ml-2" for="check-inativo">Inativo(a)</small></span>
								</div>
								<div class="form-check ml-3">
									<input class="form-check-input" type="checkbox" value="" id="check-bloqueado">
									<i class="fas fa-circle text-danger"></i><span><small class="ml-2" for="check-bloqueado">Bloqueado(a)</small></span>
								</div>
							</div>
						</div>
					  </th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">10091</th>
				      <td>Mark Christopher Silva</td>
				      <td>UX/UI</td>
				      <td>Analista de qualidade</td>
					  <td>mark10091</td>
					  <td>Usuário</td>
					  <td>20:00 07/08/2019</td>
					  <td>20:00 07/08/2019</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10093</th>
				      <td>Rafhael James Santos</td>
				      <td>Desenvolvimento</td>
				      <td>Programador VB</td>
					  <td>rafhael10093</td>
					  <td>Usuário</td>
					  <td>10:00 07/05/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-warning"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10092</th>
				      <td>Bryan Miller Souza</td>
				      <td>Infraestrutura</td>
				      <td>Auxiliar de infra</td>
					  <td>bryan10092</td>
					  <td>Super Usuário</td>
					  <td>21:00 08/08/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10096</th>
				      <td>Joseph Peter Oliveira</td>
				      <td>Desenvolvimento</td>
				      <td>Programador Cobol</td>
					  <td>joseph10096</td>
					  <td>Administrador</td>
					  <td>19:30 07/08/2019</td>
					  <td>20:00 07/08/2019</td>
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10091</th>
				      <td>Mark Christopher Silva</td>
				      <td>UX/UI</td>
				      <td>Analista de qualidade</td>
					  <td>mark10091</td>
					  <td>Usuário</td>
					  <td>10:25 01/08/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10093</th>
				      <td>Rafhael James Santos</td>
				      <td>Desenvolvimento</td>
				      <td>Programador VB</td>
					  <td>rafhael10093</td>
					  <td>Usuário</td>
					  <td>20:00 01/07/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-warning"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10092</th>
				      <td>Bryan Miller Souza</td>
				      <td>Infraestrutura</td>
				      <td>Auxiliar de infra</td>
					  <td>bryan10092</td>
					  <td>Super Usuário</td>
					  <td>17:00 02/06/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10096</th>
				      <td>Joseph Peter Oliveira</td>
				      <td>Desenvolvimento</td>
				      <td>Programador Cobol</td>
					  <td>joseph10096</td>
					  <td>Administrador</td>
					  <td>18:50 03/01/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10093</th>
				      <td>Rafhael James Santos</td>
				      <td>Desenvolvimento</td>
				      <td>Programador VB</td>
					  <td>rafhael10093</td>
					  <td>Usuário</td>
					  <td>20:00 07/08/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-warning"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10092</th>
				      <td>Bryan Miller Souza</td>
				      <td>Infraestrutura</td>
				      <td>Auxiliar de infra</td>
					  <td>bryan10092</td>
					  <td>Super Usuário</td>
					  <td>21:50 08/08/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-danger"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10096</th>
				      <td>Joseph Peter Oliveira</td>
				      <td>Desenvolvimento</td>
				      <td>Programador Cobol</td>
					  <td>joseph10096</td>
					  <td>Usuário</td>
					  <td>20:40 17/08/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				    </tr>				    <tr>
				      <th scope="row">10093</th>
				      <td>Rafhael James Santos</td>
				      <td>Desenvolvimento</td>
				      <td>Programador VB</td>
					  <td>rafhael10093</td>
					  <td>Usuário</td>
					  <td>16:00 26/08/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-warning"></i></td>
				    </tr>
				    <tr>
				      <th scope="row">10092</th>
				      <td>Bryan Miller Souza</td>
				      <td>Infraestrutura</td>
				      <td>Auxiliar de infra</td>
					  <td>bryan10092</td>
					  <td>Usuário</td>
					  <td>20:00 15/04/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-danger"></i></td>
				    </tr>
				    <tr class="border-bottom">
				      <th scope="row">10096</th>
				      <td>Joseph Peter Oliveira</td>
				      <td>Desenvolvimento</td>
				      <td>Programador Cobol</td>
					  <td>joseph10096</td>
					  <td>Usuário</td>
					  <td>23:00 07/03/2019</td>	
					  <td>20:00 07/08/2019</td>				  
				      <td class="text-center"><i class="fas fa-circle fa-small-size text-success"></i></td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</form>
	</div>

</div>
