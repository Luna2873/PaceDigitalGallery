<h1 class="thin-title article-nav">Exhibitions in <?php echo h($evtYear['EvtYear']['post_years_lable']); ?></h1>
<p class="sthin-title grumbs bgcolor">
	 <a href="/">Home</a> > 
	<?php 
		echo $this->Html->link('Years', array('action'=>'index')); ?> > 
	<span class="active"><?php echo h($evtYear['EvtYear']['post_years_lable']); ?></span></p>
<article>
	<?php if (!empty($evtYear['Post'])): ?>
		<table cellpadding = "0" cellspacing = "0" align="center">
		<tr>
			<th class="th-id" width="10%"><?php echo __('#'); ?></th>
			<th><?php echo __('Name of Exhibitions'); ?></th>
		</tr>
		<?php foreach ($evtYear['Post'] as $post): ?>
		<tr>
				<td><?php echo $i++;?></td>
				<td class="thin-title"><?php echo $this->Html->link(__($post['title']), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?></td>
			</tr>
				<?php endforeach; ?>
		</table>
	<?php endif; ?>
</article>