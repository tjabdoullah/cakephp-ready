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
	<title>
		{ ATJ consulting }
	</title>
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
	<div id="container">
		<div id="header">
			
		</div>
		<div id="content">
			<div class="container">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</div>
	<?php echo $this->fetch('script');	?>
	<?php echo $this->Html->script('../bootstrap/js/bootstrap'); ?>
</body>
</html>
