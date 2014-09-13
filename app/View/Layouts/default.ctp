<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>{ ATJ consulting }</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
		echo $this->Html->css('../bootstrap/css/bootstrap');
		echo $this->Html->css('style');
		//echo $this->Html->css('../bootstrap/css/bootstrap-theme');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jquery-1.11.1.min');
	?>
</head>
<body>
	<div id="container" style="margin-top: 70px;">
		<div id="header">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">{ atj consulting }</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <form class="navbar-form navbar-right hide" role="search">
			      	<div class="form-group">
			          <input type="text" class="form-control" placeholder="Chercher">
			        </div>
			        <button type="submit" class="btn btn-default">Valider</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="<?php echo Router::url(array('controller' => 'main', 'action' => 'index')); ?>">Accueil</a></li>
			      	<?php $user = IdHelper::GetModelById('User', $this->Session->read('User.id')); ?>
			      	<li class="active"><a>Bonjour, <?php echo $user['User']['lname'] . ' ' . $user['User']['fname']; ?></a></li>
			        <li><a href="<?php echo Router::url(array('controller' => 'app', 'action' => 'logout')); ?>">Se Déconnecter</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div id="content" class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>
</body>
	<?php echo $this->Html->script('../bootstrap/js/bootstrap'); ?>
</html>
