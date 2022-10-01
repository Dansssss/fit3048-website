<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jobmember[]|\Cake\Collection\CollectionInterface $jobmembers
 */
?>
<div class="jobmembers index content">
    <?= $this->Html->link(__('New Jobmember'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jobmembers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('job_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobmembers as $jobmember): ?>
                <tr>
                    <td><?= $this->Number->format($jobmember->id) ?></td>
                    <td><?= $jobmember->has('job') ? $this->Html->link($jobmember->job->name, ['controller' => 'Jobs', 'action' => 'view', $jobmember->job->id]) : '' ?></td>
                    <td><?= $jobmember->has('user') ? $this->Html->link($jobmember->user->name, ['controller' => 'Users', 'action' => 'view', $jobmember->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jobmember->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobmember->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jobmember->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobmember->id)]) ?>
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
