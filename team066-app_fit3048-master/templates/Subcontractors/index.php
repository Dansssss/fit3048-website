<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcontractor[]|\Cake\Collection\CollectionInterface $subcontractors
 */
?>
<div class="subcontractors index content">
    <?= $this->Html->link(__('New Subcontractor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subcontractors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subcontractors as $subcontractor): ?>
                <tr>
                    <td><?= $this->Number->format($subcontractor->id) ?></td>
                    <td><?= h($subcontractor->name) ?></td>
                    <td><?= $this->Number->format($subcontractor->mobile) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subcontractor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcontractor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcontractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcontractor->id)]) ?>
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
