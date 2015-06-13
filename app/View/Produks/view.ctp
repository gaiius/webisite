<div class="produks view">
<h2><?php echo __('Produk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produk['Produk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($produk['Produk']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spesifikas'); ?></dt>
		<dd>
			<?php echo h($produk['Produk']['spesifikas']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produk'), array('action' => 'edit', $produk['Produk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produk'), array('action' => 'delete', $produk['Produk']['id']), array(), __('Are you sure you want to delete # %s?', $produk['Produk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produk'), array('action' => 'add')); ?> </li>
	</ul>
</div>
