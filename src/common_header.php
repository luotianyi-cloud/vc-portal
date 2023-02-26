<?php
header("Content-Type: text/html; charset=utf-8");
define("CDN_ROOT", getenv("CDN_ROOT") ?: "/assets");

$config = json_decode(file_get_contents(dirname(__FILE__) . "/manifest.json"), true);

function site_icon_url($site) {
    $url = $site["icon"];
    if (substr($url, 0, 4) === "http") return $url;
    return implode("/", [CDN_ROOT, "favicon", $url]);
}

function load_protected_email($email) {
    $crypt_email = [];
    foreach (str_split($email) as $char) {
        $crypt_email[] = ord($char) + 0x66ccff;
    }

    ?>
    <script>
        const email = [<?=implode(',', $crypt_email)?>];
        const realEmail = String.fromCharCode.apply(null, email.map(c => c - 0x66ccff));
        const links = document.querySelectorAll('a[rel="email"]');
        for (let i = 0; i < links.length; i++) {
            links[i].href = `mailto:${realEmail}`;
            links[i].innerText = `${realEmail}`;
        }
    </script>
    <?php
}
