<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stage $stage
 * @var \App\Model\Entity\Project $project

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
        width: 50%;
    }
    .related{
        margin-left: 50px;
        height: 70vh;
        overflow: scroll;
    }
    .column2{
        margin-top: 50px;
    }
    .td{
        width: 200px;


    }
</style>
<a style="color:red" href=<?=$this->Url->build(['controller'=> 'Projects','action' => 'view', $stage->project_id]) ?>>
    <h5> <i class="fa fa-arrow-left"></i> Back </h5>
</a>


<div class="row">

    <div class="column-responsive column-80">
        <h3><?= h($stage->name) ?></h3>

        <div class="stages view content">

            <div class="newStageView">

                <table>
                    <tr>
                    </tr>
                    <tr>
                        <th><?= __('Description') ?></th>
                        <td><?= h($stage->description) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Percentage') ?></th>
                        <td><?= h($stage->percentage) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Budget') ?></th>
                        <td><?= $this->Number->format($stage->budget) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Actual') ?></th>
                        <td><?= $this->Number->format($stage->actual) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Completed') ?></th>
                        <td><?= $stage->completed ? __('Yes') : __('No'); ?></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <div class="column">
        <div class="related">
            <h4><?= __('Jobs') ?></h4>
            <a style="color:red" href=<?=$this->Url->build(['controller'=> 'Jobs','action' => 'add']) ?>>
                <h5> <i class="fa fa-edit"></i> Add New </h5>

            </a>

            <?php foreach ($stage->jobs as $job) : ?>


            <!------ Include the above in your HEAD tag ---------->

            <div class="container-fluid" onclick="location.href='<?=$this->Url->build(['controller'=> 'Jobs','action' => 'view',$job->id]) ?>';" style="cursor: pointer;">
                <div id="sortableKanbanBoards" class="row">
                    <div class="panel panel-primary kanban-col">

                        <div class="panel-body">
                            <div id="TODO" class="kanban-centered">

                                <article class="kanban-entry grab" id="item1" draggable="true">
                                    <div class="kanban-entry-inner">
                                        <div class="kanban-label">
                                            <h2> <a href=<?=$this->Url->build(['controller'=> 'Jobs','action' => 'view',$job->id]) ?>><?= h($job->name) ?></a></h2>
                                            <p><?= h($job->description) ?></p>
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
        
<?= $this->Html->css("/css/kanban.css") ?>
<div class="column2">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Edit Stage'), ['action' => 'edit', $stage->id], ['class' => 'side-nav-item']) ?>
                <?= $this->Form->postLink(__('Delete Stage'), ['action' => 'delete', $stage->id], ['confirm' => __('Are you sure you want to delete this stage?', $stage->id), 'class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('New Stage'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            </div>
</div>
