<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New User'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>           
            <th><?= $this->Paginator->sort('email'); ?></th>
            <th><?= $this->Paginator->sort('username'); ?></th>
           
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
                    'confirm' => __('Está seguro que desea activar el usuario {0}?', $user->nombre),
                    'title' => __('Activar'), 
                    'class' => 'btn btn-default glyphicon glyphicon-ok']) 
                    ?>
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
