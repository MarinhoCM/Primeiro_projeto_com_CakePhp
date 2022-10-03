<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fruta $fruta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fruta'), ['action' => 'edit', $fruta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fruta'), ['action' => 'delete', $fruta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fruta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Frutas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fruta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="frutas view content">
            <h3><?= h($fruta->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Fruta') ?></th>
                    <td><?= h($fruta->nome_fruta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Administradore') ?></th>
                    <td><?= $fruta->has('administradore') ? $this->Html->link($fruta->administradore->nome, ['controller' => 'Administradores', 'action' => 'view', $fruta->administradore->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Classificaco') ?></th>
                    <td><?= $fruta->has('classificaco') ? $this->Html->link($fruta->classificaco->classificacao, ['controller' => 'Classificacoes', 'action' => 'view', $fruta->classificaco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fruta->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade Disponivel') ?></th>
                    <td><?= $this->Number->format($fruta->quantidade_disponivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Fruta') ?></th>
                    <td><?= $this->Number->format($fruta->valor_fruta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fresca') ?></th>
                    <td><?= $fruta->fresca ? __('Sim') : __('Não'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
