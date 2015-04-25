<div class="evtYears view">
<h2><?php echo __('Evt Year'); ?></h2>
	<dl>
		<dt><?php echo __('#'); ?></dt>
		<dd>
			<?php echo h($evtYear['EvtYear']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Years Id'); ?></dt>
		<dd>
			<?php echo h($evtYear['EvtYear']['post_years_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Years Lable'); ?></dt>
		<dd>
			<?php echo h($evtYear['EvtYear']['post_years_lable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evt Year'), array('action' => 'edit', $evtYear['EvtYear']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evt Year'), array('action' => 'delete', $evtYear['EvtYear']['id']), array(), __('Are you sure you want to delete # %s?', $evtYear['EvtYear']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evt Years'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evt Year'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posts'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($evtYear['posts'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Years'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($evtYear['posts'] as $posts): ?>
		<tr>
			<td><?php echo $posts['id']; ?></td>
			<td><?php echo $posts['title']; ?></td>
			<td><?php echo $posts['body']; ?></td>
			<td><?php echo $posts['created']; ?></td>
			<td><?php echo $posts['modified']; ?></td>
			<td><?php echo $posts['user_id']; ?></td>
			<td><?php echo $posts['years']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $posts['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $posts['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $posts['id']), array(), __('Are you sure you want to delete # %s?', $posts['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Posts'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
