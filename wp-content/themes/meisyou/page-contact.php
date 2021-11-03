<?php
/*
Template Name: コンタクトフォーム
*/
?>

<?php get_header(); ?>

<div class="m-5  text-center text-light border-bottom border-2">
    <h1>お問い合わせフォーム</h1>
</div>
<div class="contact_box">
    <?php echo do_shortcode('[contact-form-7 id="42" title="contact form"]'); ?>
</div>