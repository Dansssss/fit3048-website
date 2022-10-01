<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcontractor $subcontractor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subcontractor'), ['action' => 'edit', $subcontractor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subcontractor'), ['action' => 'delete', $subcontractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcontractor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subcontractors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subcontractor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subcontractors view content">
            <h3><?= h($subcontractor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subcontractor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subcontractor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= $this->Number->format($subcontractor->mobile) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
