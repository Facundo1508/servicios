<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio[]|\Cake\Collection\CollectionInterface $servicios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userservicios'), ['controller' => 'Userservicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userservicio'), ['controller' => 'Userservicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicios index large-9 medium-8 columns content">
    <h3><?= __('Servicios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicios as $servicio): ?>
            <tr>
                <td><?= h($servicio->id) ?></td>
                <td><?= h($servicio->nombre) ?></td>
                <td><?= $servicio->has('categoria') ? $this->Html->link($servicio->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $servicio->categoria->id]) : '' ?></td>
                <td><?= h($servicio->created) ?></td>
                <td><?= h($servicio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $servicio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?>
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
