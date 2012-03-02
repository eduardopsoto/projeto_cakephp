<!DOCTYPE html>
<html lang="pt-br">
<head>
<title><?php echo $title_for_layout ?></title>

<?php echo $this->Html->css('estilo_novo') ?>


<h1> Festival de musica sertaneja 2012 </h1>


<div id = "menu">
<ul>
  <li>
		<?php
			echo $this->Html->link('Pagina inicial', '/pages/home', array('controller' => 'pages', 'action'=>'home'));
        ?>
  </li>
  <li>
		<?php
			echo $this->Html->link('Sobre o evento', '/pages/sobre', array('controller' => 'pages', 'action'=>'sobre'));
        ?>
  
  </li>
  <li>
		<?php
			echo $this->Html->link('Como Chegar no Evento', '/pages/mapa', array('controller' => 'pages', 'action'=>'mapa'));
			
        ?>
  
  </li>
  <li>
		<?php
			echo $this->Html->link('Contato', '/pages/contato', array('controller' => 'pages', 'action'=>'contato'));
		?>
  </li>	
</ul>  
</div>

</head>
<body>

<div id="page">
		<div id="content">
			<div class="box">
<?php echo $content_for_layout ?>

</div>
</div>
</div>
		
<div id="footer">

		
</div>
</body>
</html>