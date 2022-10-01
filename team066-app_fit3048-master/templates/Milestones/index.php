<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Milestone[]|\Cake\Collection\CollectionInterface $milestones
 */
?>
<div class="milestones index content">
    <?= $this->Html->link(__('New Milestone'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Milestones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('stage_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($milestones as $milestone): ?>
                <tr>
                    <td><?= $this->Number->format($milestone->id) ?></td>
                    <td><?= h($milestone->name) ?></td>
                    <td><?= h($milestone->description) ?></td>
                    <td><?= $this->Number->format($milestone->stage_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $milestone->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $milestone->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $milestone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milestone->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
