<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Lista de Roles'), ['controller' => 'Rols', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Rol'), ['controller' => 'Rols', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Lista de Generos'), ['controller' => 'Generos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Genero'), ['controller' => 'Generos', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']); ?></li>
    
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
            <th><?= $this->Paginator->sort('nombre'); ?></th>
            <th><?= $this->Paginator->sort('apellido'); ?></th>
            <th><?= $this->Paginator->sort('telefono'); ?></th>
            <th><?= $this->Paginator->sort('email'); ?></th>
            <th><?= $this->Paginator->sort('username'); ?></th>
            
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            
            <td><?= h($user->nombre) ?></td>
            <td><?= h($user->apellido) ?></td>
            <td><?= h($user->telefono) ?></td>
            <td><?= h($user->email) ?></td>
            <td><?= h($user->username) ?></td>
            
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $user->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $user->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $user->id], ['confirm' => __('Seguro que desea borrar a {0}?', $user->username), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
