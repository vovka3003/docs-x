<h1 class="title text-uppercase"><?php echo $page->title(); ?></h1>
<div id="toc">
	<ul id="toc-content"></ul>
</div>
<div id="page-content">
<?php echo $page->content(); ?>
</div>

<?php if (!$url->notFound()): ?>
<div class="text-right mt-5">
	<a class="btn btn-primary" href="<?php echo $GITHUB_BASE_URL.$page->key().'/'.$FILENAME ?>"><?php echo $language->get('Collaborate with us and edit this page'); ?></a>
</div>
<?php endif ?>
