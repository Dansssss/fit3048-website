<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subtask $subtask
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
        margin-left: 150px;
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

<a style="color:red" href=<?=$this->Url->build(['controller'=> 'Jobs','action' => 'view', $subtask->job_id]) ?>>
    <h5> <i class="fa fa-arrow-left"></i> Back </h5>
</a>

<div class="row">

    <div class="column-responsive column-80">
        <h3><?= h($subtask->name) ?></h3>

        <div class="subtasks view content">
            <div class="newStageView">
                <table>
                    <tr>
                        <th><?= __('Description') ?></th>
                        <td><?= h($subtask->description) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Budget') ?></th>
                        <td><?= $this->Number->format($subtask->budget) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Actual') ?></th>
                        <td><?= $this->Number->format($subtask->actual) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Percentage') ?></th>
                        <td><?= $this->Number->format($subtask->percentage) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Due Date') ?></th>
                        <td><?= h($subtask->due_date) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Completed') ?></th>
                        <td><?= $subtask->completed ? __('Yes') : __('No'); ?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <div class="column">
        <div class="related">
            <h4><?= __('Members') ?></h4>
                <a style="color:red" href=<?=$this->Url->build(['controller'=> 'Members','action' => 'add']) ?>>
                    <h5> <i class="fa fa-edit"></i> Add New </h5>

                </a>
                <?php foreach ($subtask->members as $member) : ?>

                    <div class="container-fluid" onclick="location.href='<?=$this->Url->build(['controller'=> 'Members','action' => 'view',$member->id]) ?>';" style="cursor: pointer;">
                        <div id="sortableKanbanBoards" class="row">
                            <div class="panel panel-primary kanban-col">

                                <div class="panel-body">
                                    <div id="TODO" class="kanban-centered">

                                        <article class="kanban-entry grab" id="item1" draggable="true">
                                            <div class="kanban-entry-inner">
                                                <div class="kanban-label">

                                                    <h2> <a href=<?=$this->Url->build(['controller'=> 'Members','action' => 'view',$member->id]) ?>><?= h($member->user->name)?></a></a></h2>
                                                </div>
                                            </div>
                                        </article>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>

    </div>
</div>

<?= $this->Html->css("/css/kanban.css") ?>
<div class="column2">
    <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subtask'), ['action' => 'edit', $subtask->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subtask'), ['action' => 'delete', $subtask->id], ['confirm' => __('Are you sure you want to delete this subtask?', $subtask->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subtask'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>

</div>
