<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_option('organic_farm_slider_arrows') == '1'){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <?php
          for ( $agriculture_farming_i = 1; $agriculture_farming_i <= 4; $agriculture_farming_i++ ) {
            $agriculture_farming_mod =  get_theme_mod( 'organic_farm_post_setting' . $agriculture_farming_i );
            if ( 'page-none-selected' != $agriculture_farming_mod ) {
              $organic_farm_slide_post[] = $agriculture_farming_mod;
            }
          }
           if( !empty($organic_farm_slide_post) ) :
          $agriculture_farming_args = array(
            'post_type' =>array('post','page'),
            'post__in' => $organic_farm_slide_post,
            'ignore_sticky_posts'  => true, // Exclude sticky posts by default
          );

          // Check if specific posts are selected
          if (empty($organic_farm_slide_post) && is_sticky()) {
              $agriculture_farming_args['post__in'] = get_option('sticky_posts');
          }
          
          $agriculture_farming_query = new WP_Query( $agriculture_farming_args );
          if ( $agriculture_farming_query->have_posts() ) :
            $agriculture_farming_i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $agriculture_farming_query->have_posts() ) : $agriculture_farming_query->the_post(); ?>
          <div <?php if($agriculture_farming_i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php if(has_post_thumbnail()){ ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <?php }else { ?><div class="bg-color"></div> <?php } ?>
            <div class="carousel-caption slider-inner">
              <h2><?php the_title();?></h2>
              <?php if( get_option('agriculture_farming_slider_excerpt_show_hide',false) != 'off'){ ?>
                <p class="slider-excerpt mb-0"><?php echo wp_trim_words(get_the_content(), get_theme_mod('organic_farm_slider_excerpt_count',25) );?></p>
              <?php } ?>
              <div class="home-btn my-4">
                <a class="py-3 px-4" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('organic_farm_slider_read_more',__('Read More','agriculture-farming'))); ?></a>
              </div>
            </div>
          </div>
          <?php $agriculture_farming_i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon p-3" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon p-3" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
<?php if( get_option('agriculture_farming_cate_show_hide') == '1'){ ?>
  <section id="home-mission" class="py-5">
    <div class="container pt-5">
      <?php if( get_theme_mod('agriculture_farming_grocery_cate_title') != '' ){ ?>
        <h3 class="text-center mb-4"><?php echo esc_html(get_theme_mod('agriculture_farming_grocery_cate_title','')); ?></h3>
      <?php }?>

      <?php $agriculture_farming_catData1 =  get_theme_mod('agriculture_farming_category_setting');
        if($agriculture_farming_catData1){
          $agriculture_farming_args = array(
        'post_type' => 'post',
        'category_name' => esc_html($agriculture_farming_catData1 ,'agriculture-farming'),
        'post_per_page' => get_theme_mod('agriculture_farming_category_number')
          );
          $agriculture_farming_i=1; 
          ?>
        <div class="row">
          <?php $agriculture_farming_query = new WP_Query( $agriculture_farming_args );
          if ( $agriculture_farming_query->have_posts() ) :
          while( $agriculture_farming_query->have_posts() ) : $agriculture_farming_query->the_post(); ?>
            <div class="col-lg-3 col-md-6">
              <div class="cat-box mb-3 text-center">
                <div class="cat-img">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="cat-content">
                  <h4><?php the_title(); ?></h4>
                  <p class="mb-0"><?php echo wp_trim_words( get_the_content(),15 );?></p>
                  <div class="home-btn my-4">
                    <a class="py-3 px-4" href="<?php the_permalink(); ?>"><?php echo esc_html('Read More','agriculture-farming'); ?></a>
                  </div>
                </div>
              </div>
            </div>
            <?php $agriculture_farming_i++; endwhile;
            wp_reset_postdata(); ?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif; ?>
        </div>
      <?php }?>
    </div>
  </section>
<?php }?>
<section id="custom-page-content" <?php if ( have_posts() && trim( get_the_content() ) !== '' ) echo 'class="pt-3"'; ?>>
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
