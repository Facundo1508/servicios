<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/signin');
$this->start('tb_actions');
?>
    
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
            <th><?= $this->Paginator->sort('nombre'); ?></th>
            <th><?= $this->Paginator->sort('categoria_id'); ?></th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($servicios as $servicio): ?>
        <tr>
            
            <td><?= h($servicio->nombre) ?></td>
            <td>
                <?= $servicio->has('categoria') ? $this->Html->link($servicio->categoria->nombre, ['controller' => 'Categorias', 'action' => 'view', $servicio->categoria->id]) : '' ?>
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

<div class="userform">
    
     <?= $this->Html->link(
    	__('Publica tu servicio'), 
    	['controller' => 'Servicios', 'action' => 'add'], 
    	['class' => 'btn btn-primary']
    	) ?>
    <?= $this->Form->end() ?>
    
    <?= $this->Html->link(
    	__('Volver a la página principal'), 
    	['controller' => 'Pages', 'action' => 'display', 'home'], 
    	['class' => 'btn btn-primary']
    	) ?>
    <?= $this->Form->end() ?>
 
</div>