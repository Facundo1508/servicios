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
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($userservicio); ?>
<fieldset>
    <?php
    echo $this->Form->control('servicio_id', ['options' => $servicios]);
    
    if($current_user['rol_id'] == $rol_admin)
    echo $this->Form->control('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Añadir servicio")); ?>
<?= $this->Form->end() ?>
