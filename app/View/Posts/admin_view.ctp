<div class="posts view">
<h2><?php echo __('Exhibition'); ?></h2>

	<h3>Title: <?php echo h($post['Post']['title']); ?></h3>
	<dl>
		<dt><?php echo __('Exhibition Year'); ?></dt>
		<dd>
			<?php echo h($post['EvtYear']['post_years_lable']); ?>
			&nbsp;
		</dd>
		<dt>By </dt>
		<dd><a><?php echo h($post['User']['username']); ?></a>
		</dd>
		<dt>Post at </dt>
		<dd><?php echo h($post['Post']['created']); ?></dd>
		<dt>Modified at </dt>
		<dd><?php echo h($post['Post']['modified']); ?></dd>
	</dl>
	<hr/>
	<h3>Contents:</h3>
	<div class="content">
		<?php echo html_entity_decode($post['Post']['body']); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
