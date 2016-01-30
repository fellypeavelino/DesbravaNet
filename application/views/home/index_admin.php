<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php
	$user = $this->session->userdata('logged');
	echo "Tela ADM<br>";
	echo "Bem vindo ",$user['name'];
?>


