<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Exclusão de setor e cargo</span><i class="fas fa-delete"></i></h1>
	</div>
	<div class="d-block">

		<form class="m-4" id="form-sector-position-edit" name="form-sector-position-edit" action="" method="POST" onSubmit="">

        	<div class="form-group">
				<label for="nm_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="nm_setor" type="text" name="nm_setor" placeholder="nm_setor" onkeypress="" required>
			</div>

			<div class="col-md-11 ml-3 mr-3 mt-2 alert alert-danger" role="alert">
				<p class="mt-1 mb-1 text-center">
					<small><strong>ATENÇÃO!</strong> Ao clicar no botão <strong>EXCLUIR</strong> não será possível restaurar o setor&nbsp;<strong>ESTOQUE</strong>.</small>
				</p>
  				<hr>
  				<div class="form-row col-md-12 justify-content-center">
					<button class="btn btn-lg btn-danger mr-2 col-md-4" type="submit" name="excluir" value="1"><i class="fas fa-trash-alt"></i><span class="ml-4">EXCLUIR</span></button>
					<button class="btn btn-lg btn-warning ml-2 col-md-4" type="reset" name="cancelar" value="0"><i class="fas fa-window-close"></i><span class="ml-4">CANCELAR</span></button>
				</div>
			</div>

			<hr>

			<div class="form-row">
    			<div class="form-group col-md-6">
					<label for="cd_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
      				<select class="col-md-10 ml-3 form-control form-control-lg" id="setor" type="text" name="cd_setor" placeholder="cd_setor" onchange="" required>
						<option value="">Selecione um setor</option>
						<option value="">CPD</option>
						<option value="">Suporte</option>
					</select>
				</div>
			</div>

        	<div class="form-group">
				<label for="nm_nome" class="col-md-2 col-form-label col-form-label-lg">Cargo</label>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="nm_nome" type="text" name="nm_nome" placeholder="nm_nome" onkeypress="" required>
			</div>

			<div class="col-md-11 ml-3 mr-3 mt-2 alert alert-danger" role="alert">
				<p class="mt-1 mb-1 text-center">
					<small><strong>ATENÇÃO!</strong> Ao clicar no botão <strong>EXCLUIR</strong> não será possível restaurar o cargo&nbsp;<strong>AUXILIAR DE ESTOQUE</strong>.</small>
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
