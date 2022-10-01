<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var \App\Model\Entity\Stage $stages

 */


?>
<style>
.newProjectView{
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
    height: 70vh;
    overflow: scroll;
}
.related2{
    margin-left: 50px;

}
.column2{
    margin-top: 50px;
}
.td{
    width: 200px;


}

</style>
<h3><?= h($project->name)   ?></h3>
<hr>

<div class="row">


    <div class="column-responsive column-80">
        <div class="newProjectView">
            <h4><?= __('Project Overview') ?></h4>


            <table>


                <tr>
                    <th><?= __('Client Name') ?></th>
                    <td class="td" style="text-align: right"><?= h($project->client_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Budget') ?></th>
                    <td class="td" style="text-align: right">$<?= $this->Number->format($project->budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Actual') ?></th>
                    <td class="td" style="text-align: right">$<?= $this->Number->format($project->actual) ?></td>
                </tr>
                <tr>
                    <th><?= __('Percentage') ?></th>
                    <td class="td" style="text-align: right"><?= $this->Number->format($project->percentage) ?>%</td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td class="td" style="text-align: right"><?= h($project->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td class="td" style="text-align: right"><?= h($project->end_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="column">
        <div class="related2">
            <h4><?= __('Project Members') ?></h4>
            <?php if (!empty($project->project_users)) : ?>
                <div class="table-responsive">
                    <table>

                        <?php foreach ($project->project_users as $projectUsers) : ?>
                            <tr>
                                <td><?= h($projectUsers->user->name) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>

        <div class="related">
            <h4><?= __('Stages') ?></h4>
            <a style="color:red" href=<?=$this->Url->build(['controller'=> 'Stages','action' => 'add']) ?>>
                <h5> <i class="fa fa-edit"></i> Add New </h5>

            </a>




            <?php foreach ($project->stages as $stage) : ?>
                <!------ Include the above in your HEAD tag ---------->

                <div class="container-fluid" onclick="location.href='<?=$this->Url->build(['controller'=> 'Stages','action' => 'view',$stage->id]) ?>';" style="cursor: pointer;">
                    <div id="sortableKanbanBoards" class="row">
                        <div class="panel panel-primary kanban-col">

                            <div class="panel-body">
                                <div id="TODO" class="kanban-centered">

                                    <article class="kanban-entry grab" id="item1" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">
                                                <h2> <a href=<?=$this->Url->build(['controller'=> 'Stages','action' => 'view',$stage->id]) ?>><?= h($stage->name) ?></a></h2>
                                                <p><?= h($stage->description) ?></p>
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
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id], ['class' => 'side-nav-item']) ?>
       &nbsp;&nbsp;&nbsp;
        <?= $this->Form->postLink(__('Delete '), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete this project?', $project->id), 'class' => 'side-nav-item']) ?>

    </div>
</div>

<?= $this->Html->css("/css/kanban.css") ?>
