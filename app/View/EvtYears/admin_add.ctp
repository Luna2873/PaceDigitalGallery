<div class="evtYears form">
<?php echo $this->Form->create('EvtYear'); ?>
	<fieldset>
		<legend><?php echo __('Add Event Year'); ?></legend>
	<?php
		echo $this->Form->input('post_years_id', array('option' => array(2003,2004,2005)));
		echo $this->Form->input('post_years_lable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Evt Years'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posts'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
