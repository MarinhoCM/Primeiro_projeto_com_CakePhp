<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Classificaco> $classificacoes
 */
?>
<div class="classificacoes index content">
    <?= $this->Html->link(__('New Classificaco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Classificacoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('classificacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classificacoes as $classificaco): ?>
                <tr>
                    <td><?= $this->Number->format($classificaco->id) ?></td>
                    <td><?= h($classificaco->classificacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classificaco->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classificaco->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classificaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classificaco->id)]) ?>
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
