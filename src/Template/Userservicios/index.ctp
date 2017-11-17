<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userservicio[]|\Cake\Collection\CollectionInterface $userservicios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Userservicio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userservicios index large-9 medium-8 columns content">
    <h3><?= __('Userservicios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('servicio_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userservicios as $userservicio): ?>
            <tr>
                <td><?= $userservicio->has('user') ? $this->Html->link($userservicio->user->id, ['controller' => 'Users', 'action' => 'view', $userservicio->user->id]) : '' ?></td>
                <td><?= $userservicio->has('servicio') ? $this->Html->link($userservicio->servicio->id, ['controller' => 'Servicios', 'action' => 'view', $userservicio->servicio->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userservicio->servicio_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userservicio->servicio_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userservicio->servicio_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userservicio->servicio_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
