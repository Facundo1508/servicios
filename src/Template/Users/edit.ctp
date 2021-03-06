<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Eliminar'),
        ['action' => 'delete', $user->id],
        ['confirm' => __('Estas seguro que deseas eliminar # {0}?', $user->username)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Lista de Roles'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nuevo Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Lista de Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Eliminar'),
        ['action' => 'delete', $user->id],
        ['confirm' => __('Estas seguro que deseas eliminar # {0}?', $user->username)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['User']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    echo $this->Form->control('apellido');
    echo $this->Form->control('telefono');
    echo $this->Form->control('email');
    echo $this->Form->control('username');
    echo $this->Form->control('password');
    echo $this->Form->control('activo');
    echo $this->Form->control('rol_id', ['options' => $rols]);
    echo $this->Form->control('genero_id', ['options' => $generos]);
    ?>
</fieldset>
<?= $this->Form->button(__("Guardar")); ?>
<?= $this->Form->end() ?>
