<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jobmember $jobmember
 * @var \Cake\Collection\CollectionInterface|string[] $jobs
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>


<div class="row">

    <div class="column-responsive column-80">
        <div class="jobmembers form content" style="text-align: right">
        <?= $this->Form->create($jobmember) ?>
            <fieldset>
            <legend><?= __('Add Jobmember') ?></legend>
            <?php
                    echo $this->Form->control('job_id', ['options' => $jobs]);
                    echo $this->Form->control('user_id', ['options' => $users]);
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
