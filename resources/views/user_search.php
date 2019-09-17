<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Consulta a funcionário</span><i class="fas fa-search"></i></h1>
	</div>

	<div class="d-block ">
		<form class="m-4" id="form-user-search" name="form-user-search" action="user_search" method="POST" onSubmit="">

        	<div class="form-group">
				<label for="ds_search" class="col-md-12 col-form-label col-form-label-lg">Matrícula, nome, login, setor, cargo, perfil ou status</label>
				<div class="form-row col-md-12">
					<input class="form-control form-control-lg col-md-5" id="ds_search" type="search" name="ds_search" placeholder="ds_search" onkeypress="" aria-label="ds_search">
					<button class="btn btn-lg btn-success col-md-2 ml-5" type="submit" name="gravar" value="1"><i class="fas fa-search"></i><span class="ml-3">LOCALIZAR</span></button>
					<button class="btn btn-lg btn-secondary col-md-2 ml-3" type="submit" name="relatorio" value="0"><i class="fas fa-file-alt"></i><span class="ml-3">RELATÓRIO</span></button>
					<button class="btn btn-lg btn-warning col-md-2 ml-3" type="reset" name="limpar" value="0"><i class="fas fa-eraser"></i><span class="ml-3">LIMPAR</span></button>
				</div>
			</div>

			<div class="table-height border overflow-auto mt-4">
				<table id="my-table" class="table table-sm table-striped font-size-table">
				  <thead>
				    <tr class="bg-secondary text-light">
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-matricula" type="button" class="btn btn-secondary border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="small fas fa-search"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-matricula">
								<div class="form-row ml-2 mr-2">
									<input class="form-control form-control-sm col-md-12" id="ds_search_matricula" type="search" name="ds_search_matricula" placeholder="ds_search_matricula" onkeypress="" aria-label="ds_search_matricula">
								</div>
							</div>
							<span class="btn btn-secondary border-0">Matrícula</span>
						</div>
					  </th>
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-nome" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Nome
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-nome">
								<div class="form-row ml-2 mr-2">	
									<input class="form-control form-control-sm col-md-12" id="ds_search_nome" type="search" name="ds_search_nome" placeholder="ds_search_nome" onkeypress="" aria-label="ds_search_nome">
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
								<div class="form-row ml-2 mr-2">
									<input class="form-control form-control-sm col-md-12" id="ds_search_setor" type="search" name="ds_search_setor" placeholder="ds_search_setor" onkeypress="" aria-label="ds_search_setor">
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
									<input class="form-control form-control-sm col-md-12" id="ds_search_cargo" type="search" name="ds_search_cargo" placeholder="ds_search_cargo" onkeypress="" aria-label="ds_search_cargo">
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
									<input class="form-control form-control-sm col-md-12" id="ds_search_login" type="search" name="ds_search_login" placeholder="ds_search_login" onkeypress="" aria-label="ds_search_login">
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
									<input class="form-control form-control-sm col-md-12" id="ds_search_perfil" type="search" name="ds_search_perfil" placeholder="ds_search_perfil" onkeypress="" aria-label="ds_search_perfil">
								</div>
							</div>
						</div>
					  </th>
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-login" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Criação
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-perfil">
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-up"></i><span class="ml-3">Ascendente</span></a>
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-down"></i><span class="ml-3">Descendente</span></a>
								<div class="dropdown-divider"></div>
								<div class="form-row ml-2 mr-2">
									<input class="form-control form-control-sm col-md-12" id="ds_search_criacao" type="search" name="ds_search_criacao" placeholder="ds_search_criacao" onkeypress="" aria-label="ds_search_criacao">
								</div>
							</div>
						</div>
					  </th>
				      <th scope="col">
						<div class="btn-group" role="group">
							<button id="btn-group-login" type="button" class="btn btn-secondary dropdown-toggle border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Atualização
							</button>
							<div class="dropdown-menu" aria-labelledby="btn-group-perfil">
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-up"></i><span class="ml-3">Ascendente</span></a>
								<a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-down"></i><span class="ml-3">Descendente</span></a>
								<div class="dropdown-divider"></div>
								<div class="form-row ml-2 mr-2">
									<input class="form-control form-control-sm col-md-12" id="ds_search_atualizacao" type="search" name="ds_search_atualizacao" placeholder="ds_search_atualizacao" onkeypress="" aria-label="ds_search_atualizacao">
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
				  <?php foreach ($users as $user): ?>
				    <tr>
				      <th scope="row"><?=$user->id_matricula?></th>
				      <td><?=$user->nm_usuario?></td>
				      <td><?=$user->nm_setor?></td>
				      <td><?=$user->nm_cargo?></td>
					  <td><?=$user->ds_login?></td>
					  <td><?=$user->ds_perfil?></td>
					  <td><?=$user->dt_create?></td>
					  <td><?=$user->dt_update?></td>
				      <td class="text-center my-status"><?=$user->ds_status?></td>
					</tr>
				  <?php endforeach?>
				  </tbody>
				</table>
			</div>
		</form>
	</div>

</div>
