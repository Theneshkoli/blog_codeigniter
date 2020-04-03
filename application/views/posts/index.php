<div class="container mt-5">
	<h2><?= $title;?></h2>

	<?php foreach ($posts as $post) { ?>

		<div class="card mb-5">
			<div class="card-header">
				<h3><?= $post['title'];?></h3>
				<span class="float-left"><?= $post['name']; ?></span>
				<small class="float-right">Posted on : <?= $post['created_at'];?></small>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_images']; ?>"  style="width: 100%;">
					</div>
					<div class="col-md-9"><p><?= word_limiter($post['body'],50); ?></p></div>
				</div>
			</div>
			<div class="card-footer">
				<a class="btn btn-secondary" href="<?= site_url('/posts/' .$post['slug']);?>">Read More</a>
			</div>
		</div>
	<?php } ?>
</div>