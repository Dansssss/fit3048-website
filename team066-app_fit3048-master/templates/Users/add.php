<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>




<div class="row">

    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>

            <div class="field-wrap">
                <fieldset>
                    <legend><?= __('Sign Up') ?></legend>
                    <?php
                        echo $this->Form->control('email');
                        echo $this->Form->control('password');
                        echo $this->Form->control('name');
                        echo $this->Form->hidden('type', array('default'=>'user'));
                        echo $this->Form->hidden('role_id', ['options' => $roles]);
                    ?>
                </fieldset>
            </div>


            <button class="button button-block" type="submit"/>Sign Up</button>
            <?= $this->Form->end() ?>
            <?= $this->Html->link(__('Go back'), ['action' => 'login']) ?>
        </div>
    </div>
</div>
