<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Meu perfil</span><i class="fas fa-user-circle"></i></h1>
	</div>
	<div class="d-block">

		<form class="mt-3 mx-4" id="form-user-create" name="form-user-create" action="" method="POST" onSubmit="">

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="cd_matricula" class="col-md-2 col-form-label col-form-label-lg">Matrícula</label>
					<p class="col-md-10 ml-3 text-primary" id="cd_matricula" name="cd_matricula">1001001</p>
				</div>
				<div class="form-group col-md-4">
					<label for="nm_login" class="col-md-2 col-form-label col-form-label-lg">Login</label>
					<p class="col-md-11 ml-3 text-primary" id="nm_login" name="nm_login">1001001estenio</p>
				</div>
				<div class="form-group col-md-4">
					<label for="cd_status" class="col-md-2 col-form-label col-form-label-lg">Status</label>
					<p class="col-md-10 ml-3 text-primary" id="ds_status" name="ds_status">ATIVO</p>
				</div>
			</div>

        	<div class="form-group">
				<label for="nm_nome" class="col-md-2 col-form-label col-form-label-lg">Nome</label>
				<p class="col-md-11 ml-3 text-primary" id="nm_nome" name="nm_nome">ESTÊNIO CROCODILO MARIANO</p>
			</div>

			<div class="form-row">
    			<div class="form-group col-md-6">
					<label for="cd_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
      				<p class="col-md-10 ml-3 text-primary" id="nm_setor" name="nm_setor">CPD</p>
				</div>
    			<div class="form-group col-md-6" >
					<label for="cd_cargo" class="col-md-2 col-form-label col-form-label-lg">Cargo</label>
      				<p class="col-md-10 ml-3 text-primary" id="nm_cargo" name="nm_cargo">OPERADOR DE CPD</p>
				</div>
			</div>			

			<div class="col-md-11 ml-3 mr-3 mt-1 alert alert-primary" role="alert">
				<p class="mt-1 mb-1 text-center">
					<small><strong>Redefinição de senha!</strong> A nova senha deve conter no mínimo 8 caracteres e no máximo 20. 
                    <br>Deve conter no mínimo uma letra maíuscula, um número e um caractere especial (!, @, #, $, %, &).</small>
				</p>
				<hr>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="ps_password_1" class="col-md-8 col-form-label col-form-label-lg">Digite a nova senha</label>
						<input class="col-md-10 ml-3 form-control form-control-lg" id="ps_password_1" type="password" name="ps_password_1" placeholder="ps_password" required>
					</div>
					<div class="form-group col-md-6">
						<label for="ps_password_2" class="col-md-8 col-form-label col-form-label-lg">Digite novamente a senha</label>
						<input class="col-md-10 ml-3 form-control form-control-lg" id="ps_password_2" type="password" name="ps_password_2" placeholder="ps_password" required>
					</div>
				</div>	  
  				<div class="form-row col-md-12 justify-content-center mt-2">
					<button class="btn btn-lg btn-success mr-2 col-md-4" type="submit" name="gravar" value="1"><i class="fas fa-save"></i><span class="ml-4">SALVAR</span></button>
					<button class="btn btn-lg btn-warning ml-2 col-md-4" type="reset" name="cancelar" value="0"><i class="fas fa-window-close"></i><span class="ml-4">CANCELAR</span></button>
				</div>
			</div>

		</form>

	</div>

</div>
