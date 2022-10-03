<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vendedore> $vendedores
 */
?>
<div class="vendedores index content">
    <?= $this->Html->link(__('Relatorios'), ['controller'=>'Relatorios','action' => 'index'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('frutas'), ['controller'=>'frutas','action' => 'index'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Vender'), ['controller'=>'vendas','action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Novo Vendedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendedores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('frutas_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendedores as $vendedore): ?>
                <tr>
                    <td><?= $this->Number->format($vendedore->id) ?></td>
                    <td><?= h($vendedore->nome) ?></td>
                    <td><?= $vendedore->has('fruta') ? $this->Html->link($vendedore->fruta->nome_fruta, ['controller' => 'Frutas', 'action' => 'view', $vendedore->fruta->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vendedore->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
