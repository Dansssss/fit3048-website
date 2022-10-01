<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stage[]|\Cake\Collection\CollectionInterface $stages
 */
?>
<div class="projects index content">

    <style>
        .button {
            background-color: #04AA6D;
            border: none;
            color: black;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 12px;
        }
    </style>
<div class="stages index content">
    <h3><?= __('Stages') ?></h3>

    </style>
    <?= $this->Html->link(__('Add Stage'), ['action' => 'add'], ['class' => 'button float-left']) ?>



    <div class="table-responsive">
        <table>

            <thead>
                <tr>

                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('budget') ?></th>
                    <th><?= $this->Paginator->sort('actual') ?></th>
                    <th><?= $this->Paginator->sort('completed') ?></th>
                    <th><?= $this->Paginator->sort('percentage') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stages as $stage): ?>
                <tr>

                    <td><?= h($stage->name) ?></td>
                    <td><?= h($stage->description) ?></td>
                    <td><?= $this->Number->format($stage->budget) ?></td>
                    <td><?= $this->Number->format($stage->actual) ?></td>
                    <td><?= h($stage->completed) ?></td>
                    <td><?= h($stage->percentage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stage->id)]) ?>
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
