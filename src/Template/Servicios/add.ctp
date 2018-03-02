<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio $servicio
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
   
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Lista de Servicios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($servicio); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Servicio']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    echo $this->Form->control('categoria_id', ['options' => $categorias]);
    ?>
</fieldset>
<?= $this->Form->button(__("Publicar")); ?>
<?= $this->Form->end() ?>
    <div class="users form">
        <?= $this->Html->link(
    	__(' Publicar en Premium '), 
    	['controller' => 'Servicios', 'action' => 'premium'], 
    	['class' => 'btn btn-primary']
    	) 
        
        ?>
    <?= $this->Form->end() ?>
    </div>