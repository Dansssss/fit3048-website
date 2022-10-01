<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>
<style>
    .newStageView{
        font-size: large;
        line-height: 300%;
    }

    .column-responsive column-80 {
        float: left;
        width: 50%;
    }
    .column {
        display: flex;
        margin-left: 50px;
        width: 50%;
    }

    .related{
        margin-left: 50px;
    }
    .column2{
        margin-top: 50px;
    }
    .td{
        width: 200px;


    }
</style>
<a style="color:red" href=<?=$this->Url->build(['controller'=> 'Subtasks','action' => 'view', $member->subtask_id]) ?>>
    <h5> <i class="fa fa-arrow-left"></i> Back </h5>
</a>
<div class="row">
    <div class="column-responsive column-80">
            <div class="members view content">
                <div class="newStageView">
                    <h3><?= h($member->name) ?></h3>
                    <table>
                        <tr>
                            <th><?= __('User') ?></th>
                            <td><?= $member->has('user') ? $this->Html->link($member->user->name, ['controller' => 'Users', 'action' => 'view', $member->user->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subtask') ?></th>
                            <td><?= $member->has('subtask') ? $this->Html->link($member->subtask->name, ['controller' => 'Subtasks', 'action' => 'view', $member->subtask->id]) : '' ?></td>
                        </tr>

                    </table>
                </div>

            </div>
    </div>
</div>

<div class="row">
    <aside class="column2">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to remove this member?', $member->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Members'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Member'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>

</div>
