<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stage $stage
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

<a style="color:red" href=<?=$this->Url->build(['controller'=> 'Stages','action' => 'view', $job->stage_id]) ?>>
    <h5> <i class="fa fa-arrow-left"></i> Back </h5>
</a>

<div class="row">
    <div class="column-responsive column-80">
        <h3><?= h($job->name) ?></h3>

        <div class="stages view content">

            <div class="newStageView">
                <table>
                                       <tr>
                        <th><?= __('Description') ?></th>
                        <td><?= h($job->description) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Percentage') ?></th>
                        <td><?= h($job->percentage) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Budget') ?></th>
                        <td><?= $this->Number->format($job->budget) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Actual') ?></th>
                        <td><?= $this->Number->format($job->actual) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Due Date') ?></th>
                        <td><?= h($job->due_date) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Completed') ?></th>
                        <td><?= $job->completed ? __('Yes') : __('No'); ?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <div class="column">
        <div class="related">
        <h4><?= __('Members') ?></h4>
            <a style="color:red" href=<?=$this->Url->build(['controller'=> 'Jobmembers','action' => 'add']) ?>>
                <h5> <i class="fa fa-edit"></i> Add New </h5>

            </a>
            <!-- <?php echo'<pre>';  var_dump($job_member); echo'</pre>';?> -->
            <?php foreach ($job->jobmembers as $jobmember) : ?>

                <div class="container-fluid" onclick="location.href='<?=$this->Url->build(['controller'=> 'Jobmembers','action' => 'view',$jobmember->id]) ?>';" style="cursor: pointer;">
                    <div id="sortableKanbanBoards" class="row">
                        <div class="panel panel-primary kanban-col">

                            <div class="panel-body">
                                <div id="TODO" class="kanban-centered">

                                    <article class="kanban-entry grab" id="item1" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">
                                
                                                <h2> <a href=<?=$this->Url->build(['controller'=> 'Jobmembers','action' => 'view',$jobmember->id]) ?>><?= h($jobmember->user->name)?></a></a></h2>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>

                        </div>

                        <!------ Include the above in your HEAD tag ---------->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="related">
            <h4><?= __('Subtasks') ?></h4>
            <a style="color:red" href=<?=$this->Url->build(['controller'=> 'Subtasks','action' => 'add']) ?>>
                <h5> <i class="fa fa-edit"></i> Add New </h5>

            </a>

            <?php foreach ($job->subtasks as $subtask) : ?>

            <div class="container-fluid" onclick="location.href='<?=$this->Url->build(['controller'=> 'Subtasks','action' => 'view',$subtask->id]) ?>';" style="cursor: pointer;">
                <div id="sortableKanbanBoards" class="row">
                    <div class="panel panel-primary kanban-col">

                        <div class="panel-body">
                            <div id="TODO" class="kanban-centered">

                                <article class="kanban-entry grab" id="item1" draggable="true">
                                    <div class="kanban-entry-inner">
                                        <div class="kanban-label">
                                            <h2> <a href=<?=$this->Url->build(['controller'=> 'Subtasks','action' => 'view',$subtask->id]) ?>><?= h($subtask->name) ?></a></a></h2>
                                            <p><?= h($subtask->description) ?></p>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>

                    </div>

                    <!------ Include the above in your HEAD tag ---------->

                    
                </div>
            </div>
            <?php endforeach; ?>

        </div>

    </div>
</div>

<div class="column2">
    <div class="side-nav">

        <?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id], ['class' => 'side-nav-item']) ?>
        <?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete this job?', $job->id), 'class' => 'side-nav-item']) ?>
        <?= $this->Html->link(__('New Job'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
    </div>
</div>
        
<?= $this->Html->css("/css/kanban.css") ?>



