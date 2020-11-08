<?php /* Wordpress API */ define('WP_USE_THEMES' , false); require('/home2/thesamp9/public_html/content/wp-blog-header.php' ); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- https://github.com/MenacingBeats/menacingbeats.com.git -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#101010" />
    <meta property="og:image" content="open-graph-menacing-beats.png" />
    <meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="627" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://menacingbeats.github.io/menacingbeats.com/"/>
    <meta property="og:title" content="MENACING BEATS" />
    <meta property="og:description" content="For those who enjoy, adore, delight (in), dig, fancy, get off (on), groove (on), like, love, rejoice (in), relish, revel (in), savor (also savour) the vibrations of rhythm and melody.
    This beat is menacing, intimidating, ominous.
    
    Soon you will eat." />

    <title>MENACINGBEATS.COM</title>
	    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="apple-mobile-web-app-title" content="Menacing Beats">
    <meta name="application-name" content="Menacing Beats">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="android-chrome-512x512.png" type="">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- Navbar -->
        <div class="topNav" id="myTopNav">
            <div class="nav-text">
                <a href="index.php" class="active"><img class="nav-logo" src="menacingbeats-logo-white.png" alt="menacingbeats-logo"></a>
                <a class="links-only" href="sotd.html">SOTD</a>
                <a class="links-only" href="live-techno.html">LIVE 
                    <svg height="16" width="8" class="blinking">
                    <circle cx="4" cy="4" r="3" fill="red" />
                    Sorry, your browser does not support inline SVG.  
                  </svg> </a>
                <!-- <div class="dropdown">
                    <button class="dropbtn">ARTISTS
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">DJs & PRODUCERS</a>
                      <a href="#">PROMOTERS & LABELS</a>
                    </div>
                  </div> -->
                <!-- <a class="links-only" href="venue-guide.html">VENUES</a> -->
                <a class="links-only" href="about.html">ABOUT</a>
                <a class="links-only" href="contact.html">CONTACT</a>

                    <a href="javascript:void(0);" class="icon" onclick="hamburger()">
                        <i class="fa fa-bars"></i></a>
            </div>
                <div class="nav-img">
                <!-- Socials -->
                    <a href="https://www.facebook.com/menacingbeats,%20@menacingbeats"> <img src="menacingbeats-facebook-logo-white.png" alt="menacingbeats-facebook-logo"> 
                    </a>
                    <a href="https://www.instagram.com/menacingbeats/"> <img src="menacingbeats-instagram-logo-white.png" alt="menacingbeats-instagram-logo"> 
                    </a>
                    <a href="https://soundcloud.com/menacingbeats"> <img id="soundcloud-size" src="menacingbeats-soundcloud-logo-white.png" alt="menacingbeats-soundcloud-logo"> 
                    </a>
                </div>
        </div>
   <!-- Header below navbar -->
    <header>
        <!-- News Ticker -->
            <div class="t-container">
                <div class="ticker-wrap">
                    <div class="ticker-move">
                        <div class="ticker-item">BREAKING NEWS: The Victorian government will deliver a lifeline to struggling music venues with $15 million worth of grants</div>
                        <div class="ticker-item">In techno we trust</div>
                        <div class="ticker-item">Who is Technoviking Hans Schlepkopper?</div>
                        <div class="ticker-item">Less drama, more techno</div>
                        <div class="ticker-item">Boots ‘n cats n’ boots ‘n cats boots ‘n cats n’ boots ‘n cats</div>
                        <div class="ticker-item">I like my techno how i like my coffee, dark</div>
                        <div class="ticker-item">Stop wars, start raves</div>
                        <div class="ticker-item">Tell zim you love techno</div>
                        <div class="ticker-item">Song ID pls?</div>
                        <div class="ticker-item">There were people dancing, I think, or maybe they were cops, I think they might have been
                        cops, but anyway like I was just dancing and dancing, oh no they were cops, shit</div>
                        <div class="ticker-item">Beta Vulgaris, Beta Vulgaris, Beta Vulgaris, Beta Vulgaris, Beta Vulgaris, Beta Vulgaris</div>
                        <div class="ticker-item">"Tell it to your mother, tell it to your friends, funk is now spelt with a V!".</div>
                        <div class="ticker-item">The Australian Government has pledged $75 million to aid the country's ailing festival and events industry.</div>
                        <div class="ticker-item">Menacingbeats.com criticised for lack of Melbourne bounce</div>
                        <div class="ticker-item">Tips to sneak into the house @ 4am without waking the S.O.</div>
                        <div class="ticker-item">Tourist pissed off after spending 3 hours in line only to get turned away at Berghain</div>
                        <div class="ticker-item">Bipedal turtles fight crime in New York</div>
                        <div class="ticker-item">Expert critiques sound quality at outdoor daytime inner Melbourne festival</div>
                        <div class="ticker-item">Man falls asleep at Revs…again</div>
                        <div class="ticker-item">Experts say gardeners using wickr are making $1000 a day from their own home </div>
                        <div class="ticker-item">I like it here, I like the lighting</div>
                    </div>
                </div>
            </div>

    </header>    

