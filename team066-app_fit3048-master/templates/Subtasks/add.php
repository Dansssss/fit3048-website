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
                <legend><?= __('Add Subtask') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('budget',['min'=> '0']);
                    echo $this->Form->control('actual',['min'=> '0']);
                    echo $this->Form->control('completed');
                    echo $this->Form->hidden('percentage',['min'=> '0']);
                    echo $this->Form->control('due_date', ['empty' => true]);
                echo $this->Form->control('job_id',['options' => $jobs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <button onclick="goBack()">Cancel</button>

        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
