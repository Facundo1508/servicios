<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userservicio $userservicio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Userservicio'), ['action' => 'edit', $userservicio->servicio_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Userservicio'), ['action' => 'delete', $userservicio->servicio_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userservicio->servicio_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Userservicios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userservicio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userservicios view large-9 medium-8 columns content">
    <h3><?= h($userservicio->servicio_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userservicio->has('user') ? $this->Html->link($userservicio->user->id, ['controller' => 'Users', 'action' => 'view', $userservicio->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Servicio') ?></th>
            <td><?= $userservicio->has('servicio') ? $this->Html->link($userservicio->servicio->id, ['controller' => 'Servicios', 'action' => 'view', $userservicio->servicio->id]) : '' ?></td>
        </tr>
    </table>
</div>
