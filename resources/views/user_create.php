<div class="d-flex flex-column w-100 h-75">

	<div class="container-fluid h-25 bg-secondary text-center">
		<h1 class="m-3 text-light"><span class="mr-4 opens-regular-italic">Cadastro de funcionário</span><i class="fas fa-user-tie"></i></h1>
	</div>
	<div class="d-block">

		<form class="m-4" id="form-user-create" name="form-user-create" action="user_create" method="POST" onSubmit="">

        	<!--<div class="form-group">
				<label for="cd_matricula" class="col-md-2 col-form-label col-form-label-lg">Matrícula</label>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="id_matricula" type="text" name="id_matricula" placeholder="id_matricula" onkeypress="" required>
			</div>-->

        	<div class="form-group">
				<label for="nm_nome" class="col-md-2 col-form-label col-form-label-lg">Nome</label>
				<input class="col-md-11 ml-3 form-control form-control-lg" id="nm_usuario" type="text" name="nm_usuario" placeholder="nm_usuario" onkeypress="" required>
			</div>

        	<!--<div class="form-group">
				<label for="nm_login" class="col-md-2 col-form-label col-form-label-lg">Login</label>
				<div class="input-group">
					<input class="col-md-9 ml-3 form-control form-control-lg" id="nm_login" aria-describedby="nm_login" type="text" name="ds_login" placeholder="ds_login" onkeypress="" required>
  					<div class="input-group-append">
    					<button class="px-4 btn btn-secondary" type="button" id="nm_login">&nbsp;&nbsp;&nbsp;&nbsp;GERAR LOGIN&nbsp;&nbsp;&nbsp;&nbsp;</button>
  					</div>
				</div>
			</div>-->

			<div class="form-row mt-5">
    			<div class="form-group col-md-6">
					<label for="cd_setor" class="col-md-2 col-form-label col-form-label-lg">Setor</label>
      				<select class="col-md-10 ml-3 form-control form-control-lg" id="id_setor" type="text" name="id_setor" placeholder="id_setor" onchange="" required>
						<option value="0">Selecione um setor</option>
						<?php foreach ($sector as $option): ?>
							<option value="<?=$option->id_setor?>"><?=$option->nm_setor?></option>
						<?php endforeach?>
					</select>
				</div>

    			<div class="form-group col-md-6" >
					<label for="cd_cargo" class="col-md-2 col-form-label col-form-label-lg">Cargo</label>
      				<select class="col-md-10 ml-3 form-control form-control-lg" id="id_cargo" type="text" name="id_cargo" placeholder="id_cargo" onchange="" required>
						<option data-position="0" value="0">Selecione um cargo</option>
						<?php foreach ($position as $option): ?>
							<option data-position="<?=$option->id_setor?>" value="<?=$option->id_cargo?>"><?=$option->nm_cargo?></option>
						<?php endforeach?>
					</select>
				</div>
			</div>

			<div class="form-row col-md-12 justify-content-center mt-5">
				<button class="btn btn-lg btn-success m-4 col-md-4" type="submit" name="gravar" value="1"><i class="fas fa-save"></i><span class="ml-4">CADASTRAR</span></button>
				<button class="btn btn-lg btn-warning m-4 col-md-4" type="reset" name="limpar" value="0"><i class="fas fa-eraser"></i><span class="ml-4">LIMPAR</span></button>
			</div>

		</form>
	</div>

	<div id="modalMessage"></div>

<?php
if ($_GET) {
    $user = json_decode(base64_decode($_GET['u']), true);
    echo '<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h5 class="modal-title text-white" id=" modalLabel">Usuário cadastrado</h5>
				</div>
				<div class="modal-body">
					<label>Mátricula:</label><span class="text-primary"> ' . $user[0]["id_matricula"] . '</span><br>
					<label>Nome:</label><span class="text-primary"> ' . $user[0]["nm_usuario"] . '</span><br>
					<label>Login:</label><span class="text-primary"> ' . $user[0]["ds_login"] . '</span><br>
					<label>Setor:</label><span class="text-primary"> ' . $user[0]["nm_setor"] . '</span><br>
					<label>Cargo:</label><span class="text-primary"> ' . $user[0]["nm_cargo"] . '</span><br>
					<label>Data de criação:</label><span class="text-primary"> ' . $user[0]["dt_create"] . '</span>
				</div>
				<div class="modal-footer">
					<a class="btn btn-primary px-5" href="user_create">OK</a>
				</div>
			</div>
		</div>
	</div>';
}
?>

</div>
