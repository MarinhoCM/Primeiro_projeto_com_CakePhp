<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relatorio $relatorio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Relatorio'), ['action' => 'edit', $relatorio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Relatorio'), ['action' => 'delete', $relatorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relatorio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Relatorios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Relatorio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="relatorios view content">
            <h3><?= h($relatorio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Vendedore') ?></th>
                    <td><?= $relatorio->has('vendedore') ? $this->Html->link($relatorio->vendedore->nome, ['controller' => 'Vendedores', 'action' => 'view', $relatorio->vendedore->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($relatorio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Venda') ?></th>
                    <td><?= $this->Number->format($relatorio->valor_venda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario Venda') ?></th>
                    <td><?= h($relatorio->horario_venda) ?></td>
                </tr>
            </table>
            
        </div>
    </div>
</div>
