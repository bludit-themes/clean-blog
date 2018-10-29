<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $backgroundImage ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="post-heading">
					<h1><?php echo $page->title() ?></h1>
					<h2 class="subheading"><?php echo $page->description() ?></h2>
					<p class="meta"><?php echo $language->get('Posted by').' '.$page->user('nickname').' - '.$page->date() ?></p>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Post Content -->
<article>
<div class="container">
<div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">
	<?php echo $page->content() ?>
	</div>
</div>
</div>
</article>

<hr>
