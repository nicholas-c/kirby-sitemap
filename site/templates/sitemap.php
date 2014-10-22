<? header('Content-type: text/xml; charset="utf-8"');
	echo '<?xml version="1.0" encoding="utf-8"?>'; ?>


<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<? foreach($pages->visible()->index() as $p): ?>
			<url>
				<loc><? echo html($p->url()) ?></loc>
				<lastmod><? echo $p->modified('c') ?></lastmod>
				<priority><? echo ($p->isHomePage()) ? 1 : number_format(0.5/$p->depth(), 1) ?></priority>
				<changefreq>weekly</changefreq>
			</url>
	<? endforeach ?>
</urlset>