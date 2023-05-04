<?
  $page_data = get_page_by_path('cro/');
  $page_id = $page_data->ID;
  $video_list = get_field('video_list', $page_id);
?>

<section id="videos" class="fluid-padding">
    <div class="videos-inner">
      <div class="row">
        <?
          foreach ($video_list as $index => $video) {
            $video_title = $video['video_title'];
            $video_url = $video['video_url'];
            $video_image = $video['video_image'];
            $html = '
              <div class="col col-lg-6 col-12 video-item fadeInBottom-'.($index % 4 + 1).'">
                <div class="title text-center d-none d-lg-block title-font">
                  <h3>'.$video_title.'</h3>
                </div>
                <div class="video no-overlay-background">
                  <div class="image" style="background-image:url(\''.$video_image.'\')">
                  </div>
                  <div class="video-hover-layout" data-channel="custom">
                    <div class="video-hover-inner">
                      <span class="img-wrapper hover-point btn-video-play" src="'.$video_url.'">
                        <img src="'.get_template_directory_uri().'/assets/img/video-play.png" alt="video-play">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="title text-center d-block d-lg-none">
                  <h3>'.$video_title.'</h3>
                </div>
              </div>
            ';
            echo $html;
          }
        ?>
      </div>
    </div>
  </div>
</section>