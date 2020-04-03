<div class="container">
	<h2><?= $title; ?></h2>

	<?= validation_errors(); ?>

	<?= form_open_multipart('posts/create'); ?>
		<div class="form-group">
			<label>Blog Title</label>
			<input type="text" name="b_title"  class="form-control" placeholder="Blog Title">

			<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		</div>
		<div class="form-group">
			<label>Blog Body</label>
			<textarea id="editor" type="text" name="b_body" class="form-control" placeholder="Type Blog details here"></textarea>
		</div>
		<div class="form-group">
			<label>Select Category</label>
			<select name="category_id" class="form-control">
			<?php foreach ($categories as $category): ?>
				<option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Choose File</label>
			<input type="file" name="userfile" class="form-control" size="20">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

