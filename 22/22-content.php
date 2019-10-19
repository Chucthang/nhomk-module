<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-22">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <a class="home" href="#">Home</a><p> /  Portfolio 3 Column</p>
                </div>
                <div class="page-content">
                    <div class="head-line">
                        <h1 class="title">Portfolio 3 Column</h1>
                    </div>
                    <div class="content">
                      <div class="row"> 
                        <div class="col-md-4 article">
                         <div class="gallery-image-wrap">
                          <img src="//<?php echo $url_path ?>/images/1.jpeg"  alt="jpeglk-8">
                          <a href="//<?php echo $url_path ?>/images/1.jpeg" class="zoom-icon" rel="shadowbox" > 
                          </a>
                          <a href="#" class="link-icon" >
                          </a> 
                          <span class="image-count">3 Images</span>
                      </div>
                      <h2 class="gallery-title">
                        <a href="#">Portfolio Item Four
                        </a>
                    </h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim dsuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    
                    </p>
                </div>
                <div class="col-md-4 article">
                    <div class="gallery-image-wrap">
                        <img src="//<?php echo $url_path ?>/images/2.jpeg"  alt="jpeglk-8">
                        <a href="//<?php echo $url_path ?>/images/2.jpeg" class="zoom-icon" data-caption="Caption for single image"> 
                        </a>
                        <a href="#" class="link-icon" >
                        </a> 
                        <span class="image-count">3 Images</span>
                    </div>
                    <h2 class="gallery-title">
                        <a href="http://demo.ufothemes.com/titania/portfolio/portfolio-item-four/">Portfolio Item Four
                        </a>
                    </h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    
                    </p>
                </div>
                <div class="col-md-4 article">
                    <div class="gallery-image-wrap">
                      <img src="//<?php echo $url_path ?>/images/3.jpeg"  alt="jpeglk-8">
                      <a href="//<?php echo $url_path ?>/images/3.jpeg" class="zoom-icon" rel="shadowbox" > 
                      </a>
                      <a href="#" class="link-icon" >
                      </a> 
                      <span class="image-count">3 Images</span>
                  </div>
                  <h2 class="gallery-title">
                    <a href="http://demo.ufothemes.com/titania/portfolio/portfolio-item-four/">Portfolio Item Four
                    </a>
                </h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    
                </p>
            </div>
            <div class="col-md-4 article">
                <div class="gallery-image-wrap">
                  <img src="//<?php echo $url_path ?>/images/4.jpeg"  alt="jpeglk-8">
                  <a href="//<?php echo $url_path ?>/images/4.jpeg" class="zoom-icon" rel="shadowbox" > 
                  </a>
                  <a href="#" class="link-icon" >
                  </a> 
                  <span class="image-count">3 Images</span>
              </div>
              <h2 class="gallery-title">
                <a href="http://demo.ufothemes.com/titania/portfolio/portfolio-item-four/">Portfolio Item Four
                </a>
            </h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    
            </p>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>