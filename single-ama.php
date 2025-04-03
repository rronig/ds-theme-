<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div class="container">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Rubik+Dirt&family=Rubik+Spray+Paint&family=Sigmar&display=swap" rel="stylesheet">
            <style>
                body { 
                    text-align: center; 
                    background: linear-gradient(360deg, rgb(38, 116, 200), #f7f7f7);
                    background-attachment: fixed; /* Ensures the gradient covers the entire page */
                    color: white;
                    font-family: Arial, sans-serif;
                }
                .sigmar-regular {
                    font-family: "Sigmar", serif;
                    font-weight: 400;
                    font-style: normal;
                    font-size: 64px;
                    color: white; /* White text */
                    -webkit-text-stroke: 2px black; /* Black outline for WebKit browsers */
                    text-shadow: 
                        -2px -2px 0 black,  
                        2px -2px 0 black,
                        -2px  2px 0 black,
                        2px  2px 0 black; /* Black outline for other browsers */
                }
                p{
                    color:rgb(38, 116, 200);
                }
                .rubik-dirt-regular {
                    font-family: "Rubik Dirt", serif;
                    font-weight: 400;
                    font-style: normal;
                    font-size:32px;
                }
                .rubik-spray-paint-regular {
                    font-family: "Rubik Spray Paint", serif;
                    font-weight: 400;
                    font-style: normal;
                }
            </style>

            <?php while (have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                    <?php 
if ( has_post_thumbnail() ) { 
    the_post_thumbnail('large', ['class' => 'featured-image']);
}
else{
?>
<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="Default Image">
<?php } ?>
                        <h1 class="sigmar-regular"><?php the_title(); ?></h1>
                        <div class="meta-info">
                            <p class='rubik-dirt-regular'>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                            <p class='rubik-dirt-regular'>Categories: <?php the_category(', '); ?></p>
                            <p class='rubik-dirt-regular'><?php the_tags('', ', '); ?></p>
                        </div>
                    </header>

                    <div class="content rubik-spray-paint-regular">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php 
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            <?php endwhile; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
