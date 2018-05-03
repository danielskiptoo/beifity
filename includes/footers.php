<script src="assets/jui/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/jui/js/jquery-noconflict.js" type="text/javascript"></script>
<script src="assets/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/mod_sp_vmslider_ii/assets/js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="assets/mod_sp_vmslider_ii/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/mod_sp_vmslider_ii/assets/js/main.js" type="text/javascript"></script>
<script src="assets/com_virtuemart/assets/js/jquery-ui.min5c9f.js?vmver=9058" type="text/javascript"></script>
<script src="assets/com_virtuemart/assets/js/jquery.ui.autocomplete.html5c9f.js?vmver=9058" type="text/javascript"></script>
<script src="assets/com_virtuemart/assets/js/jquery.noconflict5c9f.js?vmver=9058" type="text/javascript" async="async"></script>
<script src="assets/com_virtuemart/assets/js/vmsite5c9f.js?vmver=9058" type="text/javascript"></script>
<script src="assets/com_virtuemart/assets/js/fancybox/jquery.fancybox-1.3.4.pack5c9f.js?vmver=9058" type="text/javascript" defer="defer"></script>
<script src="assets/com_virtuemart/assets/js/vmprices5c9f.js?vmver=9058" type="text/javascript" defer="defer"></script>
<script src="assets/com_virtuemart/assets/js/chosen.jquery.min5c9f.js?vmver=9058" type="text/javascript"></script>
<script src="assets/mod_sp_vmcountdown/assets/js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="assets/mod_sp_vmcountdown/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/mod_sp_vmcountdown/assets/js/main.js" type="text/javascript"></script>
<script src="assets/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
<script src="assets/shaper_megadeal_ii/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/com_virtuemart/assets/js/dynupdate5c9f.js?vmver=9058" type="text/javascript"></script>
<script src="assets/shaper_megadeal_ii/js/jquery.sticky.js" type="text/javascript"></script>
<script src="assets/shaper_megadeal_ii/js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="assets/shaper_megadeal_ii/js/main.js" type="text/javascript"></script>
<script src="assets/mod_virtuemart_cart/assets/js/update_cart5c9f.js?vmver=9058" type="text/javascript"></script>
<script src="assets/mod_sp_vmajaxsearch/assets/js/spvmajax-search.js" type="text/javascript"></script>



<script type="text/javascript">

    //<![CDATA[
    jQuery(document).ready(function () {
        jQuery('#VMmenu593_9855 li.VmClose ul').hide();
        jQuery('#VMmenu593_9855 li .VmArrowdown').click(
                function () {

                    if (jQuery(this).parent().next('ul').is(':hidden')) {
                        jQuery('#VMmenu593_9855 ul:visible').delay(500).slideUp(500, 'linear').parents('li').addClass('VmClose').removeClass('VmOpen');
                        jQuery(this).parent().next('ul').slideDown(500, 'linear');
                        jQuery(this).parents('li').addClass('VmOpen').removeClass('VmClose');
                    }
                });
    });
    //]]>
    
    window.setInterval(function () {
        var r;
        try {
            r = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP")
        } catch (e) {
        }
        if (r) {
            r.open("GET.html", "index86dd.php?option=com_ajax&amp;format=json", true);
            r.send(null)
        }
    }, 3600000);
</script>





<script id="jsVars_js" type="text/javascript">//<![CDATA[ 
    vmSiteurl = 'index.html';
    vmLang = "&lang=";
    vmLangTag = "";
    Itemid = '&Itemid=437';
    Virtuemart.addtocart_popup = '1';
    usefancy = true; //]]>
</script>
<script id="ready.vmprices_js" type="text/javascript">//<![CDATA[ 
    jQuery(document).ready(function ($) {
        Virtuemart.product(jQuery("form.product"));

        /*$("form.js-recalculate").each(function(){
         if ($(this).find(".product-fields").length && !$(this).find(".no-vm-bind").length) {
         var id= $(this).find('input[name="virtuemart_product_id[]"]').val();
         Virtuemart.setproducttype($(this),id);
         
         }
         });*/
    }); //]]>
</script>
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
    vmSiteurl = "index.html";

    jQuery(function ($) {
        $("#virtuemart_country_id").vm2front("list", {dest: "#virtuemart_state_id", ids: "", prefiks: ""});
    }); //]]>
</script>
<script id="vm.countryStateshipto__js" type="text/javascript">//<![CDATA[ 
    vmSiteurl = "index.html";

    jQuery(function ($) {
        $("#shipto_virtuemart_country_id").vm2front("list", {dest: "#shipto_virtuemart_state_id", ids: "", prefiks: "shipto_"});
    }); //]]>
</script>


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
    vmSiteurl = "index.html";

    jQuery(function ($) {
        $("#virtuemart_country_id").vm2front("list", {dest: "#virtuemart_state_id", ids: "", prefiks: ""});
    }); //]]>
</script>
<script id="vm.countryStateshipto__js" type="text/javascript">//<![CDATA[ 
    vmSiteurl = "index.html";

    jQuery(function ($) {
        $("#shipto_virtuemart_country_id").vm2front("list", {dest: "#shipto_virtuemart_state_id", ids: "", prefiks: "shipto_"});
    }); //]]>
</script>
<script id="jsVars_js" type="text/javascript">//<![CDATA[ 
    vmSiteurl = 'index.html';
    vmLang = "&lang=";
    vmLangTag = "";
    Itemid = '&Itemid=544';
    Virtuemart.addtocart_popup = '1';
    usefancy = true; //]]>
</script>
<script id="ready.vmprices_js" type="text/javascript">//<![CDATA[ 
    jQuery(document).ready(function ($) {
        Virtuemart.product(jQuery("form.product"));

        /*$("form.js-recalculate").each(function(){
         if ($(this).find(".product-fields").length && !$(this).find(".no-vm-bind").length) {
         var id= $(this).find('input[name="virtuemart_product_id[]"]').val();
         Virtuemart.setproducttype($(this),id);
                                                                             
         }
         });*/
    }); //]]>
</script>
<script id="vm.hover_js" type="text/javascript">//<![CDATA[ 
    jQuery(document).ready(function () {
        jQuery('.orderlistcontainer').hover(
                function () {
                    jQuery(this).find('.orderlist').stop().show()
                },
                function () {
                    jQuery(this).find('.orderlist').stop().hide()
                }
        )
    }); //]]>
</script>
<script id="popups_js" type="text/javascript">//<![CDATA[ 
    jQuery(document).ready(function ($) {

        jQuery('a.ask-a-question, a.printModal, a.recommened-to-friend, a.manuModal').click(function (event) {
            event.preventDefault();
            jQuery.fancybox({
                href: jQuery(this).attr('href'),
                type: 'iframe',
                height: 550
            });
        });

    }); //]]>
</script>
<script id="ajaxContent_js" type="text/javascript">//<![CDATA[ 
                                                                        Virtuemart.container = jQuery('.category-view');
                                                                        Virtuemart.containerSelector = '.category-view'; //]]>
</script>

