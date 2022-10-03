<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venda'), ['action' => 'edit', $venda->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendas view content">
            <h3><?= h($venda->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Relatorio') ?></th>
                    <td><?= $venda->has('relatorio') ? $this->Html->link($venda->relatorio->horario_venda, ['controller' => 'Relatorios', 'action' => 'view', $venda->relatorio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fruta') ?></th>
                    <td><?= $venda->has('fruta') ? $this->Html->link($venda->fruta->nome_fruta, ['controller' => 'Frutas', 'action' => 'view', $venda->fruta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Desconto') ?></th>
                    <td><?= $venda->has('desconto') ? $this->Html->link($venda->desconto->desconto, ['controller' => 'Descontos', 'action' => 'view', $venda->desconto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venda->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($venda->quantidade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
