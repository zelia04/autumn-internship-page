<?php 
/**
 * Template Name: Template Autumn 2022 Internship
*/
get_header();
$fields = get_fields();
?>

<main class="autumn-internship-page">

<div class="container">

<?php if( have_rows('first_section') ): ?>
    <?php while( have_rows('first_section') ): the_row();

        $bigtitle = get_sub_field('title_1');
        $medtitle = get_sub_field('title_2');
        $image = get_sub_field('group_picture');
        $desc = get_sub_field('summary');
        ?>

    <?php if(get_sub_field('title_1')){ ?><h1 class="title1"><?php the_sub_field('title_1'); ?></h1><?php } ?>
    <?php if(get_sub_field('title_2')){ ?><h1 class="title2"><?php the_sub_field('title_2'); ?></h1><?php } ?>


    <div class="row section-1">
        <div class="col-md-6 text-center group">
            <img src="<?php echo esc_url( $image['url'] ); ?>" class="group_pic" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
        </div>

        <div class="col-md-6 summary">
        <?php if(get_sub_field('summary')){ ?><p><?php the_sub_field('summary'); ?></p><?php } ?>
        </div>

        <?php endwhile; endif; ?>

    </div>
</div>

<!--  -->

<div class="orangebg">

    <div class="container">

    <?php if( have_rows('second_section') ): ?>
    <?php while( have_rows('second_section') ): the_row();

        $image = get_sub_field('slider_image');
        $image2 = get_sub_field('slider_image_2');
        $image3 = get_sub_field('slider_image_3');

    ?>

    <?php if(get_sub_field('recollections')){ ?><h1 class="recollections"><?php the_sub_field('recollections'); ?></h1><?php } ?>

    </div>

    <div class="container">

        <div class="slick-nav">

        </div>

        <ul class="slider">

        <li>
            <div class="centralise row">
            <div class="col-md-5 text-center group-picture">
            <img src="<?php echo esc_url( $image['url'] ); ?>" class="group_pic" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            </div>
        
        <div class="col-md-5 desc">

        <?php if(get_sub_field('slider_caption')){ ?><p class="smalltitle"><?php the_sub_field('slider_caption'); ?></p><?php } ?>
        <?php if(get_sub_field('slider_description')){ ?> <p class="description"><?php the_sub_field('slider_description'); ?></p><?php } ?>
        </div>
        </div>
        </li>

        <li>
            <div class="centralise row">
            <div class="col-md-5 text-center group-picture">
            <img src="<?php echo esc_url( $image2['url'] ); ?>" class="group_pic" alt="<?php echo esc_attr( $image2['alt'] ); ?>" />
            </div>
    
        <div class="col-md-5 desc">
            <?php if(get_sub_field('slider_caption_2')){ ?><p class="smalltitle"><?php the_sub_field('slider_caption_2'); ?></p><?php } ?>
            <?php if(get_sub_field('slider_description_2')){ ?><p class="description"><?php the_sub_field('slider_description_2'); ?></p><?php } ?>
        </div>
        </div>
        </li>
        <li>
            <div class="centralise row">
            <div class="col-md-5 text-center group-picture">
            <img src="<?php echo esc_url( $image3['url'] ); ?>" class="group_pic" alt="<?php echo esc_attr( $image3['alt'] ); ?>" />
            </div>
       
        <div class="col-md-5 desc">
            <?php if(get_sub_field('slider_caption_3')){ ?><p class="smalltitle"><?php the_sub_field('slider_caption_3'); ?></p><?php } ?>
            <?php if(get_sub_field('slider_description_3')){ ?><p class="description"><?php the_sub_field('slider_description_3'); ?></p><?php } ?>
    </div>
        </li>
    </ul>

    <?php endwhile; endif; ?>

</div>

</div>

<div class="container">

<?php if( have_rows('last_section') ): ?>
    <?php while( have_rows('last_section') ): the_row();

        $image = get_sub_field('solo_image');
        $image2 = get_sub_field('solo_image_2');

    ?>

    <div class="row">

    <?php if(get_sub_field('afterthoughts')){ ?><h1 class="col-12 afterthoughts"><?php the_sub_field('afterthoughts'); ?></h1><?php } ?>
    </div>

<div class="row gx-5 card-spacing">
    <div class="col-sm-12 col-md-6 mb-sm-4 mb-md-0 film-item">

        <div class="lucretia film-inner">
        
        <div class="card">
        <img class="card-img-top" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
        <div class="card-body">
        <?php if(get_sub_field('name')){ ?><h5 class="card-title"><?php the_sub_field('name'); ?></h5><?php } ?>
        <?php if(get_sub_field('overview')){ ?><p class="card-text"><?php the_sub_field('overview'); ?></p><?php } ?>
        </div>
    </div>
    </div>
    </div>


<div class="col-sm-12 col-md-6 mb-sm-4 mb-md-0 film-item">

    <div class="zelia film-inner">
        
    <div class="card">
        <img class="card-img-top" src="<?php echo esc_url( $image2['url'] ); ?>" alt="<?php echo esc_attr( $image2['alt'] ); ?>">
        <div class="card-body">
        <?php if(get_sub_field('name_2')){ ?><h5 class="card-title"><?php the_sub_field('name_2'); ?></h5><?php } ?>
        <?php if(get_sub_field('overview_2')){ ?><p class="card-text"><?php the_sub_field('overview_2'); ?></p><?php } ?>
        </div>
    </div>

</div>
</div>

</div>

<?php endwhile; endif; ?>

</div>

</main>

<?php
get_footer();
?>