<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
<li><?= $this->Form->postLink(__('Borrar Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Categorias'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nueva Categoria'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('Lista de Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Nuevo Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
<li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($categoria->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($categoria->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($categoria->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($categoria->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($categoria->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Servicios') ?></h3>
    </div>
    <?php if (!empty($categoria->servicios)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Categoria Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categoria->servicios as $servicios): ?>
                <tr>
                    <td><?= h($servicios->id) ?></td>
                    <td><?= h($servicios->nombre) ?></td>
                    <td><?= h($servicios->categoria_id) ?></td>
                    <td><?= h($servicios->created) ?></td>
                    <td><?= h($servicios->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Servicios', 'action' => 'view', $servicios->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Servicios', 'action' => 'edit', $servicios->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Servicios', 'action' => 'delete', $servicios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicios->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Servicios</p>
    <?php endif; ?>
</div>
