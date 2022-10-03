<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Fruta> $frutas
 */
?>
<div class="frutas index content">
    <?= $this->Html->link(__('Vendedor'), ['controller'=>'vendedores','action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Frutas') ?></h3>

    
    <?= $this->Form->create(null, ['type' => 'get'])?>
    <?= $this->Form->control('pesquisar', ['label' => 'Pesquisar', 'value'=> $this->request->getQuery('pesquisar')])?>
    <?= $this->Form->submit('submit') ?></th>
    <?= $this->Form->end()?>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_fruta') ?></th>
                    <th><?= $this->Paginator->sort('quantidade_disponivel') ?></th>
                    <th><?= $this->Paginator->sort('fresca') ?></th>
                    <th><?= $this->Paginator->sort('valor_fruta') ?></th>
                    <th><?= $this->Paginator->sort('administrador_id') ?></th>
                    <th><?= $this->Paginator->sort('classificacao_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($frutas as $fruta): ?>
                <tr>
                    <td><?= $this->Number->format($fruta->id) ?></td>
                    <td><?= h($fruta->nome_fruta) ?></td>
                    <td><?= $this->Number->format($fruta->quantidade_disponivel) ?></td>
                    <td><?= $fruta->fresca ? __('Sim') : __('Não'); ?></td>
                    <td><?= $this->Number->format($fruta->valor_fruta) ?></td>
                    <td><?= $fruta->has('administradore') ? $this->Html->link($fruta->administradore->nome, ['controller' => 'Administradores', 'action' => 'view', $fruta->administradore->id]) : '' ?></td>
                    <td><?= $fruta->has('classificaco') ? $this->Html->link($fruta->classificaco->classificacao, ['controller' => 'Classificacoes', 'action' => 'view', $fruta->classificaco->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $fruta->id]) ?>
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
