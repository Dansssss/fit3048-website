<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="jobs form content">
            <?= $this->Form->create($job) ?>
            <fieldset>
                <legend><?= __('Add Job') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('budget',['min'=> '0']);
                    echo $this->Form->control('actual',['min'=> '0']);
                    echo $this->Form->control('completed');
                    echo $this->Form->hidden('percentage',['min'=> '0']);
                    echo $this->Form->control('due_date', ['empty' => true]);

                echo $this->Form->control('stage_id',['options' => $stages]);

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
