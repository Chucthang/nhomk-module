<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<section id="home-widgets" class="type-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="home-widget widget_text">
                    <div class="widget-content">
                        <h2 class="widgettitle">WIDGETIZED HOMEPAGE</h2>
                        <div class="textwidget">Drag and drop widgets onto your homepage. It's easy and fun to customize the look of your site. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor.</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
               <div class="home-widget widget_text">
                <div class="widget-content">
                    <h2 class="widgettitle">wordwide Shipping</h2>
                    <div class="textwidget">
                        <img src="//<?php echo $url_path ?>/images/1.png" alt="shipping">
                    </div>
                </div> 
            </div>
        </div> 
        <div class="col-md-4">
            <div class="home-widget widget_text last ">
                <div class="widget-content"><h2 class="widgettitle">30 day money back</h2>
                    <div class="textwidget">If you decide you're not satisfied within the first 30 days of your purchase, simply return your purchase within that time, as described below, request a refund under this limited guarantee and you'll receive a refund of your purchase price.</div>
                </div>
            </div> 
        </div>
        <div class="clear"></div>  
    </div>
</div>
</section>