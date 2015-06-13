<div class="galeries form">
<?php echo $this->Form->create('Galery'); ?>
	<fieldset>
		<legend><?php echo __('Edit Galery'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('gambar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Galery.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Galery.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Galeries'), array('action' => 'index')); ?></li>
	</ul>
</div>
