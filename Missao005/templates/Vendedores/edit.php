<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedore $vendedore
 * @var string[]|\Cake\Collection\CollectionInterface $frutas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendedore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vendedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendedores form content">
            <?= $this->Form->create($vendedore) ?>
            <fieldset>
                <legend><?= __('Edit Vendedore') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('password');
                    echo $this->Form->control('frutas_id', ['options' => $frutas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
