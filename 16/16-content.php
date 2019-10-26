<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-16">
    <div class="wrapper container"> 
        <div class="wrap-inside">
            <div class="main-content">
                <div id="woo-ordering">
                    <div class="imghome">
                        <a class="home" href="">Home</a>
                            / Blog Full Width
                    </div>
                </div>
                <div class="entry-full">
                    <div id="head-line">
                        <h1 class="title">Blog Full Width</h1>
                        <div class="subheader">latest news</div>
                    </div>
                    <div id="left" class="full-width">
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="entry-left">
                                    <div class="col-md-2 col-xs-6 index-thumb">
                                        <a href="" >
                                            <img src="images/post-1.png" title="Read Specials deals for him on all items">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-6 col-xs-12">
                                    <div class="entry-right">
                                        <h2>
                                            <a href="" title="Read Specials deals for him on all items">Specials deals for him on all items</a>
                                        </h2>
                                        <div class="meta">
                                            Oct 15, 2019 by
                                            <a href="" title="Posts by NANGPHAM">NANGPHAM</a> in
                                            <a href="">Blog</a>
                                            <a href="">3 comments</a>
                                        </div>
                                        <div class="post-text">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="entry-left">
                                    <div class="col-md-2 col-xs-6 index-thumb">
                                        <a href="" >
                                            <img src="images/post-2.png" title="Read Specials deals for him on all items">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-6 col-xs-12">
                                    <div class="entry-right">
                                        <h2>
                                            <a href="" title="Read Specials deals for him on all items">Specials deals for him on all items</a>
                                        </h2>
                                        <div class="meta">
                                            Oct 15, 2019 by
                                            <a href="" title="Posts by NANGPHAM">NANGPHAM</a> in
                                            <a href="">Blog</a>
                                            <a href="">3 comments</a>
                                        </div>
                                        <div class="post-text">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="entry-left">
                                    <div class="col-md-2 col-xs-6 index-thumb">
                                        <a href="" >
                                            <img src="images/post-3.png" title="Read Specials deals for him on all items">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-6 col-xs-12">
                                    <div class="entry-right">
                                        <h2>
                                            <a href="" title="Read Specials deals for him on all items">Specials deals for him on all items</a>
                                        </h2>
                                        <div class="meta">
                                            Oct 15, 2019 by
                                            <a href="" title="Posts by NANGPHAM">NANGPHAM</a> in
                                            <a href="">Blog</a>
                                            <a href="">3 comments</a>
                                        </div>
                                        <div class="post-text">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>           
                    </div>
                </div>
            </div>           
        </div>
    </div>
</div>  
                            
                     
