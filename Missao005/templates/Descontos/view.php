<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Desconto $desconto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Desconto'), ['action' => 'edit', $desconto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Desconto'), ['action' => 'delete', $desconto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $desconto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Descontos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Desconto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="descontos view content">
            <h3><?= h($desconto->desconto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Desconto') ?></th>
                    <td><?= h($desconto->desconto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($desconto->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Relatorios') ?></h4>
                <?php if (!empty($desconto->relatorios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Horario Venda') ?></th>
                            <th><?= __('Valor Venda') ?></th>
                            <th><?= __('Vendedor Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($desconto->relatorios as $relatorios) : ?>
                        <tr>
                            <td><?= h($relatorios->id) ?></td>
                            <td><?= h($relatorios->horario_venda) ?></td>
                            <td><?= h($relatorios->valor_venda) ?></td>
                            <td><?= h($relatorios->vendedor_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Relatorios', 'action' => 'view', $relatorios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Relatorios', 'action' => 'edit', $relatorios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Relatorios', 'action' => 'delete', $relatorios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relatorios->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
