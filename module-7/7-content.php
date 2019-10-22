<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7">
    <div class="container-fluid">
        <div class="row">
            <div id="footer" class="primary-color">
                <div id="footer-inside" class="container">
                    <div id="footer-widgets">
                        <div id="text-6" class="footer-widget widget_text column-5">
                            <h4 class="widget-title">Our Offers</h4>
                            <div class="widget-content">
                                <div class="textwidget">
                                    <ul>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Top sellers</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end .widget-content -->
                        </div> <!-- end .footer-widget -->
                        <div id="text-7" class="footer-widget widget_text column-5">
                            <h4 class="widget-title">Shipping info</h4>
                            <div class="widget-content">
                                <div class="textwidget">
                                    <ul>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Manufacturers</a></li>
                                        <li><a href="#">Suppliers</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">International</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end .widget-content -->
                        </div> <!-- end .footer-widget -->
                        <div id="text-8" class="footer-widget widget_text column-5">
                            <h4 class="widget-title">Useful Links</h4>
                            <div class="widget-content">
                                <div class="textwidget">
                                    <ul>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Top sellers</a></li>
                                        <li><a href="#">Suppliers</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end .widget-content -->
                        </div> <!-- end .footer-widget -->
                        <div id="text-9" class="footer-widget widget_text column-5">
                            <h4 class="widget-title">Contacts</h4>
                            <div class="widget-content">
                                <div class="textwidget">
                                    <ul>
                                        <li><a href="#">New products</a></li>
                                        <li><a href="#">Top sellers</a></li>
                                        <li><a href="#">Suppliers</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end .widget-content -->
                        </div> <!-- end .footer-widget -->
                        <div id="text-10" class="footer-widget widget_text column-5 last">
                            <h4 class="widget-title1">About this site</h4>
                            <div class="widget-content">
                                <div class="textwidget">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
                            </div> <!-- end .widget-content -->
                        </div>
                        <div class="clear"></div> <!-- end .footer-widget -->

                    </div> <!--  end #footer-widgets  -->

                </div> <!--  end #footer-inside  -->

                <div class="clear"></div>
                <span class="bottom-border"></span>
            </div>
            <!-- end #footer  -->
            <div id="bottom-info" class="container">
                <div id="copyright">
                    <a href="">Premium Wordpress Themes by NANGPHAM</a>
                </div>
                <div id="credit-card">
                    <div id="accepted">
                        <div class="visa"></div>
                        <div class="mastercard"></div>
                        <div class="amex"></div>
                        <div class="paypal"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>