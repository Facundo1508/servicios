<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Distrito $distrito
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $distrito->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $distrito->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Distritos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $distrito->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $distrito->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Distritos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($distrito); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Distrito']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
