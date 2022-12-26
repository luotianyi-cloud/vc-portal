<?php
header("Content-Type: text/html; charset=utf-8");
const DEBUG = false;

$config_file = file_get_contents(dirname(__FILE__)."/config.json");
$config = json_decode($config_file, true);
define('CDN_ROOT', $config["cdn"]);

$style_link = DEBUG ? "whitestone-stream-design-2.0.css?t=".time() : CDN_ROOT."/whitestone-stream-design-2.0.css";

$crypt_email = [];
foreach (str_split($config["contact"]) as $char) {
    $crypt_email[] = ord($char) + 0x66ccff;
}

function site_icon_url($site) {
    $url = $site["icon"];
    if (substr($url, 0, 4) === "http") return $url;
    return implode("/", [CDN_ROOT, "favicon", $url]);
}

function load_protected_email($encrypted_data) {
    ?>
    <script>
        const email = [<?=implode(',', $encrypted_data)?>];
        const realEmail = String.fromCharCode.apply(null, email.map(c => c - 0x66ccff));
        const links = document.querySelectorAll('a[rel="email"]');
        for (let i = 0; i < links.length; i++) {
            links[i].href = `mailto:${realEmail}`;
            links[i].innerText = `${realEmail}`;
        }
    </script>
    <?php
}
