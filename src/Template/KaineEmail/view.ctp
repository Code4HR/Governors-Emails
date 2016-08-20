<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Email'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('Search Email'), ['action' => 'search']) ?> </li>
    </ul>
</nav>
<div class="kaineEmail view large-9 medium-8 columns content">
    <h3><?= h($kaineEmail->subject) ?></h3>
	
	<div class="row">
		<a href="http://digitool1.lva.lib.va.us:8881/R/?func=search-advanced-go&file_format_code=WEX&LOCAL_BASE=1505&mode=1&find_code1=WTI&request1=<?= $kaineEmail->subject?>&find_operator=AND&find_code2=WDT&request2=<?php $date = new DateTime($kaineEmail->date); echo $date->format("Y-m-d") ?>&adjacent=Y">View from Library of Virginia</a>
	</div>
	<?php if($RecaptchaComplete != true): ?>
	<div class="row">
		<h4>Complete Recaptcha to view email addresses</h4>
		
		<?= $this->Form->create() ?>
		<?= $this->Recaptcha->display() ?>
		<?= $this->Form->button(__('Submit')) ?>
		<?= $this->Form->end() ?>
	
	</div>
	<?php endif; ?>
	<div class="row">
        <h4><?= __('Date') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->date)); ?>
    </div>
    <div class="row">
        <h4><?= __('File') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->file)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subject') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->subject)); ?>
    </div>
    <div class="row">
        <h4><?= __('Sender') ?></h4>
        <?php
			$email = str_replace("'", "", $kaineEmail->senderName);
			if ($RecaptchaComplete == true || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo $this->Text->autoParagraph(h($kaineEmail->senderName)); 
			}
			else {
				echo $this->Text->autoParagraph(h("Hidden")); 
			}
			
		?>
    </div>
    <div class="row">
        <h4><?= __('Recipient') ?></h4>
        <?php
			$email = str_replace("'", "", $kaineEmail->recipientName);
			if ($RecaptchaComplete == true || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo $this->Text->autoParagraph(h($kaineEmail->recipientName)); 
			}
			else {
				echo $this->Text->autoParagraph(h("Hidden")); 
			}
			
		?>
    </div>
    <div class="row">
        <h4><?= __('CC') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->ccName)); ?>
    </div>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($kaineEmail->body)); ?>
    </div>
</div>
