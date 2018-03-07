<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    
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
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th><?= $this->Paginator->sort('servicio_id'); ?></th>
            
            
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
           
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $userservicio->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $userservicio->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $userservicio->id], ['confirm' => __('Está seguro que desea eliminar {0}?', $userservicio->servicio_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
