<!-- Custom Theme Style -->
<?= $this->Html->css("/assets/css/theme.css") ?>

<div class="kanban-board container-fluid mt-lg-3">

    <div class="kanban-col">
        <div class="card-list">
            <div class="card-list-header">
                <h6>Backlog</h6>
                <div class="dropdown">
                    <button class="btn-options" type="button" id="cardlist-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item text-danger" href="#">Archive List</a>
                    </div>
                </div>
            </div>
            <div class="card-list-body">

                <div class="card card-kanban">

                    <div class="card-body">
                        <div class="dropdown card-options">
                            <button class="btn-options" type="button" id="kanban-dropdown-button-13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item text-danger" href="#">Archive Card</a>
                            </div>
                        </div>
                        <div class="card-title">
                            <a href="#" data-toggle="modal" data-target="#task-modal"><h6>A/B testing</h6></a>
                        </div>

                    </div>
                </div>

                <div class="card card-kanban">

                    <div class="card-body">
                        <div class="dropdown card-options">
                            <button class="btn-options" type="button" id="kanban-dropdown-button-14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item text-danger" href="#">Archive Card</a>
                            </div>
                        </div>
                        <div class="card-title">
                            <a href="#" data-toggle="modal" data-target="#task-modal"><h6>Email template</h6></a>
                        </div>

                        <ul class="avatars">

                            <li>
                                <a href="#" data-toggle="tooltip" title="David">
                                    <img alt="David Whittaker" class="avatar" src="assets/img/avatar-male-4.jpg" />
                                </a>
                            </li>

                            <li>
                                <a href="#" data-toggle="tooltip" title="Ravi">
                                    <img alt="Ravi Singh" class="avatar" src="assets/img/avatar-male-3.jpg" />
                                </a>
                            </li>

                        </ul>

                        <div class="card-meta d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="material-icons">playlist_add_check</i>
                                <span>-/-</span>
                            </div>

                            <span class="text-small">Unscheduled</span>

                        </div>

                    </div>
                </div>


            </div>
            <div class="card-list-footer">
                <button class="btn btn-link btn-sm text-small">Add task</button>
            </div>
        </div>
    </div>

    <div class="kanban-col">
        <div class="card-list">
            <div class="card-list-header">
                <h6>Waiting</h6>
                <div class="dropdown">
                    <button class="btn-options" type="button" id="cardlist-dropdown-button-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item text-danger" href="#">Archive List</a>
                    </div>
                </div>
            </div>
            <div class="card-list-body">

                <div class="card card-kanban">

                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="card-body">
                        <div class="dropdown card-options">
                            <button class="btn-options" type="button" id="kanban-dropdown-button-9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item text-danger" href="#">Archive Card</a>
                            </div>
                        </div>
                        <div class="card-title">
                            <a href="#" data-toggle="modal" data-target="#task-modal"><h6>HTML / CSS templates</h6></a>
                        </div>

                        <ul class="avatars">

                            <li>
                                <a href="#" data-toggle="tooltip" title="David">
                                    <img alt="David Whittaker" class="avatar" src="assets/img/avatar-male-4.jpg" />
                                </a>
                            </li>

                            <li>
                                <a href="#" data-toggle="tooltip" title="Harry">
                                    <img alt="Harry Xai" class="avatar" src="assets/img/avatar-male-2.jpg" />
                                </a>
                            </li>

                            <li>
                                <a href="#" data-toggle="tooltip" title="Claire">
                                    <img alt="Claire Connors" class="avatar" src="assets/img/avatar-female-1.jpg" />
                                </a>
                            </li>

                        </ul>

                        <div class="card-meta d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="material-icons">playlist_add_check</i>
                                <span>1/8</span>
                            </div>

                            <span class="text-small">Due 10 days</span>

                        </div>

                    </div>
                </div>



                <div class="card card-kanban">

                    <div class="card-body">
                        <div class="dropdown card-options">
                            <button class="btn-options" type="button" id="kanban-dropdown-button-11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item text-danger" href="#">Archive Card</a>
                            </div>
                        </div>
                        <div class="card-title">
                            <a href="#" data-toggle="modal" data-target="#task-modal"><h6>Illustrations</h6></a>
                        </div>

                        <div class="card-meta d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="material-icons">playlist_add_check</i>
                                <span>0/6</span>
                            </div>

                            <span class="text-small">Due 12 days</span>

                        </div>

                    </div>
                </div>



            </div>
            <div class="card-list-footer">
                <button class="btn btn-link btn-sm text-small">Add task</button>
            </div>
        </div>
    </div>

    <div class="kanban-col">
        <div class="card-list">
            <div class="card-list-header">
                <h6>Doing</h6>
                <div class="dropdown">
                    <button class="btn-options" type="button" id="cardlist-dropdown-button-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item text-danger" href="#">Archive List</a>
                    </div>
                </div>
            </div>
            <div class="card-list-body">

            </div>
            <div class="card-list-footer">
                <button class="btn btn-link btn-sm text-small">Add task</button>
            </div>
        </div>
    </div>

    <div class="kanban-col">
        <div class="card-list">
            <div class="card-list-header">
                <h6>In Review</h6>
                <div class="dropdown">
                    <button class="btn-options" type="button" id="cardlist-dropdown-button-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item text-danger" href="#">Archive List</a>
                    </div>
                </div>
            </div>
            <div class="card-list-body">

            </div>
            <div class="card-list-footer">
                <button class="btn btn-link btn-sm text-small">Add task</button>
            </div>
        </div>
    </div>

    <div class="kanban-col">
        <div class="card-list">
            <div class="card-list-header">
                <h6>Done</h6>
                <div class="dropdown">
                    <button class="btn-options" type="button" id="cardlist-dropdown-button-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item text-danger" href="#">Archive List</a>
                    </div>
                </div>
            </div>
            <div class="card-list-body">

            </div>
            <div class="card-list-footer">
                <button class="btn btn-link btn-sm text-small">Add task</button>
            </div>
        </div>
    </div>

    <div class="kanban-col">
        <div class="card-list">
            <button class="btn btn-link btn-sm text-small">Add list</button>
        </div>
    </div>
</div>
</div>



</div>
</div>

<!-- Required vendor scripts (Do not remove) -->

<?= $this->Html->script("/assets/js/jquery.min.js") ?>
<?= $this->Html->script("/assets/js/popper.min.js") ?>
<?= $this->Html->script("/assets/js/bootstrap.js") ?>

<!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

<!-- Autosize - resizes textarea inputs as user types -->
<?= $this->Html->script("/assets/js/autosize.min.js") ?>
<!-- Flatpickr (calendar/date/time picker UI) -->
<?= $this->Html->script("/assets/js/flatpickr.min.js") ?>
<!-- Prism - displays formatted code boxes -->

<?= $this->Html->script("/assets/js/prism.js") ?>
<!-- Shopify Draggable - drag, drop and sort items on page -->
<?= $this->Html->script("/assets/js/draggable.bundle.legacy.js") ?>
<?= $this->Html->script("/assets/js/swap-animation.js") ?>
<!-- Dropzone - drag and drop files onto the page for uploading -->
<?= $this->Html->script("/assets/js/dropzone.min.js") ?>
<!-- List.js - filter list elements -->
<?= $this->Html->script("/assets/js/list.min.js") ?>

<!-- Required theme scripts (Do not remove) -->
<?= $this->Html->script("/assets/js/theme.js") ?>
