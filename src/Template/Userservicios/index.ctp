<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Userservicio'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th><?= $this->Paginator->sort('servicio_id'); ?></th>
            
            <th><?= $this->Paginator->sort('categoria_id'); ?></th>
            
            <th class="actions"><?= __('Acciones'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($userservicios as $userservicio): ?>
        <tr>
            
            <td>
                <?= $userservicio->has('user') ? $this->Html->link($userservicio->user->username, ['controller' => 'Users', 'action' => 'view', $userservicio->user->id]) : '' ?>
            </td>
            <td>
                <?= $userservicio->has('servicio') ? $this->Html->link($userservicio->servicio->nombre, ['controller' => 'Servicios', 'action' => 'view', $userservicio->servicio->id]) : '' ?>
            </td>
           
            <td>
                <?= $servicio->has('categoria') ? $this->Html->link($servicio->categoria->nombre, ['controller' => 'Categorias', 'action' => 'view', $servicio->categoria->id]) : '' ?>
            </td>
           
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $userservicio->servicio_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $userservicio->servicio_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $userservicio->servicio_id], ['confirm' => __('Está seguro que desea eliminar {0}?', $userservicio->servicio_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
