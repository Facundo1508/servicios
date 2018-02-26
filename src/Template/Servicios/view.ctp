<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Editar Servicio'), ['action' => 'edit', $servicio->id]) ?> </li>
<li><?= $this->Form->postLink(__('Borrar Servicio'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Servicios'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Servicio'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>

<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Editar Servicio'), ['action' => 'edit', $servicio->nombre]) ?> </li>
<li><?= $this->Form->postLink(__('Borrar Servicio'), ['action' => 'delete', $servicio->nombre], ['confirm' => __('Esta seguro que desea borrar {0}?', $servicio->nombre)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Servicios'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Servicio'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>

</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($servicio->nombre) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($servicio->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Categoria') ?></td>
            <td><?= $servicio->has('categoria') ? $this->Html->link($servicio->categoria->nombre, ['controller' => 'Categorias', 'action' => 'view', $servicio->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Creado') ?></td>
            <td><?= h($servicio->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Ultima modificación') ?></td>
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
