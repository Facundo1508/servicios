<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Servicio'), ['action' => 'edit', $servicio->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Servicio'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?> </li>
<li><?= $this->Html->link(__('List Servicios'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Servicio'), ['action' => 'edit', $servicio->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Servicio'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?> </li>
<li><?= $this->Html->link(__('List Servicios'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($servicio->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($servicio->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($servicio->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Categoria') ?></td>
            <td><?= $servicio->has('categoria') ? $this->Html->link($servicio->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $servicio->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($servicio->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($servicio->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Userservicios') ?></h3>
    </div>
    <?php if (!empty($servicio->userservicios)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('User Id') ?></th>
                <th><?= __('Servicio Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($servicio->userservicios as $userservicios): ?>
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
