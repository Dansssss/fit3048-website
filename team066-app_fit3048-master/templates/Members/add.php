<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $subtasks
 */
?>


<div class="row">

    <div class="column-responsive column-80">
        <div class="members form content" style="text-align: right">
        <?= $this->Form->create($member) ?>
        <fieldset>
        <legend><?= __('Add Member') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('subtask_id', ['options' => $subtasks]);
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
