<div class="afterSales view">
<h2><?php echo __('After Sale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($afterSale['AfterSale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripsi'); ?></dt>
		<dd>
			<?php echo h($afterSale['AfterSale']['descripsi']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit After Sale'), array('action' => 'edit', $afterSale['AfterSale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete After Sale'), array('action' => 'delete', $afterSale['AfterSale']['id']), array(), __('Are you sure you want to delete # %s?', $afterSale['AfterSale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List After Sales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New After Sale'), array('action' => 'add')); ?> </li>
	</ul>
</div>
