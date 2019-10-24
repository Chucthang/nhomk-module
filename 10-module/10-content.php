<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
    <div class="container">
        <div class="tab">
            <button class="tablinks active">Description</button>
            <button class="tablinks">Review</button>
        </div>
        <div id="Description" class="tabcontent">
            <h2>Product Description</h2>
            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div id="Review" class="tabcontent">
            <h2>5 reviews for Snake Print Jeans</h2>
            <ul>
                <li itemprop="reviews" class="comment">
                    <img alt="JennyC" src="./images/1.jpeg" class="photo" height="60" width="60">
                    <div class="comment-text">
                        <div class="star-rating" title="Rated 5 out of 5">
                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                        </div>
                        <p class="meta">
                            <strong itemprop="author">JennyC</strong> – <time>June 9, 2012</time>:
                        </p>
                        <div itemprop="description" class="description">
                            <p>Amazing Jeans. They go with everything. Totally Recommend !</p>
                        </div>
                    </div>
                </li>
                <li itemprop="reviews" class="comment">
                    <img alt="JennyC" src="./images/1.jpeg" class="photo" height="60" width="60">
                    <div class="comment-text">
                        <div class="star-rating" title="Rated 5 out of 5">
                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                        </div>
                        <p class="meta">
                            <strong itemprop="author">JennyC</strong> – <time>June 9, 2012</time>:
                        </p>
                        <div itemprop="description" class="description">
                            <p>Amazing Jeans. They go with everything. Totally Recommend !</p>
                        </div>
                    </div>
                </li>
                <li itemprop="reviews" class="comment">
                    <img alt="JennyC" src="./images/1.jpeg" class="photo" height="60" width="60">
                    <div class="comment-text">
                        <div class="star-rating" title="Rated 5 out of 5">
                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                        </div>
                        <p class="meta">
                            <strong itemprop="author">JennyC</strong> – <time>June 9, 2012</time>:
                        </p>
                        <div itemprop="description" class="description">
                            <p>Amazing Jeans. They go with everything. Totally Recommend !</p>
                        </div>
                    </div>
                </li>
                <li itemprop="reviews" class="comment">
                    <img alt="JennyC" src="./images/1.jpeg" class="photo" height="60" width="60">
                    <div class="comment-text">
                        <div class="star-rating" title="Rated 5 out of 5">
                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                        </div>
                        <p class="meta">
                            <strong itemprop="author">JennyC</strong> – <time>June 9, 2012</time>:
                        </p>
                        <div itemprop="description" class="description">
                            <p>Amazing Jeans. They go with everything. Totally Recommend !</p>
                        </div>
                    </div>
                </li>
                <li itemprop="reviews" class="comment">
                    <img alt="JennyC" src="./images/1.jpeg" class="photo" height="60" width="60">
                    <div class="star-rating" title="Rated 5 out of 5">
                        <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                    </div>
                    <p class="meta">
                        <strong itemprop="author">JennyC</strong> – <time>June 9, 2012</time>:
                    </p>
                    <div itemprop="description" class="description">
                        <p>Amazing Jeans. They go with everything. Totally Recommend !</p>
                    </div>
                </li>
            </ul>
            <div id="commentbox">
                <div id="respond">
                    <h3 id="reply-title"><span>Add a review</span></h3>
                    <p class="stars"><span><a class="star-1">1</a><a class="star-2">2</a><a class="star-3">3</a><a class="star-4">4</a><a class="star-5">5</a></span></p><select name="rating" id="rating" style="display: none;">
                        <option value="">Rate…</option>
                        <option value="5">Perfect</option>
                        <option value="4">Good</option>
                        <option value="3">Average</option>
                        <option value="2">Not that bad</option>
                        <option value="1">Very Poor</option>
                    </select>
                    </p>
                    <form id="commentform" class="comment-form">
                        <p class="comment-form-comment"><label>Your review</label> <textarea id="comment" cols="45"
                                rows="8"></textarea></p>
                        <p><label>Name</span></label><input type="text" value="" size="30">
                        </p>
                        <p><label>Email</label><input id="email" name="email" type="text"
                                value="" size="30"></p>
                        <p><input name="submit" type="submit" class="submit" value="Submit"> <input
                                type="hidden">
                            <input type="hidden">
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>