<?php 
	/*Template Name: Home*/	
?>
<?php get_template_part('templates/banner'); ?>


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="content-wrapper">
                        <?php $query = new WP_Query('page_id=30'); ?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>
                            <!-- <h2><?php echo get_the_title(); ?></h2> -->
                            <?php get_template_part('templates/content', 'page'); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        
                        <div class="about-image">
                            <div class="col-md-6">
                                <div class="img-right text-right">
                                    <?php echo the_cfc_field('about-me', 'me-img1', 2); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-left text-left">
                                    <?php echo the_cfc_field('about-me', 'me-img2', 2); ?>
                                </div>
                            </div>
                        </div>
                        <?php echo the_cfc_field('about-me', 'content', 2); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="gallery">
        <div class="container-fluid">
            <div class="row">
                <h2>gallery</h2>
                <p>This text are temporary... Dummy text follows...This text are temporary... Dummy text follows...This text are temporary... Dummy text follows...This text are temporary... Dummy text follows...This text are temporary... Dummy text follows...This text are temporary... Dummy text follows...This text are temporary... Dummy text follows</p>
                <div class="gallerywrapper">    
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g1.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g2.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g3.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g4.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g5.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g6.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g7.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-3 gallerywrap">   
                        <div class="hovereffect">
                            <img class="img-responsive" src="assets/images/g8.jpg" alt="">
                            <div class="overlay">
                                <h2>Dummy text here</h2>
                                <a class="info" href="#"><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div> 
                </div>  
                <div class="buttongallery">
                    <a href="gallery.html" class="btn btn-default wow bounceInUp" role="button"><strong>view more photos</strong>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="bloghomepage">
    <div class="container">
        <div class="row">
        <h2>blog</h2>
            <div class="col-md-4 col-sm-4">
                <div class="blogwrapper">
                    <img src="assets/images/g1.jpg" class="img-responsive">
                    <p>This text are temporary, dummy text follow...This text are temporary, dummy text follow...This text are temporary, dummy text follow</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="blogwrapper">
                    <img src="assets/images/g2.jpg" class="img-responsive">
                    <p>This text are temporary, dummy text follow...This text are temporary, dummy text follow...This text are temporary, dummy text follow</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="blogwrapper">
                    <img src="assets/images/g3.jpg" class="img-responsive">
                    <p>This text are temporary, dummy text follow...This text are temporary, dummy text follow...This text are temporary, dummy text follow</p>
                </div>  
            </div>
            <a href="blog.html" class="btn btn-default wow bounceInUp" role="button"><strong>read more</strong></a>
        </div>
    </div>
    </section>



    <section id="contact">
        <div class="container">
            <div class="row">
                <h2>get <span>in touch</span></h2>


                <div class="col-sm-12 col-md-4 col-md-push-8">
                    <p class="contact-p">
                    Warm greetings of faith and love to you! If there’s anything I can help you with, feel free to send me a message.
                    </p>
                    <div class="social-media">
                        <ul>
                            <li class="fb-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>               
                            <li class="twitter-icon">
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                         </ul>
                    </div>
                </div>


                <div class="col-sm-12 col-md-8 col-md-pull-4">
                    <form action="#" method="post">        
                        <p>
                            <input type="text" name="name" class="form-name wow flipOutY" placeholder="* Name" style="visibility: visible; animation-name: flipOutY;">
                        </p>
                        <p>
                            <input type="email" name="email" class="form-email wow flipOutY" placeholder="* Email" style="visibility: visible; animation-name: flipOutY;">
                        </p>
                        <p>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-message wow flipOutY" placeholder="* Message" style="visibility: visible; animation-name: flipOutY;"></textarea>
                        </p>
                        <p class="fanmail text-left"><input type="checkbox" name="fan-mail">  Fan Mail
                        </p>
                        <div class="submit-button text-left">
                            <p>
                                <input type="submit" name="sbmt" value="SUBMIT" class="btn btn-default submit wow flipOutY" style="visibility: visible; animation-name: flipOutY;">
                            </p>
                        </div>
                    </form> 
                </div>


            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-content">
                    <p>Copyright 2016. Rolly Villarin. Web design: <a class="footerlink" href="#">tech-design</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>