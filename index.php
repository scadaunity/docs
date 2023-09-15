
<?php
require_once 'template/header.php';
require_once 'template/sidebar.php';
?>

<div class="docs-content">
	<div class="container">
  		<?php
		require_once 'articles/inicio.php';
  		require_once 'articles/rotas.php';
		require_once 'articles/validacao.php';
		require_once 'articles/seguranca.php';
		require_once 'articles/database.php';
		require_once 'articles/webpack.php';
		?>
<?php
require_once 'template/footer.php';
?>
