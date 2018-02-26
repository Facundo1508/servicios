<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>



if(isset($user['rol_id']) && $user['rol_id'] == parent::ROL_ADMIN){
      
      <li><?=$this->Html->link(__('Nuevo Servicio'), ['action' => 'add']);?></li>
      <li><?=$this->Html->link(__('Lista de Categorias'), ['controller' => 'Categorias', 'action' => 'index']);?></li>
      <li><?=$this->Html->link(__('Nueva Categoria'), ['controller' => 'Categorias', 'action' => 'add']);?></li>
      <li><?=$this->Html->link(__('Lista de Userservicio'), ['controller' => 'Userservicios', 'action' => 'index']);?></li>
} elseif (isset($user['rol_id']) && $user['rol_id'] == parent::ROL_USUARIO) {
      
    <li><?=$this->Html->link(__('Nuevo Servicio'), ['action' => 'add']);?></li>
}


    
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
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
            
            <td><?= h($servicio->nombre) ?></td>
            <td>
                <?= $servicio->has('categoria') ? $this->Html->link($servicio->categoria->nombre, ['controller' => 'Categorias', 'action' => 'view', $servicio->categoria->id]) : '' ?>
            </td>
            <td><?= h($servicio->created) ?></td>
            <td><?= h($servicio->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $servicio->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $servicio->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $servicio->id], ['confirm' => __('Está seguro que desea borrar {0}?', $servicio->nombre), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
