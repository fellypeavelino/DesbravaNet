<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<h1>Cadastro</h1>
		<?php

		echo form_open("index.php/usuarios/novo");

		echo form_label("Usuario","usuario");
		echo form_input(array(
			"name"=>"usuario",
			"id"=>"usuario",
			"class"=>"form-control",
			"maxlength"=>"255"
		));
		
		echo form_label("Nome","nome");
		echo form_input(array(
			"name"=>"nome",
			"id"=>"nome",
			"class"=>"form-control",
			"maxlength"=>"255"
		));

		echo form_label("Email","email");
		echo form_input(array(
			"name"=>"email",
			"id"=>"email",
			"class"=>"form-control",
			"maxlength"=>"255"
		));

		echo form_label("Senha","senha");
		echo form_password(array(
			"name"=>"senha",
			"id"=>"senha",
			"class"=>"form-control",
			"maxlength"=>"255"
		));
		echo "<br>";

		echo form_button(array(
			"id"=>"btn",
			"class"=>"btn btn-primary",
			"content"=>"Cadastrar",
			"type"=>"submit"
		));

		echo form_close();
		?>
	</div>
</div>