<?php
/* Template Name: Шаблон страницы контактов */

get_header();

$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
$email = get_field('admin_email', $set);

$latitude = get_field('latitude');
$longitude = get_field('longitude');

?>

<section class="section contacts-section" id="contacts">
    <div class="container">
        <div class="contacts">
            <h1 class="section__title contacts__title">
                <?php the_title(); ?>
            </h1>

            <div class="contacts-wrapper">
                <div class="contacts-info">
                    <p>
                        <?php the_field('addres') ?>
                    </p>
                    <a href="mailto: <?php the_field('email') ?>" class="contacts-info__mail">
                        <?php the_field('email') ?>
                    </a>
                    <a href="tel:<?php the_field('phone') ?>" class="contacts-info__tel">
                        <?php the_field('phone') ?>
                    </a>
                    <p>
                        <?php the_field('work_time') ?>
                    </p>
                </div>

                <?php if (have_rows('table')): ?>

                <div class="contacts-table">

                    <?php while (have_rows('table')) : the_row(); ?>

                        <div class="contacts-table__row">
                            <div class="contacts-table__column">
                                <?php e('title') ?>
                            </div>
                            <div class="contacts-table__column">
                                <?php e('val_1') ?>
                            </div>
                            <?php if(g('column_add')): ?>
                                <div class="contacts-table__column">
                                    <?php e('val_2') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>

                </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php if($latitude && $longitude): ?>

    <div class="map" id="map" data-latitude="<?php echo $latitude; ?>" data-longitude="<?php echo $longitude; ?>" ></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD41ju8fEBULLIEGvSODoqTUIGcX5nQxA4&amp;"></script>

<?php endif; ?>


<?php get_footer(); ?>
