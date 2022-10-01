<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stage $stage
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="stages form content" style="text-align: right">
            <?= $this->Form->create($stage) ?>
            <fieldset>
                <legend><?= __('Add Stage') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('description');
                echo $this->Form->control('budget',['min'=> '0']);
                echo $this->Form->control('actual',['min'=> '0']);
                echo $this->Form->control('completed');
                echo $this->Form->hidden('percentage',['min'=> '0']);
                    echo $this->Form->control('project_id',['options' => $projects]);


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
