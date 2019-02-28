<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Option[]|\Cake\Collection\CollectionInterface $options
 */
?>
<div class="options index large-9 medium-8 columns content">
    <h3><?= __('Options') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('option_category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('option_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('default_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($options as $option): ?>
            <tr>
                <td><?= $this->Number->format($option->id) ?></td>
                <td><?= h($option->option_category) ?></td>
                <td><?= h($option->option_name) ?></td>
                <td><?= h($option->default_value) ?></td>
                <td><?= h($option->created) ?></td>
                <td><?= h($option->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $option->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $option->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $option->id], ['confirm' => __('Are you sure you want to delete # {0}?', $option->id)]) ?>
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
