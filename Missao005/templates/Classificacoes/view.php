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
            <?= $this->Html->link(__('Edit Classificaco'), ['action' => 'edit', $classificaco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Classificaco'), ['action' => 'delete', $classificaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classificaco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Classificacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Classificaco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classificacoes view content">
            <h3><?= h($classificaco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Classificacao') ?></th>
                    <td><?= h($classificaco->classificacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($classificaco->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
