<div class="col-md-4 col-12">
<?php dynamic_sidebar( 'sideber_widget01' ); ?>
    
        <!--記事タイトル-->
    <div class="bg-white">
        <h5 class="h5 px-3 pb-3">記事内容</h2>

        <?php $side_query = new WP_Query( 'tag=sidepickup' ); ?> 
        <?php if ( $side_query->have_posts() ) : ?>
        <?php while ( $side_query->have_posts() ) : $side_query->the_post(); ?>
        <div class="pb-5">
            <div class="pb-3">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
            <?php else : ?>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img1.png" alt="">
            <?php endif; ?>
            </div>
            <h5 class="h5 px-3 pb-3 text-center"><a class="text-secondary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div> 