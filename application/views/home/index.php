<?php

$user = $this->session->userdata('logged');
echo "Bem vindo ",$user['name'];

?>