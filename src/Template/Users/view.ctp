<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Esta seguro que desea eliminar # {0}?', $user->username)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
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
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Esta seguro que desea eliminar # {0}?', $user->username)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
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
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($user->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($user->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($user->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Apellido') ?></td>
            <td><?= h($user->apellido) ?></td>
        </tr>
        <tr>
            <td><?= __('Telefono') ?></td>
            <td><?= h($user->telefono) ?></td>
        </tr>
        <tr>
            <td><?= __('Email', ['label' => 'e-Mail']) ?></td>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <td><?= __('Username', ['label' => 'Nombre de usuario']) ?></td>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <td><?= __('Password', ['label' => 'Contraseña']) ?></td>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <td><?= __('Rol') ?></td>
            <td><?= $user->has('rol') ? $this->Html->link($user->rol->id, ['controller' => 'Rols', 'action' => 'view', $user->rol->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Genero') ?></td>
            <td><?= $user->has('genero') ? $this->Html->link($user->genero->id, ['controller' => 'Generos', 'action' => 'view', $user->genero->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <td><?= __('Activo') ?></td>
            <td><?= $user->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Userservicios') ?></h3>
    </div>
    <?php if (!empty($user->userservicios)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('User Id') ?></th>
                <th><?= __('Servicio Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($user->userservicios as $userservicios): ?>
                <tr>
                    <td><?= h($userservicios->user_id) ?></td>
                    <td><?= h($userservicios->servicio_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Userservicios', 'action' => 'view', $userservicios->servicio_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Userservicios', 'action' => 'edit', $userservicios->servicio_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Userservicios', 'action' => 'delete', $userservicios->servicio_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userservicios->servicio_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Userservicios</p>
    <?php endif; ?>
</div>
