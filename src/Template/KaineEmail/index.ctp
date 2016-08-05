<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        
		<li><?= $this->Html->link(__('Search Email'), ['action' => 'search']) ?> </li>
    </ul>
</nav>
<div class="kaineEmail index large-9 medium-8 columns content">
    <h3><?= __("Governor Kaine's Email") ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('date') ?></th>
				<th><?= $this->Paginator->sort('senderName', 'Sender') ?></th>
				<th><?= $this->Paginator->sort('recipientName', 'Recipient') ?></th>
				<th><?= $this->Paginator->sort('subject') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kaineEmail as $kaineEmail): ?>
            <tr>
                <td><?= h($kaineEmail->date) ?></td>
				<td><?= $kaineEmail->senderName ?></td>
				<td><?= $kaineEmail->recipientName ?></td>
				<td><?= $kaineEmail->subject ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kaineEmail->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
