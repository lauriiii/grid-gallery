<?php
$kirby->set('tag', 'gallery', array(
	'attr' => array(
		'class',
		'columns',
		'mobilecolumns',
		'links'
	),
	'html' => function($tag) {
		$images = str::split($tag->attr('gallery'), ' ');

		// default to not use links for images
		$links = (null !== $tag->attr('links') && $tag->attr('links') == 'true' ? true : (null !== c::get('gridgallery.default.links') ? c::get('gridgallery.default.links') : false));

		// defaults to number of images unless it's more than 8 and then it defaults to 4
		$columns = (null !== $tag->attr('columns') ? ' columns-' . $tag->attr('columns') : (count($images) <= 8 ? ' columns-' . count($images) : ' columns-4'));

		$mobilecolumns = (null !== $tag->attr('mobilecolumns') ? ' mobile-columns-' . $tag->attr('mobilecolumns') : (null !== c::get('gridgallery.default.mobilecolumns') ? ' mobile-columns-' . c::get('gridgallery.default.mobilecolumns') : ''));

		$class = (null !== $tag->attr('class') ? ' '. $tag->attr('class') : (null !== c::get('gridgallery.default.class') ? ' '. c::get('gridgallery.default.class') : ''));

		$html = '<div class="gallery'. $mobilecolumns . $columns . $class .'">';
		
		foreach($images as $image) {
			$html .= '<div class="gallery-item">';
			if($links == true) { 
				$html .= '<a href="'.$tag->file($image)->url().'">'. $tag->file($image) .'</a>';
			} else {
				$html .= $tag->file($image);
			}
			$html .= '</div>';
		}

		$html .= '</div>';

		return $html;
	}
));