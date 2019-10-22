<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-11">
	<div class="container">
		<div class="row">
				<div class="home-products ">
					<h2 class="widgettitle">RELATED PRODUCTS</h2>
					<ul class="products" style="list-style: none">
						<li class="product">
							<span class="onsale">Sale</span>
							<div class="product-thumb-wrap">
								<div class="product-thumb" >
									<a href="">
										<img  src="images/1-buy.jpeg"
											alt="7215050400_1_1_1" title="" srcset=""
											sizes="(max-width: 400px) 100vw, 400px"> 
									</a>
								</div>
								<a href="" rel="nofollow" class="button" >Add to cart</a>
							</div>
							<a href="" class="home-product-title">
								<h3>Printed Sequinned Blazer</h3>
								<div class="stars">
		                            <form action="">
		                                <input class="star star-5" id="star-5" type="radio" name="star"/>
		                                <label class="star star-5" for="star-5"></label>
		                                <input class="star star-4" id="star-4" type="radio" name="star"/>
		                                <label class="star star-4" for="star-4"></label>
		                                <input class="star star-3" id="star-3" type="radio" name="star"/>
		                                <label class="star star-3" for="star-3"></label>
		                                <input class="star star-2" id="star-2" type="radio" name="star"/>
		                                <label class="star star-2" for="star-2"></label>
		                                <input class="star star-1" id="star-1" type="radio" name="star"/>
		                                <label class="star star-1" for="star-1"></label>
		                            </form>   
		                        </div>
		                        <span class="price">
										<del><span class="amount">$249.00</span></del> 
										<ins><span class="amount">$199.00</span>
										</ins>
									</span>
								
							</a>

						</li> <!--  .product  -->	

						<li class="product">
							<div class="product-thumb-wrap">
								<div class="product-thumb">
									<a href="">
										<img  src="images/2-buy.jpeg"
											 alt="blazer_3"
											title="" srcset="" sizes="(max-width: 400px) 100vw, 400px"> 
									</a>
								</div>
								<a href="" rel="nofollow" data-product_id="" data-product_sku=""class="button" >Add to cart</a>
							</div>
							<a href="" class="home-product-title">
								<h3>James Dean T-Shirt</h3>
								<div class="stars">
                                  <form action="">
                                    <input class="star star-10" id="star-10" type="radio" name="star"/>
                                    <label class="star star-10" for="star-10"></label>
                                    <input class="star star-9" id="star-9" type="radio" name="star"/>
                                    <label class="star star-9" for="star-9"></label>
                                    <input class="star star-8" id="star-8" type="radio" name="star"/>
                                    <label class="star star-8" for="star-8"></label>
                                    <input class="star star-7" id="star-7" type="radio" name="star"/>
                                    <label class="star star-7" for="star-7"></label>
                                    <input class="star star-6" id="star-6" type="radio" name="star"/>
                                    <label class="star star-6" for="star-6"></label>
                                  </form>
                                </div>
								<span class="price">

									<span class="price"><span class="amount">$49.00</span></span>
								</span>
							</a>
						</li> <!--  .product  -->

						<li class="product last">
							<span class="onsale">Sale</span>
							<div class="product-thumb-wrap">
								<div class="product-thumb">
									<a href="">
										<img  src="images/3-buy.jpeg"
											
											alt="25113072400_1_1_1" title="" srcset=""
											sizes="(max-width: 400px) 100vw, 400px">

											 </a>
									<a href="" rel="nofollow" data-product_id=""
										data-product_sku="2314" class="button "
										>Add to cart</a>
								</div>
								
							</div>
							<a href="" class="home-product-title">
								<h3>Jacquard Pattern Blazer</h3>
								<div class="stars">
                                  <form action="">
                                    <input class="star star-5" id="star-11" type="radio" name="star"/>
                                    <label class="star star-5" for="star-11"></label>
                                    <input class="star star-4" id="star-12" type="radio" name="star"/>
                                    <label class="star star-4" for="star-12"></label>
                                    <input class="star star-3" id="star-13" type="radio" name="star"/>
                                    <label class="star star-3" for="star-13"></label>
                                    <input class="star star-2" id="star-14" type="radio" name="star"/>
                                    <label class="star star-2" for="star-14"></label>
                                    <input class="star star-1" id="star-15" type="radio" name="star"/>
                                    <label class="star star-1" for="star-15"></label>
                                  </form>
                                </div>
								<span class="price">
									<del>
										<span class="amount">$299.00</span>
									</del> 
									<ins>
										<span class="amount">$199.00</span>
									</ins>
								</span>
							</a>
						</li>

						<li class="product">
							<div class="product-thumb-wrap">
								<div class="product-thumb">
									<a href="">
										<img  src="images/4-buy.jpeg"
											alt="24119573401_1_1_1" title="" srcset=""
											sizes="(max-width: 400px) 100vw, 400px"> </a>
								</div>
								<a href="" rel="nofollow" data-product_id=""
										data-product_sku="4354" class="button "
										>Add to cart</a>
							</div>

							<a href="" class="home-product-title">
								<h3>Printed Trousers</h3>
								<div class="stars">
                                  <form action="">
                                    <input class="star star-5" id="star-111" type="radio" name="star"/>
                                    <label class="star star-5" for="star-111"></label>
                                    <input class="star star-4" id="star-17" type="radio" name="star"/>
                                    <label class="star star-4" for="star-17"></label>
                                    <input class="star star-3" id="star-18" type="radio" name="star"/>
                                    <label class="star star-3" for="star-18"></label>
                                    <input class="star star-2" id="star-19" type="radio" name="star"/>
                                    <label class="star star-2" for="star-19"></label>
                                    <input class="star star-1" id="star-20" type="radio" name="star"/>
                                    <label class="star star-1" for="star-20"></label>
                                  </form>
                                </div>
								<span class="price">
									<span class="amount">$149.00</span>
								</span>
							</a>
						</li> <!--  .product  -->
						<div class="clear"></div> <!--  .product  -->
					</ul>
				</div><!-- .home-products -->
		</div> <!--  end .row  -->
	</div> <!-- .container -->
</div>