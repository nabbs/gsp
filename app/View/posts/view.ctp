<h2><?php __('Post Details');?></h2>
<?php debug($post); ?>

<?php echo $form->create('Comment',array('url'=>array('controller'=>'posts','action'=>'view',$post['Post']['id'])));?>
	<fieldset>
		<legend><?php __('Add Comment');?></legend>
	<?php
		echo $form->input('Comment.name');
		echo $form->input('Comment.body');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>