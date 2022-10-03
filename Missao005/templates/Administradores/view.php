<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Administradore'), ['action' => 'edit', $administradore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Administradore'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Administradores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Administradore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="administradores view content">
            <h3><?= h($administradore->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($administradore->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($administradore->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($administradore->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
