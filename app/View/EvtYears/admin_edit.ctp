<div class="evtYears form">
<?php echo $this->Form->create('EvtYear'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evt Year'); ?></legend>
	<?php
		echo $this->Form->input('years_id');
		echo $this->Form->input('years_lable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EvtYear.years_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EvtYear.years_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evt Years'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posts'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
