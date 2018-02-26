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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $servicio->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Borrar'),
        ['action' => 'delete', $servicio->id],
        ['confirm' => __('Esta seguro que desea borrar {0}?', $servicio->nombre)]
    )
    ?>
    </li>
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
    <legend><?= __('Editar {0}', ['Servicio']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    echo $this->Form->control('categoria_id', ['options' => $categorias]);
    ?>
</fieldset>
<?= $this->Form->button(__("Guardar")); ?>
<?= $this->Form->end() ?>
