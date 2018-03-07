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
    <li><?= $this->Html->link(__('Lista de Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>           
            <th><?= $this->Paginator->sort('email', ['label' => 'e-Mail']); ?></th>
            <th><?= $this->Paginator->sort('username', ['label' => 'Nombre de usuario']); ?></th>
           
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            
            <td><?= h($user->email) ?></td>
            <td><?= h($user->username) ?></td>
            
            <td class="actions">
                <?= $this->Form->postLink('', ['action' => 'activar', $user->id], [
                    'confirm' => __('Está seguro que desea activar el usuario {0}?', $user->username),
                    'title' => __('Activar'), 
                    'class' => 'btn btn-default glyphicon glyphicon-ok']) 
                    ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $user->id], ['confirm' => __('Seguro que desea no activar a {0}?', $user->username), 'title' => __('No activar'), 'class' => 'btn btn-default glyphicon glyphicon-remove']) ?>
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
