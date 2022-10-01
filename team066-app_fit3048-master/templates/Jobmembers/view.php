<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jobmember $jobmember
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
<a style="color:red" href=<?=$this->Url->build(['controller'=> 'Jobs','action' => 'view', $jobmember->job_id]) ?>>
    <h5> <i class="fa fa-arrow-left"></i> Back </h5>
</a>
<div class="row">
    <div class="column-responsive column-80">
        <div class="jobmembers view content">
        <div class="newStageView">
            <table>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= $jobmember->has('job') ? $this->Html->link($jobmember->job->name, ['controller' => 'Jobs', 'action' => 'view', $jobmember->job->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $jobmember->has('user') ? $this->Html->link($jobmember->user->name, ['controller' => 'Users', 'action' => 'view', $jobmember->user->id]) : '' ?></td>
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
            <?= $this->Html->link(__('Edit Jobmember'), ['action' => 'edit', $jobmember->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Jobmember'), ['action' => 'delete', $jobmember->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobmember->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jobmembers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Jobmember'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    
</div>
