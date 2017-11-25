<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provincia $provincia
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $provincia->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $provincia->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Provincias'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $provincia->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $provincia->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Provincias'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Direccions'), ['controller' => 'Direccions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($provincia); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Provincia']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
