<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-20">
    <div class="wrapper container"> 
        <div class="wrap-inside">
            <div class="main-content">
                <div id="woo-ordering">
                    <div class="imghome">
                        <a class="home" href="">Home</a>
                            / Portfolio 1 Column
                    </div>
                </div>
                <div class="entry-full">
                    <div id="head-line">
                        <h1 class="title">Portfolio 1 Column</h1>      
                    </div>
                    <div id="left" class="full-width">
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-left">
                                                <div class="index-thumb">
                                                    <a href="">
                                                        <img src="images/column-1.png">
                                                    </a>
                                                    <a href="" class="zoom-icon" rel="shadowbox"></a>
                                                    <a href="" class="link-icon" rel="shadowbox"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-right">
                                                <h2>
                                                    <a href="">Portfolio Item Four</a>
                                                </h2>
                                                <div class="post-text">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-left">
                                                <div class="index-thumb">
                                                    <a href="">
                                                        <img src="images/column-2.png">
                                                    </a>
                                                    <a href="" class="zoom-icon" rel="shadowbox"></a>
                                                    <a href="" class="link-icon" rel="shadowbox"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-right">
                                                <h2>
                                                    <a href="">Portfolio Item Four</a>
                                                </h2>
                                                <div class="post-text">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-left">
                                                <div class="index-thumb">
                                                    <a href="">
                                                        <img src="images/column-3.png">
                                                    </a>
                                                    <a href="" class="zoom-icon" rel="shadowbox"></a>
                                                    <a href="" class="link-icon" rel="shadowbox"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-right">
                                                <h2>
                                                    <a href="">Portfolio Item Four</a>
                                                </h2>
                                                <div class="post-text">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-left">
                                                <div class="index-thumb">
                                                    <a href="">
                                                        <img src="images/column-4.png">
                                                    </a>
                                                    <a href="" class="zoom-icon" rel="shadowbox"></a>
                                                    <a href="" class="link-icon" rel="shadowbox"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-right">
                                                <h2>
                                                    <a href="">Portfolio Item Four</a>
                                                </h2>
                                                <div class="post-text">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-left">
                                                <div class="index-thumb">
                                                    <a href="">
                                                        <img src="images/column-5.png">
                                                    </a>
                                                    <a href="" class="zoom-icon" rel="shadowbox"></a>
                                                    <a href="" class="link-icon" rel="shadowbox"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-right">
                                                <h2>
                                                    <a href="">Portfolio Item Four</a>
                                                </h2>
                                                <div class="post-text">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-1" class="post-1 post type-post">
                            <div class="post-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-left">
                                                <div class="index-thumb">
                                                    <a href="">
                                                        <img src="images/column-6.png">
                                                    </a>
                                                    <a href="" class="zoom-icon" rel="shadowbox"></a>
                                                    <a href="" class="link-icon" rel="shadowbox"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="entry-right">
                                                <h2>
                                                    <a href="">Portfolio Item Four</a>
                                                </h2>
                                                <div class="post-text">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim…</p>
                                                </div>
                                            </div>
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
</div>  
                            
                     
