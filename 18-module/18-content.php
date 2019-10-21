<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-18">
    <div class="module container">
        <div class="content">
            <div id="home">
                <a class="home">Home</a> / Page with Sidebar
            </div>
            <div id="head-line">
                <h1 class="title">Page with Sidebar</h1>
                <div class="subheader">page subtitle</div>
            </div>
            <div id="left">
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="commentbox">
                    <div id="respond">
                        <h3 id="reply-title"><span>Add Your Comment</span></h3>
                        <form id="commentform" class="comment-form">
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <p class="comment-form-comment"><label>Comment</label> <textarea id="comment" cols="45"
                                    rows="8"></textarea></p>
                            <p><label>Name<span class="required">*</span></label><input type="text" value="" size="30">
                            </p>
                            <p><label>Email<span class="required">*</span></label><input id="email" name="email"
                                    type="text" value="" size="30"></p>
                            <p><label>Website</label><input id="url" name="url" type="text" value="" size="30">
                            </p>
                            <p><input name="submit" type="submit" class="submit" value="Submit Comment"> <input
                                    type="hidden">
                                <input type="hidden">
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>