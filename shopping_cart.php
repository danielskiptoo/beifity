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

            <section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title-wrapper"><div class="container"><div class="sp-page-title" style="background-image: url(http://demo.joomshaper.com/2016/megadeal-ii/images/demo/subheader.jpg);"><h2>Shopping Cart Summary</h2>
                                    </div></div></div></div></div></div></section>

            <section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
                                </div>
                                <div id="cart-view" class="cart-view">
                                   
                                    <form method="post" id="checkoutForm" name="checkoutForm" action="http://demo.joomshaper.com/2016/megadeal-ii/index.php/shop/shopping-cart">
                                      <div class="custom-box-shadow vm-fieldset-pricelist-wrapper table-responsive">
                                            
                                            <fieldset class="vm-fieldset-pricelist">
                                                <table class="cart-summary table" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <th class="vm-cart-item-name">#</th>
                                                        <th class="vm-cart-item-sku">Product Name</th>
                                                        <th class="vm-cart-item-basicprice">Price </th>
                                                        <th class="vm-cart-item-quantity">Quantity</th>
                                                       <th class="vm-cart-item-total">Total</th>
                                                       <th class="vm-cart-item-total"></th>
                                                    </tr>

                                                  
                                                 
                                                    <tr class="sectiontableentry1" style="vertical-align:top;">
                                                        <td align="right"><span class='priceColor2'></span> </td>
                                                        <td align="right"></td>
                                                        <td align="right"> </td>
                                                        <td align="right"> </td>
                                                        <td align="right"> </td>
                                                        <td class="text-center"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    <tr class="sectiontableentry2 vmtotal-amount">
                                                        <td colspan="4" align="right" class="amount-text">Total:</td>
                                                        <td align="right"> <span class='priceColor2'><div class="PricebillTaxAmount vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricebillTaxAmount">$0.0</span></div></span> </td>
                                                        <td align="right"> <span class='priceColor2'></span> </td>
                                                        
                                                    </tr>
                                                </table>
                                            </fieldset>
                                          <div class="row">
                                              <div class="col-sm-7">
                                                  <div class="image"><img src="./images/mpesa.png" alt="lipa na mpsesa" height="10" width="150"/></div>
                                              <h3>Procedure</h3>
                                              <ol>
                                                  <li>Go to Mpesa menu and choose 'Pay Bill'</li>
                                                  <li>Key in the Paybill number which is 423655</li>
                                                  <li>Enter amount and click ok</li>
                                                  <li>Key in your M-Pesa PIN</li>
                                                   <li>Wait for Confirmation code and enter it in the field below and click check out</li>
                                              </ol>
                                              </div>
                                              <div class="col-sm-5">
                                                  <h3 style="margin-top:20%;">Enter the Confirmation Code here&nbsp;<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
                                                          <div class="search">
                                                            
                                                               <div class="form-group">
                                                        <label for="confirmation-code"></label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter confirmation code ">
                                                        
                                                      </div>
                                                      </div>
                                              </div>
                                          </div>
                                          
                                          <div class="row">
                                             
                                              <button type="submit" id="checkoutFormSubmit" name="checkout" value="1" class="vm-button-correct" data-dynamic-update="1"><span>Check Out Now</span> </button>
                                          </div>
                                         </div>  
                                        <input type='hidden' name='order_language' value='en-GB'/>
                                        <input type='hidden' name='task' value='updatecart'/>
                                        <input type='hidden' name='option' value='com_virtuemart'/>
                                        <input type='hidden' name='view' value='cart'/>
                                    </form>
                                    <script id="updateChosen_js" type="text/javascript">//<![CDATA[ 
                                        if (typeof Virtuemart === "undefined")
                                            var Virtuemart = {};
                                        Virtuemart.updateChosenDropdownLayout = function () {
                                            var vm2string = {editImage: 'edit image', select_all_text: 'Select all', select_some_options_text: 'Available for all'};
                                            jQuery(".vm-chzn-select").each(function () {
                                                var swidth = jQuery(this).css("width") + 10;
                                                jQuery(this).chosen({enable_select_all: true, select_all_text: vm2string.select_all_text, select_some_options_text: vm2string.select_some_options_text, disable_search_threshold: 5, width: swidth});
                                            });
                                        }
                                        Virtuemart.updateChosenDropdownLayout(); //]]>
                                    </script>
                                    <script id="vm.countryState_js" type="text/javascript">//<![CDATA[ 
                                        vmSiteurl = "http://demo.joomshaper.com/2016/megadeal-ii/";

                                        jQuery(function ($) {
                                            $("#virtuemart_country_id").vm2front("list", {dest: "#virtuemart_state_id", ids: "", prefiks: ""});
                                        }); //]]>
                                    </script>
                                    <script id="vm.countryStateshipto__js" type="text/javascript">//<![CDATA[ 
                                        vmSiteurl = "http://demo.joomshaper.com/2016/megadeal-ii/";

                                        jQuery(function ($) {
                                            $("#shipto_virtuemart_country_id").vm2front("list", {dest: "#shipto_virtuemart_state_id", ids: "", prefiks: "shipto_"});
                                        }); //]]>
                                    </script>
                                    <script id="box_js" type="text/javascript">//<![CDATA[ 
                                        jQuery(document).ready(function ($) {
                                            jQuery('div#full-tos').hide();
                                            var con = $('div#full-tos').html();
                                            jQuery('a#terms-of-service').click(function (event) {
                                                event.preventDefault();
                                                jQuery.fancybox({div: '#full-tos', content: con});
                                            });
                                        }); //]]>
                                    </script>
                                    <script id="updDynamicListeners_js" type="text/javascript">//<![CDATA[ 
                                        if (typeof Virtuemart.containerSelector === 'undefined')
                                            Virtuemart.containerSelector = '#cart-view';
                                        if (typeof Virtuemart.container === 'undefined')
                                            Virtuemart.container = jQuery(Virtuemart.containerSelector);

                                        jQuery(document).ready(function () {
                                            if (Virtuemart.container)
                                                Virtuemart.updDynFormListeners();
                                        }); //]]>
                                    </script>
                                    <script id="vm.checkoutFormSubmit_js" type="text/javascript">//<![CDATA[ 
                                        Virtuemart.bCheckoutButton = function (e) {
                                            e.preventDefault();
                                            jQuery(this).vm2front('startVmLoading');
                                            jQuery(this).attr('disabled', 'true');
                                            jQuery(this).removeClass('vm-button-correct');
                                            jQuery(this).addClass('vm-button');
                                            jQuery(this).fadeIn(400);
                                            var name = jQuery(this).attr('name');
                                            var div = '<input name="' + name + '" value="1" type="hidden">';

                                            jQuery('#checkoutForm').append(div);
                                            //Virtuemart.updForm();
                                            jQuery('#checkoutForm').submit();
                                        }
                                        jQuery(document).ready(function ($) {
                                            jQuery(this).vm2front('stopVmLoading');
                                            var el = jQuery('#checkoutFormSubmit');
                                            el.unbind('click dblclick');
                                            el.on('click dblclick', Virtuemart.bCheckoutButton);
                                        }); //]]>
                                    </script>
                                    <script id="autocheck_js" type="text/javascript">//<![CDATA[ 
                                        jQuery(document).ready(function () {

                                            jQuery(".output-shipto").find(":radio").change(function () {
                                                var form = jQuery("#checkoutFormSubmit");
                                                form.attr("task", "checkout");
                                                Virtuemart.updForm();
                                                form.submit();
                                            });

                                            jQuery("#checkoutForm").change(function () {

                                                jQuery("#checkoutFormSubmit").attr("name", "checkout");
                                                jQuery("#checkoutFormSubmit").html("<span>Check Out Now</span>");
                                            });
                                            jQuery(".required").change(function () {
                                                var count = 0;
                                                var hit = 0;
                                                jQuery.each(jQuery(".required"), function (key, value) {
                                                    count++;
                                                    if (jQuery(this).attr("checked")) {
                                                        hit++;
                                                    }
                                                });
                                                if (count == hit) {
                                                    var form = jQuery("#checkoutFormSubmit");
                                                    form.attr("task", "checkout");

                                                    Virtuemart.updForm();
                                                    form.submit();
                                                }
                                            });

                                        }); //]]>
                                    </script>
                                </div></div></div></div></div></section>


<?php require 'includes/footer.php'; ?>
<?php require 'includes/canvas_menu.php'; ?>
        </div>
<?php require_once 'includes/footers.php'; ?>
    </body>
</html>