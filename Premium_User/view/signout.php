<?php

    setcookie('status', 'false', time()-5000, '/');
	header('location: ../../Admin/view/signin.php');

?>