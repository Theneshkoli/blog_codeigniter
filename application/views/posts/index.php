<div class="container mt-5">
	<h2><?= $title;?></h2>

	<?php foreach ($posts as $post) { ?>

		<div class="card mb-5">
			<div class="card-header">
				<h3><?= $post['title'];?></h3>
				<small class="float-right">Posted on : <?= $post['created_at'];?></small>
			</div>
			<div class="card-body">
				<p><?= $post['body']; ?></p>
			</div>
			<div class="card-footer">
				<a class="btn btn-secondary" href="<?= site_url('/posts/' .$post['slug']);?>">Read More</a>
			</div>
		</div>
	<?php } ?>
</div>