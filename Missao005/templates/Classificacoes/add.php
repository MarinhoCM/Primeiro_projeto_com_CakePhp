<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classificaco $classificaco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Classificacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classificacoes form content">
            <?= $this->Form->create($classificaco) ?>
            <fieldset>
                <legend><?= __('Add Classificaco') ?></legend>
                <?php
                    echo $this->Form->control('classificacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
