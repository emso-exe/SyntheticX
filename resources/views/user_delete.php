<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Exclusão de funcionário</span><i class="fas fa-user-slash"></i></h1>
	</div>
	<div class="d-block">

		<form class="mx-4 my-2" id="form-user-delete" name="form-user-delete" action="" method="POST" onSubmit="">

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="cd_matricula" class="col-md-2 col-form-label col-form-label-lg">Matrícula</label>
					<input class="col-md-10 ml-3 form-control form-control-lg" id="cd_matricula" type="text" name="cd_matricula" placeholder="cd_matricula" onkeypress="" readonly>
				</div>
				<div class="form-group col-md-6">
					<label for="cd_status" class="col-md-2 col-form-label col-form-label-lg">Status</label>
					<input class="col-md-10 ml-3 form-control form-control-lg" id="cd_status" type="text" name="cd_status" placeholder="cd_status" onkeypress="" readonly>
				</div>
			</div>

        	<div class="form-group">
				<label for="nm_nome" class="col-md-2 col-form-label col-form-label-lg">Nome</label>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="nm_nome" type="text" name="nm_nome" placeholder="nm_nome" onkeypress="" readonly>
			</div>

        	<div class="form-group">
				<label for="nm_login" class="col-md-2 col-form-label col-form-label-lg">Login</label>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="nm_login" type="text" name="nm_login" placeholder="nm_login" onkeypress="" readonly>
			</div>

			<div class="form-row">
    			<div class="form-group col-md-6">
					<label for="cd_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
					<input class="col-md-10 ml-3 form-control form-control-lg" id="setor" type="text" name="cd_setor" placeholder="cd_setor" onkeypress="" readonly>
				</div>
    			<div class="form-group col-md-6" >
					<label for="cd_cargo" class="col-md-2 col-form-label col-form-label-lg">Cargo</label>
					<input class="col-md-10 ml-3 form-control form-control-lg" id="cd_cargo" type="text" name="cd_cargo" placeholder="cd_cargo" onkeypress="" readonly>
				</div>
			</div>

			<div class="col-md-11 ml-3 mr-3 mt-2 alert alert-danger" role="alert">
				<p class="mt-1 mb-1 text-center">
					<small><strong>ATENÇÃO!</strong> Ao clicar no botão <strong>EXCLUIR</strong> não será possível restaurar o colaborador&nbsp;<strong>Bryan Joseph Silva</strong>.</small>
				</p>
  				<hr>
  				<div class="form-row col-md-12 justify-content-center">
					<button class="btn btn-lg btn-danger mr-2 col-md-4" type="submit" name="excluir" value="1"><i class="fas fa-trash-alt"></i><span class="ml-4">EXCLUIR</span></button>
					<button class="btn btn-lg btn-warning ml-2 col-md-4" type="reset" name="cancelar" value="0"><i class="fas fa-window-close"></i><span class="ml-4">CANCELAR</span></button>
				</div>
			</div>

		</form>

	</div>

</div>
