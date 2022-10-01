<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="projects form content" style="text-align: right">
            <?= $this->Form->create($project) ?>
            <fieldset>
                <h3><?= __('Add Project') ?></h3>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('client_name');
                    echo $this->Form->control('start_date');
                    echo $this->Form->control('end_date', ['empty' => true]);
                    echo $this->Form->control('budget',['min'=> '0']);

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

