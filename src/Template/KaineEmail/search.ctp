<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Email'), ['action' => 'index']) ?> </li>

    </ul>
</nav>
<div class="kaineEmail index large-9 medium-8 columns content">
    <h3><?= __('Kaine Email') ?></h3>
	<?php
		echo $this->Form->create(null, ['type' => 'get', 'url' => ['action' => 'index']]);
		// You'll need to populate $authors in the template from your controller
		echo $this->Form->input('date');
		// Match the search param in your table configuration
		echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('cc');
		echo $this->Form->input('subject');
		echo $this->Form->input('body');
		echo $this->Form->button('Filter', ['type' => 'submit']);
		echo $this->Html->link('Reset', ['action' => 'index']);
		echo $this->Form->end();
	?>
</div>