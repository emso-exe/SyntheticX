<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Edição de funcionário</span><i class="fas fa-user-edit"></i></h1>
	</div>
	<div class="d-block">

		<form class="m-4" id="form-user-edit" name="form-user-edit" action="" method="POST" onSubmit="">

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="cd_matricula" class="col-md-2 col-form-label col-form-label-lg">Matrícula</label>
					<input class="col-md-10 ml-3 form-control form-control-lg" id="cd_matricula" type="text" name="cd_matricula" placeholder="cd_matricula" onkeypress="" required>
				</div>
				<div class="form-group col-md-6">
						<label for="cd_status" class="col-md-2 col-form-label col-form-label-lg">Status</label>
						<select class="col-md-10 ml-3 form-control form-control-lg" id="cd_status" type="text" name="cd_status" placeholder="cd_status" onchange="" required>
							<option value="0">Ativo</option>
							<option value="1">Inativo</option>
							<option value="2">Bloqueado</option>
						</select>
				</div>
			</div>

        	<div class="form-group">
				<label for="nm_nome" class="col-md-2 col-form-label col-form-label-lg">Nome</label>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="nm_nome" type="text" name="nm_nome" placeholder="nm_nome" onkeypress="" required>
			</div>

        	<div class="form-group">
        		<div class="form-row justify-content-between mr-5">
					<label for="nm_login" class="col-md-2 col-form-label col-form-label-lg ml-3">Login</label>
				</div>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="nm_login" type="text" name="nm_login" placeholder="nm_login" onkeypress="" required>
			</div>

			<div class="form-row">
    			<div class="form-group col-md-6">
					<label for="cd_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
      				<select class="col-md-10 ml-3 form-control form-control-lg" id="setor" type="text" name="cd_setor" placeholder="cd_setor" onchange="" required>
						<option value="">Selecione um setor</option>
						<option value="">CPD</option>
						<option value="">Suporte</option>
					</select>
				</div>
    			<div class="form-group col-md-6" >
					<label for="cd_cargo" class="col-md-2 col-form-label col-form-label-lg">Cargo</label>
      				<select class="col-md-10 ml-3 form-control form-control-lg" id="cd_cargo" type="text" name="cd_cargo" placeholder="cd_cargo" onchange="" required>
						<option value="0">Selecione um cargo</option>
						<option value="1">Operador de CPD</option>
						<option value="2">Analista de suporte</option>
					</select>
				</div>
			</div>

			<div class="form-row col-md-12 justify-content-center">
				<button class="btn btn-lg btn-success m-4 col-md-4" type="submit" name="gravar" value="1"><i class="fas fa-save"></i><span class="ml-4">SALVAR</span></button>
				<button class="btn btn-lg btn-warning m-4 col-md-4" type="reset" name="limpar" value="0"><i class="fas fa-window-close"></i><span class="ml-4">CANCELAR</span></button>
			</div>

		</form>

	</div>

</div>
