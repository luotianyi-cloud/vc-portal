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
    <link rel="stylesheet" href="<?= CDN_ROOT . "/whitestone-stream-design-2.0.css" ?>">
    <title>关于 - <?=$config["name"]?></title>
    <style>
        article {
            margin-bottom: 3em;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>
                <page-title>关于本站</page-title>
            </h1>
            <aside>
                <a class="button" href="/">回首页</a>
            </aside>
        </header>
        <article>
            <h2 id="submit-new-website">如何提交新的网站</h2>
            <p>如果您想要提交新的网站，请联系 <a href="#" rel="email">[Email Protected]</a>，或者联系QQ：3600424575。附上网站名称、网站地址、网站简介；并可附上可选的推荐理由。</p>
            <p>如果您推荐的是软件下载相关的网站，我们会对该网站的信誉进行审查，避免有人通过该网站投放病毒。</p>
            <p>我们欢迎您提交同人网站、同人组织的相关链接，无论您是否为该组织的负责人或Staff。无论网站是否备案均可。我们原则上不会在此列出以展示个人生活、个人作品为主要内容的网站。如果您的网站为VC相关同人网站，请确保您提交的网站：
                <ul>
                    <li>在国内外均可正常访问</li>
                    <li>启用HTTPS，包括网站本身和网站的CSS、JS及资源文件</li>
                    <li>WAF设置不影响正常用户体验</li>
                    <li>不包含违法违规内容和NSFW内容，不包括对特定或不特定虚拟歌手有攻击性的内容</li>
                    <li>有实质性的内容，不是Demo页、空白页、「建设中」页面等</li>
                </ul>
            </p>
            <p>原则上，我们不接受商业性质的同人网站。我们不会在此列出损害Producer权益的网站，包括盗版音乐的分享网站等。</p>
        </article>
        <article>
            <h2 id="content-reporting">我想删除此网站上的内容</h2>
            <p>如果您不想您拥有的网站出现在我们这里，或者您认为我们的网站上的内容侵害了您的权益，请通过 <a href="#" rel="email">[Email Protected]</a> 联系我们。</p>
        </article>
        <article>
            <h2 id="become-cooperate-partner">我想在您的网站上进行推广</h2>
            <p>非常抱歉的是，我们的网站不接受刊登任何商业性质的推广信息。但是，如果您是中文虚拟歌手的创作者、相关软件开发者或社区维护者，您可以通过我们的网站推广您的非商业性质的作品。值得注意的是，我们的网站的流量较低，可能很难得到理想的推广效果。</p>
            <p>对于音乐作品，无论是原创还是翻唱，只要您作品符合以下要求我们均会尽力为您进行推广：
                <ul>
                    <li>使用虚拟歌手创作，在BiliBili平台上发布</li>
                    <li>发布时间距今6个月以内，播放量小于10万</li>
                    <li>不是商业曲、梗曲；歌曲质量符合最低要求，不「毁狗耳」、「阴间」</li>
                </ul>
            </p>
            <p>如果您的作品为其他虚拟歌手相关的内容，如教程、工具、MMD等，也可以联系我们进行推广。</p>
            <p>请注意，在此网站上推广作品我们不会收取任何费用，如果任何人以我们的名义向您索要钱财或物品，请不要相信、谨防诈骗。</p>
        </article>
    </main>
    <?php load_protected_email($config["contact"]); ?>
</body>
</html>
