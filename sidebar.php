<div id="archive-filters">

<?php 
$field = get_field_object('product_type');
$values = explode(',', $GET_['product_type']);
?>
<ul>
	<?php foreach( $field('choices') as $choice_value => $choice_label) : ?> 
		<li>
			<input type="checkbox" value="<?php echo $choice_value; ?>"
			<?php if(in_array($choice_value, $values) ) : ?> checked="checked" <?php endif; ?> /> 
			<?php echo $choice_label; ?>
		</li>
	<?php endforeach; ?>
</ul>

		
<?php endforeach; ?>
</div>