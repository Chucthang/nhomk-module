<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<section class="type-5">
    <span class="top-border"></span>
    <div class="container">
        <div class="row">
        <p class="quote">Get Free Shipping on all orders over $199</p>
        <p class="quote-second">During this Weekend Sale Only. Get Free Shipping. Don't delay. Order Today.</p>
    </div>
</div>
<span class="bottom-border"></span>
</section>