<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Direccion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Provincias'), ['controller' => 'Provincias', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Provincia'), ['controller' => 'Provincias', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Distritos'), ['controller' => 'Distritos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Distrito'), ['controller' => 'Distritos', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Calles'), ['controller' => 'Calles', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Calle'), ['controller' => 'Calles', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('provincia_id'); ?></th>
            <th><?= $this->Paginator->sort('departamento_id'); ?></th>
            <th><?= $this->Paginator->sort('distrito_id'); ?></th>
            <th><?= $this->Paginator->sort('calle_id'); ?></th>
            <th><?= $this->Paginator->sort('numero'); ?></th>
            <th><?= $this->Paginator->sort('barrio'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($direccions as $direccion): ?>
        <tr>
            <td><?= h($direccion->id) ?></td>
            <td>
                <?= $direccion->has('provincia') ? $this->Html->link($direccion->provincia->id, ['controller' => 'Provincias', 'action' => 'view', $direccion->provincia->id]) : '' ?>
            </td>
            <td>
                <?= $direccion->has('departamento') ? $this->Html->link($direccion->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $direccion->departamento->id]) : '' ?>
            </td>
            <td>
                <?= $direccion->has('distrito') ? $this->Html->link($direccion->distrito->id, ['controller' => 'Distritos', 'action' => 'view', $direccion->distrito->id]) : '' ?>
            </td>
            <td>
                <?= $direccion->has('calle') ? $this->Html->link($direccion->calle->id, ['controller' => 'Calles', 'action' => 'view', $direccion->calle->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($direccion->numero) ?></td>
            <td><?= h($direccion->barrio) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $direccion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $direccion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
