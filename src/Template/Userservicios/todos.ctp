<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/signin');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['controller' => 'Userservicios', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['controller' => 'Userservicios', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th><?= $this->Paginator->sort('servicio_id'); ?></th>
            
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
