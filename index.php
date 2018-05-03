
<?php
session_start();
$webpath = $_SERVER['DOCUMENT_ROOT'] . "/beiFity/";
include_once $webpath . "products/products.php";
$_SESSION['counter'] = 0;
$_SESSION['total_cost'] = 0;

$products = new Products();
?>

<!DOCTYPE html>
<html xml:lang="en-gb" lang="en-gb" dir="ltr">

    <head>
        <?php require_once 'includes/headers.php'; ?>
        <title>Home</title>
    </head>
    <body class="site com-sppagebuilder view-page no-layout no-task itemid-437 en-gb ltr  sticky-header layout-fluid">
        <div class="body-innerwrapper">
            <?php require_once 'includes/menu.php'; ?>
            <?php require_once 'includes/header.php'; ?>

            <section id="sp-page-title">
                <div class="row">
                    <div id="sp-title" class="col-sm-12 col-md-12">
                        <div class="sp-column ">

                        </div>

                    </div>

                </div>
            </section>


            <section id="sp-main-body">
                <div class="row">
                    <div id="sp-component" class="col-sm-12 col-md-12">
                        <div class="sp-column ">
                            <div id="system-message-container"></div>
                            <div id="sp-page-builder" class="sp-page-builder  page-1">
                                <div class="page-content">

                                    <section class="sppb-section no-shadow" style="padding:30px 0 40px 0;">
                                        <div class="sppb-container">
                                            <div class="sppb-row">
                                                <div class="sppb-col-sm-12">
                                                    <div class="sppb-addon-container" style="">
                                                        <div class="sppb-addon sppb-addon-module ">
                                                            <div class="sppb-addon-content">
                                                                <div class="sp-module ">
                                                                    <div class="sp-module-content">
                                                                        <div id="sp-vmcountdown-125" class="sp-vmcountdown ">
                                                                            <div class="sp-vmcountdown-wrapper">
                                                                                <div class="row-fluid">
                                                                                    <div class="sp-vmcountdown-slide owl-carousel">
                                                                                        <div class="item">
                                                                                            <div class="sp-vmcountdown-image col-sm-7">
                                                                                                <img src="images/stories/virtuemart/product/slider5.jpg" alt="" class="ProductImage"/> 
                                                                                            </div>
                                                                                            <div class="sp-vmcountdown-info col-sm-5">
                                                                                                <h1 class="sp-item-title">
                                                                                                    <a href="#">MacBook Pro</a></h1>
                                                                                                <div class="sp-price-box">
                                                                                                    <ins>
                                                                                                        <div class="PricesalesPrice vm-display vm-price-value">
                                                                                                            <span class="PricesalesPrice">$750.0</span>
                                                                                                        </div>
                                                                                                    </ins>
                                                                                                    <del>
                                                                                                        <div class="PricecostPrice vm-display vm-price-value">
                                                                                                            <span class="PricecostPrice">$800.0</span>
                                                                                                        </div>
                                                                                                    </del>
                                                                                                </div>
                                                                                                <div class="spvmcountdown-btn-group">
                                                                                                    <form method="post" class="product" action="#">
                                                                                                        <input type="hidden" class="quantity-input" name="quantity[]" value="1"/>
                                                                                                        <input type="submit" name="addtocart" class="addtocart-button btn btn-primary" value="Add to Cart" title="Add to Cart">
                                                                                                        <input type="hidden" class="pname" value="MacBook Pro"/>
                                                                                                        <input type="hidden" name="option" value="com_virtuemart"/>
                                                                                                        <input type="hidden" name="view" value="cart"/>
                                                                                                        <noscript><input type="hidden" name="task" value="add"/></noscript>
                                                                                                        <input type="hidden" name="virtuemart_product_id[]" value="2"/>
                                                                                                        <input type="hidden" name="virtuemart_category_id[]" value="1"/>
                                                                                                    </form>
                                                                                                    <a href="index.php/shop/electronics/mac-book-pro-detail.html" class="btn btn-border">Details </a>
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="item">
                                                                                            <div class="sp-vmcountdown-image col-sm-7">
                                                                                                <img src="images/stories/virtuemart/product/headphone21.jpg" alt="" class="ProductImage"/> 
                                                                                            </div>
                                                                                            <div class="sp-vmcountdown-info col-sm-5">
                                                                                                <h1 class="sp-item-title">
                                                                                                    <a href="#">HeadPhones</a></h1>
                                                                                                <div class="sp-price-box">
                                                                                                    <ins>
                                                                                                        <div class="PricesalesPrice vm-display vm-price-value">
                                                                                                            <span class="PricesalesPrice">$350.0</span>
                                                                                                        </div>
                                                                                                    </ins>
                                                                                                    <del>
                                                                                                        <div class="PricecostPrice vm-display vm-price-value">
                                                                                                            <span class="PricecostPrice">$500.0</span>
                                                                                                        </div>
                                                                                                    </del>
                                                                                                </div>
                                                                                                <div class="spvmcountdown-btn-group">
                                                                                                    <form method="post" class="product" action="#">
                                                                                                        <input type="hidden" class="quantity-input" name="quantity[]" value="1"/>
                                                                                                        <input type="submit" name="addtocart" class="addtocart-button btn btn-primary" value="Add to Cart" title="Add to Cart">
                                                                                                        <input type="hidden" class="pname" value="MacBook Pro"/>
                                                                                                        <input type="hidden" name="option" value="com_virtuemart"/>
                                                                                                        <input type="hidden" name="view" value="cart"/>
                                                                                                        <noscript><input type="hidden" name="task" value="add"/></noscript>
                                                                                                        <input type="hidden" name="virtuemart_product_id[]" value="2"/>
                                                                                                        <input type="hidden" name="virtuemart_category_id[]" value="1"/>
                                                                                                    </form>
                                                                                                    <a href="index.php/shop/electronics/mac-book-pro-detail.html" class="btn btn-border">Details </a>
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>  
                                                                                </div>  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>



                                    <section class="sppb-section megadeal-main-wrapper" style="margin:0px;">
                                        <div class="sppb-container">
                                            <div class="sppb-row">
                                                <div class="sppb-col-sm-12">
                                                    <div class="sppb-addon-container" style="">
                                                        <section class="sppb-section home-category-slider" style="">
                                                            <div class="sppb-container-inner">
                                                                <div class="sppb-row">
                                                                    <div class="sppb-col-sm-12">
                                                                        <div class="sppb-addon-container" style="">


                                                                            <div class="sppb-empty-space  clearfix" style="margin-bottom:50px;"></div>

                                                                            <div class="sppb-addon sppb-addon-module ">
                                                                                <div class="sppb-addon-content">
                                                                                    <h3 class="sppb-addon-title" style="">Resent Products</h3>
                                                                                    <div id="sp-vmslider-ii-124" class="sp-vmslider-ii layout-default ">
                                                                                        <div class="sp-vmslider-wrapper">
                                                                                            <div id="sp-vmslider-ii-slide124" class="sp-vmslider-ii-slide carousel slide" data-ride="spvmslider-carousel">

                                                                                                <?php
                                                                                                $counter = 9;
                                                                                                $test = 0;
                                                                                                foreach ($products->selectAllProducts() as $products) {
                                                                                                    $test = $test + 1;
                                                                                                    echo '<div class="item sp-vmproduct-wrapper">
                                                                                                            <div class="sp-vmproduct-image">
                                                                                                                <img src="' . $products->photo_1 . '" alt="xbox1" class="ProductImage"/> 
                                                                                                                    <div class="vmproduct-more-action">
                                                                                                                    <ul>
                                                                                                                        <li><a href="#"><i class="megadeal-icon-eye"></i></a></li>
                                                                                                                    </ul>
                                                                                                                </div>  
                                                                                                            </div>  
                                                                                                            <div class="sp-vmproduct-info">
                                                                                                                <h3 class="sp-item-title"><a href="#">' . $products->productname . '</a></h3>
                                                                                                                <div class="sp-price-box">
                                                                                                                    <ins>
                                                                                                                        <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">Ksh' . $products->price . '</span></div> </ins>
                                                                                                                    <del>
                                                                                                                        <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">Ksh' . $products->marketPrice . '</span></div> </del>
                                                                                                                </div>  
                                                                                                                <form method="post" class="product" action="#">
                                                                                                                    <button type="button" name="addtocart" onclick="addToCart(1)" class="submit-link addtocart-button btn btn-gray" value="Add to Cart">Add to Cart</button>
                                                                                                                </form>
                                                                                                            </div>  
                                                                                                        </div>';
                                                                                                    if ($test == $counter) {
                                                                                                        break;
                                                                                                    }
                                                                                                }
                                                                                                ?>

                                                                                            </div>  
                                                                                        </div>  
                                                                                    </div>  
                                                                                </div>
                                                                            </div>

                                                                            <div class="sppb-empty-space  clearfix" style="margin-bottom:50px;"></div>

                                                                            <!--                                                                            <div class="sppb-addon sppb-addon-single-image sppb-text-center  no-shadow">
                                                                                                                                                            <div class="sppb-addon-content">
                                                                                                                                                                <a target="" href="javascript:void(0)">
                                                                                                                                                                    <img class="sppb-img-responsive" src="images/2016/01/29/home-add.jpg" alt="">
                                                                                                                                                                </a>
                                                                                                                                                            </div>
                                                                                                                                                        </div>-->

                                                                            <div class="sppb-empty-space  clearfix" style="margin-bottom:50px;"></div>

                                                                            <div class="sppb-addon sppb-addon-module home-category-slider-layout-2">
                                                                                <div class="sppb-addon-content">
                                                                                    <h3 class="sppb-addon-title" style="">Gaming Console</h3>
                                                                                    <div id="sp-vmslider-ii-127" class="sp-vmslider-ii layout-leadinglayout ">
                                                                                        <div class="sp-vmslider-wrapper">
                                                                                            <div id="sp-vmslider-ii-slide127" class="sp-vmslider-ii-slide-layout-2 carousel slide" data-ride="spvmslider-carousel">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 leading-item">
                                                                                                        <div class="sp-vmproduct-image ">
                                                                                                            <img src="images/envy.jpg" alt="havit1" class="ProductImage"/> </div>  
                                                                                                        <div class="sp-vmproduct-info ">
                                                                                                            <a href="index.php/shop/electronics/havit-headphone-detail.html">HP ENVY 15</a>
                                                                                                            <div class="sp-price-box">
                                                                                                                <ins>
                                                                                                                    <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$550.0</span></div> </ins>
                                                                                                                <del>
                                                                                                                    <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$600.0</span></div> </del>
                                                                                                                8% Discount <div class="sp-vmslider-countdown" data-countdown="2038-02-28"></div>
                                                                                                            </div>  
                                                                                                            <form method="post" class="product" action="http://demo.joomshaper.com/2016/megadeal-ii/index.php">
                                                                                                                <input type="hidden" class="quantity-input" name="quantity[]" value="1"/>
                                                                                                                <button type="submit" name="addtocart" class="addtocart-button btn btn-gray" value="Add to Cart">Add to Cart</button>
                                                                                                                <input type="hidden" class="pname" value="Havit Headphone"/>
                                                                                                                <input type="hidden" name="option" value="com_virtuemart"/>
                                                                                                                <input type="hidden" name="view" value="cart"/>
                                                                                                                <noscript><input type="hidden" name="task" value="add"/></noscript>
                                                                                                                <input type="hidden" name="virtuemart_product_id[]" value="14"/>
                                                                                                                <input type="hidden" name="virtuemart_category_id[]" value="1"/>
                                                                                                            </form>
                                                                                                        </div>  
                                                                                                    </div>  
                                                                                                    <div class="col-sm-4 subleading-items">
                                                                                                        <div class="subleading-item">
                                                                                                            <div class="sp-vmproduct-image pull-left">
                                                                                                                <img src="images/stories/virtuemart/product/resized/slider1_480x340.jpg" alt="slider1" class="ProductImage"/> </div>  
                                                                                                            <div class="sp-vmproduct-info pull-left">
                                                                                                                <a href="index.php/shop/electronics/bits-wireless-headphone-detail.html">Bits Headphone</a>
                                                                                                                <div class="sp-price-box">
                                                                                                                    <ins>
                                                                                                                        <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$60.0</span></div> </ins>
                                                                                                                    <del>
                                                                                                                        <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$65.0</span></div> </del>
                                                                                                                </div>  
                                                                                                            </div>  
                                                                                                        </div>  
                                                                                                        <div class="subleading-item">
                                                                                                            <div class="sp-vmproduct-image pull-left">
                                                                                                                <img src="images/stories/virtuemart/product/resized/slider3_480x340.jpg" alt="slider3" class="ProductImage"/> </div>  
                                                                                                            <div class="sp-vmproduct-info pull-left">
                                                                                                                <a href="index.php/shop/watches/rado-watch-detail.html">Rado Watch</a>
                                                                                                                <div class="sp-price-box">
                                                                                                                    <ins>
                                                                                                                        <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$70.0</span></div> </ins>
                                                                                                                    <del>
                                                                                                                        <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$75.0</span></div> </del>
                                                                                                                </div>  
                                                                                                            </div>  
                                                                                                        </div>  
                                                                                                        <div class="subleading-item">
                                                                                                            <div class="sp-vmproduct-image pull-left">
                                                                                                                <img src="images/stories/virtuemart/product/resized/macbookpro1_480x340.jpg" alt="macbookpro1" class="ProductImage"/> </div>  
                                                                                                            <div class="sp-vmproduct-info pull-left">
                                                                                                                <a href="index.php/shop/electronics/macbook-pro-detail.html">Macbook Pro</a>
                                                                                                                <div class="sp-price-box">
                                                                                                                    <ins>
                                                                                                                        <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$1,450.0</span></div> </ins>
                                                                                                                    <del>
                                                                                                                        <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$1,500.0</span></div> </del>
                                                                                                                </div>  
                                                                                                            </div>  
                                                                                                        </div>  
                                                                                                    </div>  
                                                                                                </div>  
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8 leading-item">
                                                                                                        <div class="sp-vmproduct-image ">
                                                                                                            <img src="images/omen.jpg" alt="slider5" class="ProductImage"/> </div>  
                                                                                                        <div class="sp-vmproduct-info ">
                                                                                                            <a href="index.php/shop/products-details.html">OMEN</a>
                                                                                                            <div class="sp-price-box">
                                                                                                                <ins>
                                                                                                                    <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$690.0</span></div> </ins>
                                                                                                                <del>
                                                                                                                    <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$720.0</span></div> </del>
                                                                                                                4% Discount <div class="sp-vmslider-countdown" data-countdown="2018-01-27"></div>
                                                                                                            </div>  
                                                                                                            <form method="post" class="product" action="http://demo.joomshaper.com/2016/megadeal-ii/index.php">
                                                                                                                <input type="hidden" class="quantity-input" name="quantity[]" value="1"/>
                                                                                                                <button type="submit" name="addtocart" class="addtocart-button btn btn-gray" value="Add to Cart">Add to Cart</button>
                                                                                                                <input type="hidden" class="pname" value="Surface Pro 4"/>
                                                                                                                <input type="hidden" name="option" value="com_virtuemart"/>
                                                                                                                <input type="hidden" name="view" value="cart"/>
                                                                                                                <noscript><input type="hidden" name="task" value="add"/></noscript>
                                                                                                                <input type="hidden" name="virtuemart_product_id[]" value="8"/>
                                                                                                                <input type="hidden" name="virtuemart_category_id[]" value="1"/>
                                                                                                            </form>
                                                                                                        </div>  
                                                                                                    </div>  
                                                                                                    <div class="col-sm-4 subleading-items">
                                                                                                        <div class="subleading-item">
                                                                                                            <div class="sp-vmproduct-image pull-left">
                                                                                                                <img src="images/stories/virtuemart/product/resized/product-5_480x340.jpg" alt="product-5" class="ProductImage"/> </div>  
                                                                                                            <div class="sp-vmproduct-info pull-left">
                                                                                                                <a href="index.php/shop/electronics/mac-book-retian-detail.html">MacBook Retina</a>
                                                                                                                <div class="sp-price-box">
                                                                                                                    <ins>
                                                                                                                        <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$80.0</span></div> </ins>
                                                                                                                    <del>
                                                                                                                        <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$89.0</span></div> </del>
                                                                                                                </div>  
                                                                                                            </div>  
                                                                                                        </div>  
                                                                                                        <div class="subleading-item">
                                                                                                            <div class="sp-vmproduct-image pull-left">
                                                                                                                <img src="images/stories/virtuemart/product/resized/watch1_480x340.jpg" alt="watch1" class="ProductImage"/> </div>  
                                                                                                            <div class="sp-vmproduct-info pull-left">
                                                                                                                <a href="index.php/shop/electronics/watch-detail.html">Watch</a>
                                                                                                                <div class="sp-price-box">
                                                                                                                    <ins>
                                                                                                                        <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$280.0</span></div> </ins>
                                                                                                                    <del>
                                                                                                                        <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$300.0</span></div> </del>
                                                                                                                </div>  
                                                                                                            </div>  
                                                                                                        </div>  
                                                                                                        <div class="subleading-item">
                                                                                                            <div class="sp-vmproduct-image pull-left">
                                                                                                                <img src="images/stories/virtuemart/product/resized/slider5_480x340.jpg" alt="slider5" class="ProductImage"/> </div>  
                                                                                                            <div class="sp-vmproduct-info pull-left">
                                                                                                                <a href="index.php/shop/electronics/mac-book-pro-detail.html">MacBook Pro</a>
                                                                                                                <div class="sp-price-box">
                                                                                                                    <ins>
                                                                                                                        <div class="PricesalesPrice vm-display vm-price-value"><span class="PricesalesPrice">$750.0</span></div> </ins>
                                                                                                                    <del>
                                                                                                                        <div class="PricecostPrice vm-display vm-price-value"><span class="PricecostPrice">$800.0</span></div> </del>
                                                                                                                </div>  
                                                                                                            </div>  
                                                                                                        </div>  
                                                                                                    </div>  
                                                                                                </div>  
                                                                                            </div>  
                                                                                        </div>  
                                                                                    </div>  
                                                                                </div>
                                                                            </div>
                                                                            <div class="sppb-empty-space  clearfix" style="margin-bottom:50px;"></div>

                                                                            <div class="sppb-empty-space  clearfix" style="margin-bottom:50px;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </section>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                    <section class="sppb-section no-shadow" style="padding:55px 0 0;">
                                        <div class="sppb-container" >
                                            <div class="sppb-row">
                                                <div class="sppb-col-sm-12">
                                                    <div class="sppb-addon-container" style="">
                                                        <div class="sppb-addon sppb-addon-module ">
                                                            <div class="sppb-addon-content">
                                                                <div class="bannergroup">

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <?php require 'includes/footer.php'; ?>
            <?php require 'includes/canvas_menu.php'; ?>
        </div>

        <?php require_once 'includes/footers.php'; ?>
        <script type="text/javascript">
            function addToCart(product_id) {
                jQuery('.submit-link').addClass('disabled');
                //var notice = new PNotify(options_1);
                jQuery.ajax({
                    type: 'POST',
                    url: 'products/addToCart.php?product_id=' + product_id,
                    success: function (json) {

                        var message = jQuery.parseJSON(json).message;
                        jQuery('#counter').html(message.counter);
                        jQuery('#total_cost').html(message.total_cost+".00");
                        jQuery('.submit-link').removeClass('disabled');

                    },
                    error: function (xhr, desc, err) {

//                options.title = 'Error!!!';
//                options.type = 'error';
//                options.text = 'A network error occured. Please consult your network administrator.';
//                notice.update(options);
                        jQuery('.submit-link').removeClass('disabled');

                    }
                });
            }
        </script>


    </body>
</html>