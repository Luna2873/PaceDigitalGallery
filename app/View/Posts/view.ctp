<p class="sthin-title grumbs bgcolor"><a href="/">Home</a> > 
	<?php echo $this->Html->link('Years', array('controller'=>'EvtYears','action'=>'index')); ?>  > 
	<?php echo $this->Html->link(__(h($post['EvtYear']['post_years_lable'])), 
							array('controller'=>'EvtYears','action'=>'view',$post['EvtYear']['id']));?> > 
	<span><?php echo h($post['Post']['title']); ?></span>
</p>
<article>
	<h2 class="thin-title"><?php echo h($post['Post']['title']); ?></h2>
	<p class="sthin-title">By <a class="active"><?php echo h($post['User']['username']); ?></a>, Edit at <?php echo h($post['Post']['created']); ?>
	</p>
	<hr/>
	<?php echo html_entity_decode($post['Post']['body']); ?>
</article>