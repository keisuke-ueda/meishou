<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
</head>


<?php get_header(); ?>

<body>
    <main>
        <div class="container mt-5 text-center font-weight-bold">
            <h1><span class="text-warning" style="font-family: 'Mochiy Pop P One', sans-serif;">やりたいことを何でも言ってください!!</h1>
        </div>
        <div class="container mt-5">
            <?php echo do_shortcode('[metaslider id="54"]'); ?>
        </div>
        <h2 class="container mt-5 text-center font-weight-bold"><span class="text-warning" style="font-family: 'Mochiy Pop P One', sans-serif;">あなたはどんなどころで過ごしたいですか？</span></h2>
        <div class="container">
            <div class="mx-auto border mt-5">
                <h4 class="text-light text-center mt-3 mb-5">北欧スタイル</h4>
                <img src="<?php echo get_template_directory_uri();?>/img/北欧スタイル.png" class="mx-auto d-block mb-2  " width="60%"/>
            </div>
            <div class="mx-auto border mt-5">
                <h4 class="text-light text-center mt-3 mb-5">ブルックリンスタイル</h4>
                <img src="<?php echo get_template_directory_uri();?>/img/ブルックリンスタイル.png" class="mx-auto d-block mb-2  " width="60%"/>
            </div>
            <div class="mx-auto border mt-5">
                <h4 class="text-light text-center mt-3 mb-5">西海岸スタイル</h4>
                <img src="<?php echo get_template_directory_uri();?>/img/西海岸スタイル.png" class="mx-auto d-block mb-2  " width="60%"/>
            </div>
            <div class="mx-auto border mt-5">
                <h4 class="text-light text-center mt-3 mb-5">カフェスタイル</h4>
                <img src="<?php echo get_template_directory_uri();?>/img/カフェスタイル.png" class="mx-auto d-block mb-2  " width="60%"/>
            </div>
        </div>
    </main>
</body>

<?php get_footer(); ?>