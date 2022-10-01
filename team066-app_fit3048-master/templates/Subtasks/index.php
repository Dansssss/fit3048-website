<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subtask[]|\Cake\Collection\CollectionInterface $subtasks
 */
?>
<div class="subtasks index content">
    <?= $this->Html->link(__('New Subtask'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subtasks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('budget') ?></th>
                    <th><?= $this->Paginator->sort('actual') ?></th>
                    <th><?= $this->Paginator->sort('completed') ?></th>
                    <th><?= $this->Paginator->sort('percentage') ?></th>
                    <th><?= $this->Paginator->sort('due_date') ?></th>
                    <th><?= $this->Paginator->sort('job_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subtasks as $subtask): ?>
                <tr>
                    <td><?= $this->Number->format($subtask->id) ?></td>
                    <td><?= h($subtask->name) ?></td>
                    <td><?= h($subtask->description) ?></td>
                    <td><?= $this->Number->format($subtask->budget) ?></td>
                    <td><?= $this->Number->format($subtask->actual) ?></td>
                    <td><?= h($subtask->completed) ?></td>
                    <td><?= $this->Number->format($subtask->percentage) ?></td>
                    <td><?= h($subtask->due_date) ?></td>
                    <td><?= $this->Number->format($subtask->job_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subtask->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtask->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtask->id)]) ?>
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
