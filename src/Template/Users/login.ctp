<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/signin');
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Ingrese nombre de usuario y contraseña') ?></legend>
        <?= $this->Form->control('username', ['label' => 'Nombre de usuario']) ?>
        <?= $this->Form->control('password', ['label' => 'Contraseña']) ?>
    </fieldset>
    <?= $this->Form->button(__('Ingresar')); ?>
   <?= $this->Html->link(
    	__('Registrarse'), 
    	['controller' => 'Users', 'action' => 'registro'], 
    	['class' => 'btn btn-default']
    	) ?>
    <?= $this->Form->end() ?>
    
    <?= $this->Html->link(
    	__(' Volver a la página principal '), 
    	['controller' => 'Pages', 'action' => 'display', 'home'], 
    	['class' => 'btn btn-primary']
    	) ?>
    <?= $this->Form->end() ?>
</div>

