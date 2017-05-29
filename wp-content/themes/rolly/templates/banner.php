    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-8">
                    <div class="banner-content">
                        <?php $query = new WP_Query('page_id=2'); ?>
                            <?php while($query->have_posts()) : $query->the_post(); ?>
                                <?php get_template_part('templates/content', 'page'); ?>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                        <a href="#about" class="btn btn-default wow bounceInUp" href="#" role="button"><strong>set an appointment</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>