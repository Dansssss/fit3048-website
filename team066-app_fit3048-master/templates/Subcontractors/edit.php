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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subcontractor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subcontractor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Subcontractors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subcontractors form content">
            <?= $this->Form->create($subcontractor) ?>
            <fieldset>
                <legend><?= __('Edit Subcontractor') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('mobile');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
