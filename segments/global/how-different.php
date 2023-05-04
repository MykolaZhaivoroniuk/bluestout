<?
  $how_different_title = get_field('how_different_title', 'option');
  $how_different_gallery = get_field('how_different_gallery', 'option');
?>

<section class="how-different fluid-padding">
	<div class="how-different-inner">
		<div class="title text-center">
			<h2 class="lg-title dark-color title-font"><?=$how_different_title?></h2>
		</div>
		<div class="gallery d-none d-md-block">
			<div class="row">
				<?
					foreach($how_different_gallery as $index => $gallery_item) {
						$title = $gallery_item['title'];
						$text = $gallery_item['text'];
						$icon = $gallery_item['icon'];
						$title_image = $gallery_item['title_image'];
						$html = '
						<div class="col-md-3 desc-item">
							<div class="desc-item-inner fadeInBottom-'.($index + 1).'"">
								<div class="head-wrapper">
									<div class="image">
										<img src="'.$icon.'" alt="'.get_image_alt_from_image_url($title_image).'"/>
									</div>
									<div class="title lg-content">
									'.($title !== '' ? ('<p>'.$title.'</p>') : ('<img src="'.$title_image.'" alt="'.get_image_alt_from_image_url($title_image).'">') ).'
									</div>
								</div>
								<div class="content smd-content">
									'.$text.'
								</div>
							</div>
						</div>
						';
						echo $html;
					}
				?>
			</div>
		</div>
		<div class="gallery text-center d-sm-block d-md-none">
			<div class="slideme">
			<?
				foreach($how_different_gallery as $gallery_item) {
					$title = $gallery_item['title'];
					$text = $gallery_item['text'];
					$icon = $gallery_item['icon'];
					$title_image = $gallery_item['title_image'];
					$html = '
					<div class="desc-item">
						<div class="desc-item-inner fadeInBottom">
							<div class="head-wrapper">
								<div class="image">
									<img src="'.$icon.'" alt="'.get_image_alt_from_image_url($icon).'"/>
								</div>
								<div class="title lg-content">
								'.($title !== '' ? ('<p>'.$title.'</p>') : ('<img src="'.$title_image.'" alt="'.get_image_alt_from_image_url($title_image).'">') ).'
								</div>
							</div>
							<div class="content smd-content">
								'.$text.'
							</div>
						</div>
					</div>
					';
					echo $html;
				}
			?>
			</div>
		</div>
	</div>
  </div>
</section>