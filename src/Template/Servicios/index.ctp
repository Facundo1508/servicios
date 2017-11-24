<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('nombre'); ?></th>
            <th><?= $this->Paginator->sort('categoria_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($servicios as $servicio): ?>
        <tr>
            <td><?= h($servicio->id) ?></td>
            <td><?= h($servicio->nombre) ?></td>
            <td>
                <?= $servicio->has('categoria') ? $this->Html->link($servicio->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $servicio->categoria->id]) : '' ?>
            </td>
            <td><?= h($servicio->created) ?></td>
            <td><?= h($servicio->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $servicio->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $servicio->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
