<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userservicio $userservicio
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Lista de Servicios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($userservicio); ?>
<fieldset>
    <?php
    echo $this->Form->control('servicio_id', ['options' => $servicios]);
    
    if($current_user['rol_id'] == $rol_admin)
    echo $this->Form->control('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Añadir PREMIUM")); ?>
<?= $this->Form->end() ?>
