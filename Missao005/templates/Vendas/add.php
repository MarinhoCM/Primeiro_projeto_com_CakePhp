<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 * @var \Cake\Collection\CollectionInterface|string[] $relatorios
 * @var \Cake\Collection\CollectionInterface|string[] $frutas
 * @var \Cake\Collection\CollectionInterface|string[] $descontos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendas form content">
            <?= $this->Form->create($venda) ?>
            <fieldset>
                <legend><?= __('Vender') ?></legend>
                <?php
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('relatorio_id', ['options' => $relatorios]);
                    echo $this->Form->control('frutas_id', ['options' => $frutas]);
                    echo $this->Form->control('desconto', ['options' => $descontos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
