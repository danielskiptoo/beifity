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

            <section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-page-title-wrapper"><div class="container">
                                    <div class="sp-page-title" style="background-image: url(http://demo.joomshaper.com/2016/megadeal-ii/images/demo/subheader.jpg);"><h2>Account History</h2>
                                    </div></div></div></div></div></div></section>

            <section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
                                </div>
                                <div id="cart-view" class="cart-view">
                                   
                                    <form method="post" id="checkoutForm" name="checkoutForm" action="">
                                      <div class="custom-box-shadow vm-fieldset-pricelist-wrapper table-responsive">
                                            
                                            <fieldset class="vm-fieldset-pricelist">
                                                <table class="cart-summary table" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <th class="vm-cart-item-name">#</th>
                                                        <th class="vm-cart-item-sku">Product Name</th>
                                                        <th class="vm-cart-item-basicprice">Date </th>
                                                        <th class="vm-cart-item-quantity">Quantity</th>
                                                       <th class="vm-cart-item-total">Price</th>
                                                       <th class="vm-cart-item-total">Reference No</th>
                                                    </tr>

                                                  
                                                 
                                                    <tr class="sectiontableentry1" style="vertical-align:top;">
                                                        <td align="right"><span class='priceColor2'></span> </td>
                                                        <td align="right"></td>
                                                        <td align="right"> </td>
                                                        <td align="right"> </td>
                                                        <td align="right"> </td>
                                                        <td class="text-center"><a href="#">CND25477Y</a></td>
                                                    </tr>
                                                    
                                                </table>
                                            </fieldset>
                                        </div>  
                                        <input type='hidden' name='order_language' value='en-GB'/>
                                        <input type='hidden' name='task' value='updatecart'/>
                                        <input type='hidden' name='option' value='com_virtuemart'/>
                                        <input type='hidden' name='view' value='cart'/>
                                    </form>
                                    
                                    
                                    
                                </div></div></div></div></div></section>


<?php require 'includes/footer.php'; ?>
<?php require 'includes/canvas_menu.php'; ?>
        </div>
<?php require_once 'includes/footers.php'; ?>
    </body>
</html>