<!DOCTYPE html>
<html lang="en">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .bars{
        display: flex;
        margin-top: 10px;
    }
    .tabs{
        width: 250px;
        height:200px;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
    }
    .fonts{
        font-size: 25px;
        color: #6c757d;
        text-align: center;
        margin-top: 10px;
    }
    .homefonts{
        font-size: 30px;
        color: #6c757d;
        margin-top: 40px;
        margin-bottom: 40px;
    }
    .icons{
        color: #6c757d;
        font-size: 50px;
        margin-left: 100px;

    }
    .counter{
        font-size: 50px;
        margin-left: 100px;
        color: #6c757d;
    }

    .card-body{
        width: 250px;
        height:200px;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        margin: 20px;
        display: inline-block;
    }

</style>

<div class="homefonts">
    <h>Home</h>
</div>

<div class="bars">

    <div class="tabs">
        <h1 class="fonts">Projects</h1>
        <div class="icons"><i class="fa fa-folder"></i></div>
        <div class="counter">
            <?php echo count($projects->all()); ?>
        </div>


    </div>
    <div class="tabs">
        <h2 class="fonts">Total tasks</h2>
        <div class="icons"><i class="fa fa-bars"></i></div>
        <div class="counter">
            <?php echo count($stages->all()); ?>
        </div>

    </div>
    <div class="tabs">
        <h3 class="fonts">Total budgets</h3>
        <div class="icons"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
    </div>
    <div class="tabs">
        <h4 class="fonts">Total actuals</h4>
        <div class="icons"><i class="fa fa-line-chart" aria-hidden="true"></i></div>

    </div>

</div>



<div class="homefonts">
    <h>Projects   </h>
    <a style="color:red" href=<?=$this->Url->build(['controller'=> 'Projects','action' => 'add']) ?>>
        <h5> <i class="fa fa-edit"></i> Add New </h5>
</div>

<?php foreach ($projects as $project): ?>

    <style>
        .card-body{
            width: 250px;
            height:200px;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            margin: 20px;
            display: inline-block;
        }
        .elements{
            margin-left: 20px;
        }
    </style>

    <div class="card-body" onclick="location.href='<?=$this->Url->build(['controller'=> 'Projects','action' => 'view',$project->id]) ?>';" style="cursor: pointer;">
        
        <div class="elements">
            <h4 class="card-title">
                <a href=<?=$this->Url->build(['controller'=> 'Projects','action' => 'view',$project->id]) ?>><?= h($project->name) ?></a>
            </h4>
            <h>From:<?= h($project->start_date) ?></h>
            <h>To:<?= h($project->end_date) ?></h>
            <br/>
            <h><?= h($project->client_name) ?></h>
            <br/>
            <h>Progress</h>
    <!--            <h id="result">result</h>-->

            <h5><p><progress max="100" value=<?= $this->Number->format($project->percentage) ?>></progress><?= $this->Number->format($project->percentage) ?>%</p></h5>
        </div>

    </div>
    

<?php endforeach; ?>