<!-- Main content of the landing page -->
    <main>
            <div class="w3-content w3-section">
                <img class="mySlides w3-animate-right" src="menacingbeats-logo-fullpage.jpg" alt="meancingbeats-logo-fullpage">
                <img class="mySlides w3-animate-right" src="menacingbeats-beetport-banner.jpg" alt="menacingbeats-beetport-banner">
                <img class="mySlides w3-animate-right" src="menacingbeats-melbourne-music-week.png" alt="menacingbeats-melbourne-music-week">
                <img class="mySlides w3-animate-right" src="menacingbeats-save-our-scene-banner.png" alt="meancingbeats-save-our-scene-banner">
              </div>

              <div class="wrapper" style="width:100%; font-family: 'Rajdhani', sans-serif;">
				<?php /* Start loop for category 2 'SOTD' */ $query = new WP_Query( 'cat=2&posts_per_page=1' ); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<div class="post" style="color:#f2f2f2; font-size:30px;">
					<h2><?php /* Display the post title */ the_title(); ?></h2>
					
					<div class="entry" style="width:100%; height: 30vh; margin:0 auto;"><?php /* Display the post content */ the_content(); ?></div>
					
					<p><small><?php /* Display the tags */ the_tags(); ?></small></p>
					
					<p>Artist Facebook: 
					<a href="<?php /* Display the artist's socials  */ echo get_post_meta($post->ID, 'facebook-profile', true); ?>">
					<img alt="Qries" src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512" width="50" height="50"></a>  
					</p>

					<?php /* Display the post author's avatar */ echo get_avatar( get_the_author_meta('user_email'), $size = '100'); ?>
					
					<p><small><?php /* Display the date and a link to other posts by this author */ the_time( 'jS F, Y' ); ?> by <?php the_author_posts_link(); ?></small></p>
				</div>
				
				<?php endwhile; wp_reset_postdata(); else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
              </div>




              <div class="card-group">
                <div class="card">
                        <img src="menacingbeats-sotd-card.jpg" class="card-img-top" alt="menacingbeats-sotd-card">
                  <div class="card-body">
                    <h5 class="card-title">SOTD</h5>
                    <p class="card-text">Techno selected daily</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card">
                  <img src="menacingbeats-venue-guide-club.jpg" class="card-img-top" alt="menacingbeats-venue-guide-club">
                  <div class="card-body">
                    <h5 class="card-title">VENUE GUIDE</h5>
                    <p class="card-text">Find Melbourne Techno Venues</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card">
                    <img src="menacingbeats-live-techno.jpg" class="card-img-top" alt="menacingbeats-venue-guide-club">
                      </video>
                  <div class="card-body">
                    <h5 class="card-title">LIVE TECHNO</h5>
                    <p class="card-text">Find streams & events</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
    </main>
<!-- Footer -->
<footer>
    <section class="footer-container">
            <div class="center-socials">
                <h2>MENACING BEATS</h2>
                <h4>© Menacing Beats 2020</h4>
                <ul class="all-social-links ">
                    <li> <a href="https://www.facebook.com/menacingbeats,%20@menacingbeats"> <img src="ffacebook.png" alt="menacingbeats-footer-social-facebook"></a> </li>
                    <li> <a href="https://www.instagram.com/menacingbeats/"> <img src="finstagram.png" alt="menacingbeats-footer-social-instagram"></a> </li>
                    <li> <a href="https://twitter.com/menacingbeats"> <img src="ftwitter.png" alt="menacingbeats-footer-social-twitter"></a> </li>
                    <li> <a href="https://www.youtube.com/channel/UCSPYyvqUm66kpNzh_X5W4VQ"> <img src="fyoutube.png" alt="menacingbeats-footer-social-youtube"> </a> </li>
                    <li> <a href="https://soundcloud.com/menacingbeats"> <img src="fsoundcloud.png" alt="menacingbeats-footer-social-soundcloud"></a> </li> 
                    <li> <a href="https://soundcloud.com/menacingbeats"> <img src="fspotify.png" alt="contact us"> </a> </li> 
                    <li> <a href="#contact"> <img src="fcontact.png" alt="menacingbeats-social-contact"> </a> </li> 
                </ul>
            </div>
            <div class="blurb">
        For those who enjoy, adore, delight (in), dig, fancy, get off (on), groove (on), like, love, rejoice (in), relish, revel (in), savor (also savour) the vibrations of rhythm and melody. <br>
        This beat is menacing, intimidating, ominous. <br> <br>
        Soon you will eat.
        </div>
        </section>
        <div class="footer-bottom-admin">
            <ul class="footer-bottom-list">
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="https://dolbeydev.com/">Created by dolbeydev</a></li>
            </ul>
        </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="slider-script.js"></script>

</body>
</html>
