<?php
/* Template Name: Шаблон страницы квалификации */

get_header();

$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
$email = get_field('admin_email', $set);
?>

<section class="section qualification-section">
    <div class="container">
        <div class="qualification">
            <h1 class="section__title qualification__title">
                <?php echo get_the_title(); ?>
            </h1>
            <h4 class="qualification__subtitle">
                <?php the_field('subtitle'); ?>
            </h4>
            <div class="text qualification__text text-justify">
                <?php the_post();the_content(); ?>
            </div>

            <?php $gallery = get_field('docs');
            if ($gallery): ?>

                <div class="documents-list">

                    <?php foreach ($gallery as $item): ?>

                        <a href="<?php echo $item['url']; ?>" class="documents-list__item fancybox">
                            <img src="<?php echo $item['url']; ?>" alt="">
                        </a>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
