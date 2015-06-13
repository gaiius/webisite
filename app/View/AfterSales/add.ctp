<div class="afterSales form">
<?php echo $this->Form->create('AfterSale'); ?>
	<fieldset>
		<legend><?php echo __('Add After Sale'); ?></legend>
	<?php
		echo $this->Form->input('descripsi');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List After Sales'), array('action' => 'index')); ?></li>
	</ul>
</div>
