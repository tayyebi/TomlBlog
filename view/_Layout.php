<!DOCTYPE html>
<html lang="en">

<!--
Optimized functional is beautiful.
Dorud!
- Tayyebi
-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Data['Title'] ?></title>

    <link rel="stylesheet" href="<?php echo _Root . 'css/font.css' ?>">
    <link rel="stylesheet" href="<?php echo _Root . 'css/win7.css' ?>">
    <link rel="stylesheet" href="<?php echo _Root . 'css/slider.css' ?>">
    <link rel="stylesheet" href="<?php echo _Root . 'css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo _Root . 'css/' . strtolower($this->ViewDirectory . '/' . $this->View) . '.css' ?>">

</head>

<body style="direction: rtl;">

    <div class="header">
        <h1><?php echo _AppName ?></h1>
        <div class="versions">
            <a href="<?php echo _Root . 'Home/Text' ?>">برای دستگاه‌های قدیمی</a>
            <a href="<?php echo _Root . 'Home/Audio' ?>">برای نابینایان</a>
        </div>
    </div>

    <div class="content">

        <button class="fullscreen">□</button>

        <main class="main">
            <!--VIEW_CONTENT-->
        </main>

        <div class="footer">
            <img class="logo" src="<?php echo _Icon ?>" />
            <nav class="links">
                <ul>
                    <li><a href="<?php echo _Root ?>">Home | خانه</a></li>
                    <li><a href="<?php echo _Root . 'Blog' ?>">Blog | بلاگ</a></li>
                    <?php
                    if (isset($Data['Toml']->linkbox->links))
                        foreach ($Data['Toml']->linkbox->links as $link) {
                            if (!$link->active) continue;
                    ?>
                        <li><a href="<?php echo $link->link ?>"><?php echo $link->title ?></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </nav>
        </div>

    </div>

    <script type="text/javascript">
        var root = '<?php echo _Root ?>';
    </script>
    <script src="<?php echo _Root . 'js/jquery.js' ?>"></script>
    <script src="<?php echo _Root . 'js/main.js' ?>"></script>
    <script src="<?php echo _Root . 'js/slider.js' ?>"></script>
    <script src="<?php echo _Root . 'js/' . strtolower($this->ViewDirectory . '/' . $this->View) . '.js' ?>"></script>
</body>

</html>