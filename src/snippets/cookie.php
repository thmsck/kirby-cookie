<?php $link = option('thmsck.cookie.link', 'datenschutzerklaerung');

$url = null;
$p = $pages->find($link);
$url = ($p) ? $p->url() : $link;
?>

<div id="cookie-wrapper">
    <div class="cookie_container">
        <p class="cookie_message"><?= t('thmsck.cookie.text'); ?> <a href="<?= $url; ?>"><?= t('thmsck.cookie.linkText'); ?></a></p>
        <button class="cookie_btn cookie_btn_accept_all" onclick="closeCookie()"><?= t('thmsck.cookie.buttonText'); ?></button>
    </div>
</div>

<script>
    function closeCookie() {
        document.cookie = "cookie-note=1;path=/;max-age=<?= option('thmsck.cookie.lifetime', '864000'); ?>", banner.style.display = "none"
    }

    var banner = document.getElementById("cookie-wrapper");
    -1 !== document.cookie.indexOf("cookie-note=1") && (banner.style.display = "none");
</script>