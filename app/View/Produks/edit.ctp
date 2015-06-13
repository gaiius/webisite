<div class="produks form">
<?php echo $this->Form->create('Produk'); ?>
	<fieldset>
		<legend><?php echo __('Edit Produk'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nama');
		echo $this->Form->input('spesifikas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Produk.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Produk.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Produks'), array('action' => 'index')); ?></li>
	</ul>
</div>
