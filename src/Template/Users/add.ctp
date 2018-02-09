<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Añadir usuarios') ?></legend>
    <?php
    echo $this->Form->control('nombre',['label' => 'Nombre']);
    echo $this->Form->control('apellido', ['label' => 'Apellido']);
    echo $this->Form->control('telefono', ['label' => 'Telefono']);
    echo $this->Form->control('email', ['label' => 'e-Mail']);
    echo $this->Form->control('username', ['label' => 'Nombre de usuario']);
    echo $this->Form->control('password', ['label' => 'Contraseña']);
    echo $this->Form->control('activo', ['label' => 'Activo']);
    echo $this->Form->control('rol_id', ['label' => 'Rol'], ['options' => $rols]);
    echo $this->Form->control('genero_id',['label' => 'Genero'], ['options' => $generos]);
    ?>
</fieldset>
<?= $this->Form->button(__("Agregar")); ?>
<?= $this->Form->end() ?>
