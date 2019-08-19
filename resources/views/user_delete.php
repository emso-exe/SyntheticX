<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Exclusão de funcionário</span><i class="fas fa-user-slash"></i></h1>
	</div>
	<div class="d-block">

		<form class="m-4" id="form-user-delete" name="form-user-delete" action="" method="POST" onSubmit="">

		<div class="form-row">
				<div class="form-group col-md-4">
					<label for="cd_matricula" class="col-md-2 col-form-label col-form-label-lg">Matrícula</label>
					<p class="col-md-10 ml-3 text-danger" id="cd_matricula" name="cd_matricula">1003003</p>
				</div>
				<div class="form-group col-md-4">
					<label for="nm_login" class="col-md-2 col-form-label col-form-label-lg">Login</label>
					<p class="col-md-11 ml-3 text-danger" id="nm_login" name="nm_login">1003003bryan</p>
				</div>
				<div class="form-group col-md-4">
					<label for="cd_status" class="col-md-2 col-form-label col-form-label-lg">Status</label>
					<p class="col-md-10 ml-3 text-danger" id="ds_status" name="ds_status">BLOQUEADO</p>
				</div>
			</div>

        	<div class="form-group">
				<label for="nm_nome" class="col-md-2 col-form-label col-form-label-lg">Nome</label>
				<p class="col-md-11 ml-3 text-danger" id="nm_nome" name="nm_nome">BRYAN JOSEPH SILVA</p>
			</div>

			<div class="form-row">
    			<div class="form-group col-md-6">
					<label for="cd_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
      				<p class="col-md-10 ml-3 text-danger" id="nm_setor" name="nm_setor">DESENVOLVIMENTO</p>
				</div>
    			<div class="form-group col-md-6" >
					<label for="cd_cargo" class="col-md-2 col-form-label col-form-label-lg">Cargo</label>
      				<p class="col-md-10 ml-3 text-danger" id="nm_cargo" name="nm_cargo">ANALISTA DE SISTEMAS</p>
				</div>
			</div>

			<div class="col-md-11 ml-3 mr-3 mt-4 alert alert-danger" role="alert">
				<p class="mt-1 mb-1 text-center">
					<small><strong>ATENÇÃO!</strong> Ao clicar no botão <strong>EXCLUIR</strong> não será possível restaurar o colaborador&nbsp;<strong>Bryan Joseph Silva</strong>.</small>
				</p>
  				<hr>
  				<div class="form-row col-md-12 justify-content-center mb-3 mt-4">
					<button class="btn btn-lg btn-danger mr-2 col-md-4" type="submit" name="excluir" value="1"><i class="fas fa-trash-alt"></i><span class="ml-4">EXCLUIR</span></button>
					<button class="btn btn-lg btn-warning ml-2 col-md-4" type="reset" name="cancelar" value="0"><i class="fas fa-window-close"></i><span class="ml-4">CANCELAR</span></button>
				</div>
			</div>

		</form>

	</div>

</div>
