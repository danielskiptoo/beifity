if(typeof Virtuemart==="undefined")
var Virtuemart={};jQuery(function($){Virtuemart.isUpdatingContent=false;Virtuemart.updateContent=function(url,callback){if(Virtuemart.isUpdatingContent)return false;Virtuemart.isUpdatingContent=true;urlSuf='tmpl=component&format=html';var glue='&';if(url.indexOf('&')==-1&&url.indexOf('?')==-1){glue='?';}
url+=glue+urlSuf;jQuery.ajax({url:url,dataType:'html',success:function(data){var el=$(data).find(Virtuemart.containerSelector);if(!el.length)el=$(data).filter(Virtuemart.containerSelector);if(el.length){Virtuemart.container.html(el.html());Virtuemart.updateCartListener();Virtuemart.updateDynamicUpdateListeners();if(Virtuemart.updateImageEventListeners)Virtuemart.updateImageEventListeners();if(Virtuemart.updateChosenDropdownLayout)Virtuemart.updateChosenDropdownLayout();}
Virtuemart.isUpdatingContent=false;if(callback&&typeof(callback)==="function"){callback();}}});Virtuemart.isUpdatingContent=false;}
Virtuemart.updateCartListener=function(){Virtuemart.product(jQuery(".product"));jQuery('body').trigger('updateVirtueMartProductDetail');}
Virtuemart.updL=function(event){event.preventDefault();var url=jQuery(this).attr('href');Virtuemart.setBrowserNewState(url);Virtuemart.updateContent(url);}
Virtuemart.upd=function(event){event.preventDefault();var url=jQuery(this).attr('url');if(typeof url===typeof undefined||url===false){url=jQuery(this).val();}
if(url!=null){url=url.replace(/amp;/g,'');Virtuemart.setBrowserNewState(url);Virtuemart.updateContent(url);}};Virtuemart.updForm=function(event){cartform=jQuery("#checkoutForm");carturl=cartform.attr('action');if(typeof carturl===typeof undefined||carturl===false){carturl=jQuery(this).attr('url');console.log('my form no action url, try attr url ',cartform);if(typeof carturl===typeof undefined||carturl===false){carturl='index.php?option=com_virtuemart&view=cart';console.log('my form no action url, try attr url ',carturl);}}
urlSuf='tmpl=component';carturlcmp=carturl;if(carturlcmp.indexOf(urlSuf)==-1){var glue='&';if(carturlcmp.indexOf('&')==-1&&carturlcmp.indexOf('?')==-1){glue='?';}
carturlcmp+=glue+urlSuf;}
cartform.submit(function(){jQuery(this).vm2front("startVmLoading");if(Virtuemart.isUpdatingContent)return false;Virtuemart.isUpdatingContent=true;jQuery.ajax({type:"POST",url:carturlcmp,dataType:"html",data:cartform.serialize(),success:function(datas){if(typeof window._klarnaCheckout!=="undefined"){window._klarnaCheckout(function(api){console.log(' updateSnippet suspend');api.suspend();});}
var el=jQuery(datas).find(Virtuemart.containerSelector);if(!el.length)el=jQuery(datas).filter(Virtuemart.containerSelector);if(el.length){Virtuemart.container.html(el.html());if(Virtuemart.updateImageEventListeners)Virtuemart.updateImageEventListeners();if(Virtuemart.updateChosenDropdownLayout)Virtuemart.updateChosenDropdownLayout();}
Virtuemart.setBrowserNewState(carturl);Virtuemart.isUpdatingContent=false;jQuery(this).vm2front("stopVmLoading");if(typeof window._klarnaCheckout!=="undefined"){window._klarnaCheckout(function(api){console.log(' updateSnippet suspend');api.resume();});}},error:function(datas){alert('Error updating cart');Virtuemart.isUpdatingContent=false;jQuery(this).vm2front("stopVmLoading");},statusCode:{404:function(){Virtuemart.isUpdatingContent=false;jQuery(this).vm2front("stopVmLoading");alert("page not found");}}});return false;});};Virtuemart.updFormS=function(event){Virtuemart.updForm();jQuery("#checkoutForm").submit();}
Virtuemart.updDynFormListeners=function(){jQuery('#checkoutForm').find('*[data-dynamic-update=1]').each(function(i,el){var nodeName=el.nodeName;el=jQuery(el);switch(nodeName){case'BUTTON':el[0].onchange=null;el.off('click',Virtuemart.updForm);el.on('click',Virtuemart.updForm);default:el[0].onchange=null;el.off('click',Virtuemart.updFormS);el.on('click',Virtuemart.updFormS);break;}});}
Virtuemart.updateDynamicUpdateListeners=function(){jQuery('*[data-dynamic-update=1]').each(function(i,el){var nodeName=el.nodeName;el=jQuery(el);switch(nodeName){case'A':el[0].onclick=null;el.off('click',Virtuemart.updL);el.on('click',Virtuemart.updL);break;default:el[0].onchange=null;el.off('change',Virtuemart.upd);el.on('change',Virtuemart.upd);}});}
var everPushedHistory=false;var everFiredPopstate=false;Virtuemart.setBrowserNewState=function(url){if(typeof window.onpopstate=="undefined")
return;var stateObj={url:url}
everPushedHistory=true;try{history.pushState(stateObj,"",url);}
catch(err){window.location.href=url;return false;}}
Virtuemart.browserStateChangeEvent=function(event){if(!everPushedHistory&&event.state==null&&!everFiredPopstate)
return;everFiredPopstate=true;var url;if(event.state==null){url=window.location.href;}else{url=event.state.url;}
Virtuemart.updateContent(url);}
window.onpopstate=Virtuemart.browserStateChangeEvent;});