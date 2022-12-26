<?php require_once(dirname(dirname(__FILE__))."/common_header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="google" content="notranslate">
    <link rel="stylesheet" href="<?=$style_link?>">
    <title><?=$config["name"]?></title>
    <style>
        .programmable-radius-image {
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>
                <page-title><?=$config["name"]?></page-title>
            </h1>
            <aside>
                <a class="button" href="https://www.bilibili.com/video/BV1GJ411x7h7/" target="_blank">登录</a>
                <a class="button" href="about.php">关于</a>
            </aside>
        </header>
        <article>
            <?php foreach($config["groups"] as $section) { ?>
                <section>
                    <h2><?=$section["name"]?></h2>
                </section>
                <site-group class="grid-box">
                    <?php foreach($section["sites"] as $site) { ?>
                        <a  target="_blank"
                            class="site grid-box-item"
                            href="<?=$site['url']?>">
                            <img class="grid-box-image <?php echo ($site["circle"] === true) ? "programmable-radius-image" : ""; ?>"
                                src="<?=site_icon_url($site)?>" referrerpolicy="no-referrer"
                                <?php if(!isset($site["icon"]) || $site["icon"] == null || $site["icon"] == "") { ?>
                                    style="width: 0; height: 0;"
                                <?php } ?>>
                            <site-content class="grid-box-content">
                                <site-title class="grid-box-title">
                                    <?=$site["name"]?>
                                </site-title>
                                <site-descrition class="grid-box-descrition"><?=$site["description"]?></site-descrition>
                            </site-content>
                        </a>
                    <?php } ?>
                </site-group>
            <?php } ?>
        </article>
        <footer>
            <p>
                &copy; 2022 <page-title><?=$config["name"]?></page-title> |
                联系方式: <a href="#" rel="email">[Email Protected]</a><br>
                <a href="">提交新网站</a> |
                <a href="">联系推广合作</a>
            </p>
            <p>
                程序代码依据 <a target="_blank" rel="license" href="https://opensource.org/licenses/MIT">
                    MIT License
                </a> 提供<br>
                网站内容依据 <a target="_blank" rel="license" href="https://creativecommons.org/licenses/by-nc-sa/4.0/">
                    CC BY-NC-SA 4.0
                </a> 提供<br>
            </p>
        </footer>
        <?php load_protected_email($crypt_email); ?>
    </main>
</body>
</html>
