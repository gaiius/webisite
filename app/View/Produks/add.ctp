<div class="produks form">
<?php echo $this->Form->create('Produk'); ?>
	<fieldset>
		<legend><?php echo __('Add Produk'); ?></legend>
	<?php
		echo $this->Form->input('nama');
		echo $this->Form->input('spesifikas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Produks'), array('action' => 'index')); ?></li>
	</ul>
</div>
