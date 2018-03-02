<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Servicios User'), ['action' => 'edit', $serviciosUser->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Servicios User'), ['action' => 'delete', $serviciosUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviciosUser->id)]) ?> </li>
<li><?= $this->Html->link(__('List Servicios Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicios User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Servicios User'), ['action' => 'edit', $serviciosUser->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Servicios User'), ['action' => 'delete', $serviciosUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviciosUser->id)]) ?> </li>
<li><?= $this->Html->link(__('List Servicios Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicios User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($serviciosUser->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($serviciosUser->id) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $serviciosUser->has('user') ? $this->Html->link($serviciosUser->user->id, ['controller' => 'Users', 'action' => 'view', $serviciosUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Servicio') ?></td>
            <td><?= $serviciosUser->has('servicio') ? $this->Html->link($serviciosUser->servicio->id, ['controller' => 'Servicios', 'action' => 'view', $serviciosUser->servicio->id]) : '' ?></td>
        </tr>
    </table>
</div>

