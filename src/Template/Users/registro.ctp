<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

?>
<?php
$this->extend('../Layout/TwitterBootstrap/signin');
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Registro de usuarios') ?></legend>
        <?php
            echo $this->Form->control('nombre', ['label' => 'Nombre']);
            echo $this->Form->control('apellido', ['label' => 'Apellido']);
            echo $this->Form->control('telefono', ['label' => 'Telefono']);
            echo $this->Form->control('email', ['label' => 'e-Mail']);
            echo $this->Form->control('username', ['label' => 'Nombre de usuario']);
            echo $this->Form->control('password', ['label' => 'Contraseña']);
            echo $this->Form->control('genero_id', ['options' => $generos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrarse')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="userform">
    <?= $this->Html->link(
    	__(' Volver a la página principal '), 
    	['controller' => 'Pages', 'action' => 'display', 'home'], 
    	['class' => 'btn btn-primary']
    	) ?>
    <?= $this->Form->end() ?>
</div>
