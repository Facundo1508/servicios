<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userservicio $userservicio
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $userservicio->servicio_id],
        ['confirm' => __('Estas seguro que deseas borrar {0}?', $userservicio->servicio_id)]
    )
    ?>
    </li>
    
<?php
if(isset($current_user['rol_id']) && $current_user['rol_id'] == $rol_admin){
?>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']); ?></li>
<?php      
} elseif (isset($current_user['rol_id']) && $current_user['rol_id'] == $rol_usuario) {
?>
    <li><?= $this->Html->link(__('Lista de Servicios'), ['controller' => 'Userservicios', 'action' => 'todos']); ?></li>
    <li><?= $this->Html->link(__('Nuevo Servicio'), ['controller' => 'Userservicios', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Nuevo PREMIUM'), ['controller' => 'Userservicios', 'action' => 'premium']); ?></li>
<?php
}
?>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $userservicio->servicio_id],
        ['confirm' => __('Estas seguro que deseas borrar {0}?', $userservicio->servicio_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Userservicios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($userservicio); ?>
<fieldset>
    <legend><?= __('Editar {0}', ['Userservicio']) ?></legend>
    <?php
    echo $this->Form->control('id');
    echo $this->Form->control('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Guardar")); ?>
<?= $this->Form->end() ?>
