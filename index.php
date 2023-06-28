<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php include 'partials/head.php' ?>

<body <?php body_class(); ?>>

    <?php require_once 'partials/page/modal.php'; ?>
    <?php require_once 'partials/page/nav.php'; ?>
    <?php require_once 'partials/page/hero.php'; ?>
    <?php require_once 'partials/page/speakers.php'; ?>
    <?php require_once 'partials/page/schedule.php'; ?>
    <?php require_once 'partials/page/tickets.php'; ?>
    <!-- <?php require_once 'partials/page/previous.php'; ?> -->
    <?php require_once 'partials/page/contact.php'; ?>
    <!-- <?php require_once 'partials/page/video.php'; ?>
    <?php require_once 'partials/page/sponsors.php'; ?>
    <?php require_once 'partials/page/cta.php'; ?> -->
    <?php require_once 'partials/page/countdown.php'; ?>
    <?php require_once 'partials/page/footer.php'; ?>

    <?php wp_footer(); ?>
</body>

</html>