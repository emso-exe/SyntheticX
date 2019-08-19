<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Exclusão de setor e cargo</span><i class="far fa-minus-square"></i></h1>
	</div>
	<div class="d-block">

		<form class="m-4" id="form-sector-position-edit" name="form-sector-position-edit" action="" method="POST" onSubmit="">

        	<div class="form-group">
				<label for="nm_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
				<p class="col-md-11 ml-3 text-danger" id="nm_setor" name="nm_setor">SUPORTE WINDOWNS</p>
			</div>

			<div class="col-md-11 ml-3 mr-3 mt-4 alert alert-danger" role="alert">
				<p class="mt-1 mb-1 text-center">
					<small><strong>ATENÇÃO!</strong> Ao clicar no botão <strong>EXCLUIR</strong> não será possível restaurar o setor&nbsp;<strong>SUPORTE WINDOWNS</strong>.</small>
				</p>
  				<hr>
  				<div class="form-row col-md-12 justify-content-center mb-3 mt-4">
					<button class="btn btn-lg btn-danger mr-2 col-md-4" type="submit" name="excluir" value="1"><i class="fas fa-trash-alt"></i><span class="ml-4">EXCLUIR</span></button>
					<button class="btn btn-lg btn-warning ml-2 col-md-4" type="reset" name="cancelar" value="0"><i class="fas fa-window-close"></i><span class="ml-4">CANCELAR</span></button>
				</div>
			</div>

			<br>

			<div class="form-row">
    			<div class="form-group col-md-4">
					<label for="cd_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
					<p class="col-md-11 ml-3 text-danger" id="nm_setor" name="nm_setor">SUPORTE WINDOWNS</p>
				</div>
    			<div class="form-group col-md-4">
					<label for="cd_perfil" class="col-md-6 col-form-label col-form-label-lg">Nível de acesso</label>
					<p class="col-md-11 ml-3 text-danger" id="ds_perfil" name="ds_perfil">SUPER USUÁRIO</p>
				</div>
    			<div class="form-group col-md-4">
					<label for="cd_perfil" class="col-md-6 col-form-label col-form-label-lg">Cargo</label>
					<p class="col-md-11 ml-3 text-danger" id="nm_cargo" name="nm_cargo">ANALISTA DE SUPORTE</p>
				</div>									
			</div>

			<div class="col-md-11 ml-3 mr-3 mt-1 alert alert-danger" role="alert">
				<p class="mt-1 mb-1 text-center">
					<small><strong>ATENÇÃO!</strong> Ao clicar no botão <strong>EXCLUIR</strong> não será possível restaurar o cargo&nbsp;<strong>ANALISTA DE SUPORTE</strong>.</small>
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
