<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-12">
    <div class="mini-cart">
        <span class="hidecart-icon">Hide Cart</span>
        <div class="dropdown_widget dropdown_widget_cart" >
            <span class="hidden">Cart</span><div class="widget_shopping_cart_content">

                <ul class="cart_list product_list_widget ">
                    <li>
                        <a href="#">
                            <img width="138" height="138" src="//<?php echo $url_path ?>/images/cart-user.jpeg" alt="6855302802_1_1_1" sizes="(max-width: 138px) 100vw, 138px">Ripped Skinny Jeans                       
                        </a>
                        <span class="quantity">1 × <span class="amount">$169.00</span></span>      
                    </li>
                    <li>
                        <a href="#">
                            <img width="138" height="138" src="//<?php echo $url_path ?>/images/cart-user.jpeg" alt="6855302802_1_1_1" sizes="(max-width: 138px) 100vw, 138px">Ripped Skinny Jeans                       
                        </a>
                        <span class="quantity">1 × <span class="amount">$169.00</span></span>      
                    </li>



                </ul><!-- end product list -->


                    <p class="total"><strong>Subtotal:</strong> <span class="amount">$407.00</span></p>


                    <p class="buttons">
                        <a href="#" class=" wc-forward">View Cart</a>
                        <a href="#" class="wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>