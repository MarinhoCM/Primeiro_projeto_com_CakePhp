<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Administradore> $administradores
 */
?>
<div class="administradores index content">
<?= $this->Html->link(__(' Add Frutas'), ['controller'=>'frutas','action' => 'add'], ['class' => 'button float-right']) ?>

    <?= $this->Html->link(__('Add administrador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Administradores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('senha') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($administradores as $administradore): ?>
                <tr>
                    <td><?= $this->Number->format($administradore->id) ?></td>
                    <td><?= h($administradore->nome) ?></td>
                    <td><?= h($administradore->password) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('visualizar'), ['action' => 'view', $administradore->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $administradore->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]) ?>
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

