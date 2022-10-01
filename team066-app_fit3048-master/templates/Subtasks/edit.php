<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subtask $subtask
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="subtasks form content">
            <?= $this->Form->create($subtask) ?>
            <fieldset>
                <legend><?= __('Edit Subtask') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('budget',['min'=> '0']);
                    echo $this->Form->control('actual',['min'=> '0']);
                    echo $this->Form->control('completed');
                    echo $this->Form->control('percentage',['min'=> '0']);
                    echo $this->Form->control('due_date', ['empty' => true]);
                echo $this->Form->control('job_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <button onclick="goBack()">Cancel</button>

        </div>
    </div>
</div>
<aside class="column">
    <div class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $subtask->id],
            ['confirm' => __('Are you sure you want to delete this subtask?', $subtask->id), 'class' => 'side-nav-item']
        ) ?>
    </div>
</aside>
<script>
    function goBack() {
        window.history.back();
    }
</script>
