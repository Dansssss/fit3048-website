<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="projects index content">

    <h3><?= __('Projects') ?></h3>

    <style>
        .button {
            background-color: #04AA6D;
            border: none;
            color: black;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: flex;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 12px;
        }
    </style>
    <?= $this->Html->link(__('Create Project'), ['action' => 'add'], ['class' => 'button float-left']) ?>

    <div class="table-responsive">
        <table>

            <tbody>
            <style>
                .main1{
                    width: 1000px;
                    height:auto;
                }
            </style>
            <div class="main1">
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

                    <div class="card-body">
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
                            <h id="result">Result</h>

                            <h5><p><progress max="100" value=<?= $this->Number->format($project->percentage) ?>></progress><?= $this->Number->format($project->percentage) ?>%</p></h5>
                        </div>
                    </div>

                    <?php endforeach; ?>
                <script>

                        if (<?= $this->Number->format($project->percentage) ?>===100){
                            document.getElementById('result').innerText = 'completed';
                        }
                        else{
                            document.getElementById('result').innerText = 'ongoing';
                        }

                </script>
            </div>

            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            &nbsp;&nbsp;&nbsp;
            <?= $this->Paginator->numbers() ?>
            &nbsp;&nbsp;&nbsp;
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
