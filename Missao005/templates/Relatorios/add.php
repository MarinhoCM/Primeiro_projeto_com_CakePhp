<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relatorio $relatorio
 * @var \Cake\Collection\CollectionInterface|string[] $vendedores
 * @var \Cake\Collection\CollectionInterface|string[] $descontos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Relatorios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="relatorios form content">
            <?= $this->Form->create($relatorio) ?>
            <fieldset>
                <legend><?= __('Add Relatorio') ?></legend>
                <?php
                    echo $this->Form->control('horario_venda');
                    echo $this->Form->control('valor_venda');
                    echo $this->Form->control('vendedor_id', ['options' => $vendedores]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
