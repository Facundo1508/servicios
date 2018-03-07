<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Userservicio'), ['action' => 'edit', $userservicio->servicio_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Userservicio'), ['action' => 'delete', $userservicio->servicio_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userservicio->servicio_id)]) ?> </li>
<li><?= $this->Html->link(__('List Userservicios'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Userservicio'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<?php
if(isset($current_user['rol_id']) && $current_user['rol_id'] == $rol_admin){
?>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['controller' => 'Userservicios', 'action' => 'todos']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['controller' => 'Userservicios', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Nuevo PREMIUM'), ['controller' => 'Userservicios', 'action' => 'premium']); ?></li>
<?php      
} elseif (isset($current_user['rol_id']) && $current_user['rol_id'] == $rol_usuario) {
?>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['controller' => 'Userservicios', 'action' => 'todos']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['controller' => 'Userservicios', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Nuevo PREMIUM'), ['controller' => 'Userservicios', 'action' => 'premium']); ?></li>
<?php
}
?>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($userservicio->servicio->nombre) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
       
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $userservicio->has('user') ? $this->Html->link($userservicio->user->nombre, ['controller' => 'Users', 'action' => 'view', $userservicio->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Servicio') ?></td>
            <td><?= $userservicio->has('servicio') ? $this->Html->link($userservicio->servicio->nombre, ['controller' => 'Servicios', 'action' => 'view', $userservicio->servicio->id]) : '' ?></td>
        </tr>
    </table>
</div>

