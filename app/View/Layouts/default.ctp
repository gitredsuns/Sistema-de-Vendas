<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	
	<style>
		.ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
		.ui-sortable-placeholder * { visibility: hidden; }
	</style>
	
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('bootstrap');
		
		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->script('prettify');
		echo $this->Html->script('bootstrap-transition');
		echo $this->Html->script('bootstrap-alert');
		echo $this->Html->script('bootstrap-modal');
		echo $this->Html->script('bootstrap-dropdown');
		echo $this->Html->script('bootstrap-scrollspy');
		echo $this->Html->script('bootstrap-tab');
		echo $this->Html->script('bootstrap-tooltip');
		echo $this->Html->script('bootstrap-popover');
		echo $this->Html->script('bootstrap-button');
		echo $this->Html->script('bootstrap-collapse');
		echo $this->Html->script('bootstrap-carousel');
		echo $this->Html->script('bootstrap-typeahead');
		echo $this->Html->script('application');
		//echo $this->Html->script('interface');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="navbar navbar-fixed-top">
		      <div class="navbar-inner">
		        <div class="container-fluid">
		          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </a>
		          <a class="brand" href="#">Vendas</a>
		            <form class="navbar-form pull-right">
		              <input type="text" class="span2" data-provide="typeahead">
		              <button class="btn btn-primary" type="submit">
		              <i class=" icon-search icon-white"></i>
		              </button>
		            </form>
		          <div class="nav-collapse pull-left">
		            <ul class="nav">
		              <li class="active"><a href="">Dashboard</a></li>
		              <li><a href="usuarios">Usuarios</a></li>
		              <li><?php echo $this->Html->link('Minha conta', array('controller' => 'Usuarios', 'action' => 'conta')); ?></li>
		              <li><?php echo $this->Html->link('Sair', array('controller' => 'Usuarios', 'action' => 'sair')); ?></li>
		            </ul>
		          </div><!--/.nav-collapse -->
		        </div>
		      </div>
		    </div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	
	<script>

	jQuery( document ).ready( function() {
		jQuery(".drag").sortable({
			connectWith : '.drag',
			dropOnEmpty: true,
			update : function( event, ui ) 
			{ 	
				//alert( jQuery( this ).find('.box').attr("id") ); 
				
				$.ajax({
					type: "POST",
					cache: false,
					url	: '<?= $this->webroot; ?>vendas/editar_status',
					data: "status="+jQuery( this ).attr( "id" )+'&id='+jQuery( this ).find('.box').attr("id"),
					success: function(html) 
					{
						alert( html );
					}
				});
			}
		});
		jQuery( ".drag" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" );
	});
	</script>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
