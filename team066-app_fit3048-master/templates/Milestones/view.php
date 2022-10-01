<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Milestone $milestone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Milestone'), ['action' => 'edit', $milestone->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Milestone'), ['action' => 'delete', $milestone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milestone->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Milestones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Milestone'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="milestones view content">
            <h3><?= h($milestone->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($milestone->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($milestone->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($milestone->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stage Id') ?></th>
                    <td><?= $this->Number->format($milestone->stage_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
