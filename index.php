<?php 
$site = get_the_title();
get_header(); 
the_post();?>
    <main class="page-content">
        <?php the_content()?>
    
    </main>
<?php get_footer(); ?>