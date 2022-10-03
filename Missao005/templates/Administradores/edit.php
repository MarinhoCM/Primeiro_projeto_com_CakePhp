<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administradore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Administradores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="administradores form content">
            <?= $this->Form->create($administradore) ?>
            <fieldset>
                <legend><?= __('Edit Administradore') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
