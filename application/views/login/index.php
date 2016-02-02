<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script type="text/javascript">
	window.onload = function() {
    	start();
    };

	function start(){
		document.getElementById("overlay").style.display = "none";
		setTimeout(function() {
		    $('#success-alert').fadeOut(3000);
		}, 1000);
	};

	function load(){
		document.getElementById("overlay").style.display = "block";
	};
</script>

<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
  		<h1>DesbravaNet</h1>

  		<div class="panel panel-success">
  			<div class="panel-heading">
  				<h3 class ="panel-title"><span class="glyphicon glyphicon-user"></span> Identifique-se</h3>
  			</div>
  			<div class="panel panel-body">
	      		<form action="<?php echo base_url('index.php/Login/logon');?>" method="post" onsubmit="load()">
	      			<input placeholder="Usuário" class="form-control input-lg" type="text" name="user"><br>
		  			<input placeholder="Senha" class="form-control input-lg" type="password" name="pass"><br>
		  			<?php if($this->session->flashdata('danger')):
						$message = $this->session->flashdata('danger');
						?>
						<div class="alert alert-danger" id="success-alert">
						    <button type="button" class="close" data-dismiss="alert">x</button>
						    <?php echo $this->session->flashdata('danger'); ?>
						</div>
					<?php endif; ?>
					<div class="g-recaptcha" data-sitekey="6LcgGhcTAAAAACSegU_kc-S42Kcygw-2HdCnMoNG"></div><br>
		  			<input id="login" class="btn btn-lg btn-block btn-primary" type="submit" value="Login"></input>
				</form>
				<div id="overlay" class="overlay" display="none">
	              	<i class="fa fa-refresh fa-spin"></i>
	            </div>
			</div>
		</div>

	</div> <!-- fim da coluna de 6 -->   
</div> <!-- fim da linha -->