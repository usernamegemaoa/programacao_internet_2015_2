﻿<html>
<head>
	<title>Criando uma página dinâmica em PHP</title>
</head>

<body>
<?php 
if(isset($_REQUEST['nome'])):
?>
<h1>Nome:
<?php 
	echo $_REQUEST['nome'];
?>
</h1>

<?php 
endif;
 ?>
</body>
</html>