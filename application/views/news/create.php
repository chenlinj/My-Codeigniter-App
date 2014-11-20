<h2>Create News Item</h2>
<?php echo validation_errors();?>
<?php echo form_open('index.php/news/create'); ?>
	<label for="title">Title</label>
	<input type="text" name="title"/> <br />
	
	<label for="text">Text</label>
	<textarea name="text" rows="3" cols="12" placeholder="Write text..."></textarea>
	
	<input type="submit" name="submit" value="Create news item">
<?php echo form_close();?>
