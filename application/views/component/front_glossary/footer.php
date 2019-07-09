 <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8 col-sm-12 col-xs-5">
                <div class="row bottom_links">
                    <div class="col-md-4 col-sm-4">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/prices.php">Prices</a></li>
                            <li><a href="/order">Order custom essay</a></li>
                            <li><a href="/samples.php">Sample Essays</a></li>
                            <li><a href="/custom_term_paper.php">Custom term paper</a></li>
                            <li><a href="/affiliate.php/">Affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <ul>
                            <li><a href="/doc_essay.php">Custom essay</a></li>
                            <li><a href="/custom_research_paper.php">Research paper</a></li>
                            <li><a href="/write-my-essay.php">Write my essay</a></li>
                            <li><a href="/essay_writers.php">Essay writers</a></li>
                            <li><a href="/custom_writing.php">Writing Process</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <ul>
                            <li><a href="/customersupport.php">Contact us</a></li>
                            <li><a href="/glossary.php">Glossary</a></li>
                            <li><a href="/disclaimer.php">Terms and conditions</a></li>
                            <li><a href="/privacy_policy.php">Privacy policy</a></li>
                            <li><a href="/sitemap.php">Sitemap</a></li>
                            <li><a href="/custompaperfaq.php ">FAQ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row hidden-xs footer_contacts">
                    <div class="col-md-3 col-sm-3">
                       <h6>US Sales Toll-Free</h6>
                       <p>+1-888-533-4942</p>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h6>US Support Toll-Free</h6>
                        <p>+1-888-357-6549</p>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h6>UK Toll Free</h6>
                        <p>+44-808-189-1011</p>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h6>AU Toll Free</h6>
                        <p>+61-1-800-704995</p>
                    </div>
                </div>
            </div>
            <div class=" visible-xs col-xs-7 footer_contacts">
                <div class="col-md-3 col-sm-3">
                    <h6>US Sales Toll-Free</h6>
                    <p>1-888-533-4942</p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h6>US Support Toll-Free</h6>
                    <p>1-888-357-6549</p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h6>UK Toll Free</h6>
                    <p>+44-808-189-1011</p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h6>AU Toll Free</h6>
                    <p>+61-1-800-704995</p>
                </div>
            </div>
            <div class="payment_wrapper hidden-sm ">
                <div class="row payment_container">
                    <div class="left_part">
                        <a class="payment_1" href="javascript:void(0);"></a>
                        <a class="payment_2" href="javascript:void(0);"></a>
                        <a class="payment_3" href="javascript:void(0);"></a>
                        <a class="payment_4" href="javascript:void(0);"></a>
                        <a class="payment_5" href="javascript:void(0);"></a>
                    </div>
                    <div class="right_part">
                        <p>All payments are securely processed by</p>
                        <a href="https://www.securitymetrics.com/site_certificate.adp?s=bestessays%2ecom&i=1230177"></a>
                    </div>
                </div>
                
            </div>

        </div>
        <div class="row payment_container tablet_variant visible-sm">
            <div class="left_part">
                <a href="javascript:void(0);"></a>
                <a href="javascript:void(0);"></a>
                <a href="javascript:void(0);"></a>
                <a href="javascript:void(0);"></a>
                <a href="javascript:void(0);"></a>
                <!--<a href="javascript:void(0);"></a>-->
            </div>
            <div class="right_part">
                <a href="https://www.securitymetrics.com/site_certificate.adp?s=bestessays%2ecom&i=1230177">
                </a>
                <p>All payments are securely processed</p>
            </div>
        </div>
        <p class="hidden-xs"> 1997-<script>d = new Date();document.write(d.getFullYear());</script> "BestEssays.com"</p>
    </div>
</footer>
<section class="disclamer">
    <div class="disclamer_text"></div>
</section>


<script>
var banner = (function () {
    function removeClass(el,classNm) {
        var currClass = el.getAttribute('class');
        var classResult = currClass.replace(classNm,'');
        el.setAttribute('class',classResult);
    };
    function addClass(el,classNm) {
        el.setAttribute('class',el.className+' '+classNm);
    };
    function hasClass(el,classNm) {
        var currClass = el.getAttribute('class') || '';
        if (currClass.indexOf(classNm) != -1) {
            return true;
        } else {
            return false;
        }
    };
    function cookieExists(cookieName) {
        return (document.cookie.indexOf(cookieName) != -1) ? true : false;
    };
    function init(bannerUniqueID,buttonUniqueID,cookie) {
        var $banner = $(bannerUniqueID),
    $button = $(buttonUniqueID),
    $textAfter = $(buttonUniqueID + ' + h6');
if (cookieExists(cookie) === true) {
    $button.add($banner).removeClass('firstTime');
    $banner.attr({
        href: '/order/',
        onclick: "_gaq.push(['_trackEvent', 'Button', 'discount_banner_old_customers_new_design', '']);"
    });
    $button.attr({
        href: '/order/',
        onclick: "_gaq.push(['_trackEvent', 'Button', 'top_button_old_customers_new_design', '']);"
    });
    $button.html('REQUEST PAPER NOW');
    $textAfter.hide();
} else {
    $banner.addClass('firstTime');
    $banner.attr({
        href: '/order/?promo=begin15',
        onclick: "_gaq.push(['_trackEvent', 'Button', 'banner_15off_new_design', '']);"
    });
    $button.addClass('firstTime');
    $button.attr({
        href: '/order/?promo=begin15',
        onclick: "_gaq.push(['_trackEvent', 'Button', 'top_button_15off_new_design', '']);"
    });
    $button.html('Try service with <strong>15% discount*</strong>');
    $textAfter.show();
}
    };
    return {
        check : init
    }
}());
</script> <script>banner.check('#dynamicBanner','#dynamicLink','_hpo');	</script>

<div class="wrapper-email-popup">
<div class="shadow-wrapp"></div>
<div class="block-email-popup">
<div class="close-email-popup"><img src="/images/cls-but.jpg" alt="X"></div>
<div class="wrapper-form">
<form class="email-form" action="#" method="POST">
<div class="wrap-input-field">
<label for="name-user-email">Your name:</label>
<input id="name-user-email" type="text"><div class="error-message">Enter your name</div>
</div>
<div class="wrap-input-field">
<label for="email-user">Email:</label>
<input id="email-user" type="text"><div class="error-message">Enter valid email address</div>
</div>
<div class="wrap-input-field"><input id="send-email" value="Apply" type="button"></div>
</form>
</div>
<div class="thank-block">
<div class="title-thank">Thank you.</div><p>Our representatives will contact<br>you within 24 hours.</p>
</div>
</div>
</div>
    
          <!-- BoldChat Conversion Tracking HTML v5.10 (Website=www.bestessays.com,ConversionCode=test conversion code) -->
<script type="text/javascript">
    window._bcvma = window._bcvma || [];
    _bcvma.push(["setAccountID", "161178856198874968"]);
    _bcvma.push(["addConversion", {
      ConversionAmount: dataLayer[0].transactionTotal,
      ConversionRef: dataLayer[0].transactionId,
      ConversionInfo: "",
      WebsiteID: "1985431959216183439",
      ConversionCodeID: "3070130503748985491"
    }]);
  var bcLoad = function(){
    if(window.bcLoaded) return; window.bcLoaded = true;
    var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
    vms.src = ('https:'==document.location.protocol?'https://':'https://') + "vmss.boldchat.com/aid/161178856198874968/bc.vms4/vms.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
  };
  if(window.pageViewer && pageViewer.load) pageViewer.load();
  else bcLoad();</script>
<noscript>
<a href="https://www.boldchat.com" title="Live Chat Software" target="_blank"><img alt="Live Chat Software" src="https://vms.boldchat.com/aid/161178856198874968/bc.vci?wdid=1985431959216183439&ccid=3070130503748985491&ca=&cr=&ci=" border="0" width="1" height="1" /></a>
</noscript>
<!-- /BoldChat Conversion Tracking HTML v5.10 -->
    
          <style>
.bcFloat{
bottom:0!important;
right:0!important;
top:auto!important;
left:auto!important;
position:fixed!important;
}
</style>
<!-- BoldChat Visitor Monitor HTML v5.00 (Website=www.bestessays.com,ChatButton=Dev button float,ChatInvitation=MAIN RULE SET) -->
<script type="text/javascript">
  window._bcvma = window._bcvma || [];
  _bcvma.push(["setAccountID", "161178856198874968"]);
  _bcvma.push(["setParameter", "WebsiteID", "1985431959216183439"]);
  _bcvma.push(["setParameter", "VisitInfo", dataLayer[0].userId]);
  _bcvma.push(["setParameter", "InvitationID", "5014589077779556438"]);
  _bcvma.push(["addFloat", {type: "chat", id: "3771936857143385943"}]);
  _bcvma.push(["pageViewed"]);
  var bcLoad = function(){
    if(window.bcLoaded) return; window.bcLoaded = true;
    var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
    vms.src = ('https:'==document.location.protocol?'https://':'https://') + "vmss.boldchat.com/aid/161178856198874968/bc.vms4/vms.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
  };
  if(window.pageViewer && pageViewer.load) pageViewer.load();
  else if(document.readyState=="complete") bcLoad();
  else if(window.addEventListener) window.addEventListener('load', bcLoad, false);
  else window.attachEvent('onload', bcLoad);
</script>
<noscript>
<a href="https://www.boldchat.com" title="Live Chat Software" target="_blank"><img alt="Live Chat Software" src="https://vms.boldchat.com/aid/161178856198874968/bc.vmi?wdid=1985431959216183439&vi=userID&curl=" border="0" width="1" height="1" /></a>
</noscript>
<!-- /BoldChat Visitor Monitor HTML v5.00 -->
    
          <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTC9MMT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    
  <script src="//rum-static.pingdom.net/pa-59f072b5f3f14ae82c7b23c6.js" async></script><script src="/build/adaptive.263784e454a851df9e21.js" async></script>
<style>
.cookies {
  position: fixed;
  bottom: 0;
  z-index: 999999998;
  background: rgba(255, 255, 255, 0.85);
  width: 100%;
  color: #fff;
  text-align: center;
  display: none;
  left: 0;
  border-top: 1px solid #ddd;
  padding: 0 220px 0 20px;
  box-sizing: border-box;
}
#accept_cookie_window .cookies_text {
    margin: 10px auto;
    position: relative;
    color: #000;
    text-align: center;
    font-size: 12px;
    font-family: Arial, sans-serif;
    padding: 0;
    line-height: 1.3;
    box-sizing: border-box;
}
.cookies__close {
  cursor: pointer;
  display: inline-block;
  background: #C4D7ED;
  padding: 2px 4px;
  border-radius: 5px;
  margin-left: 10px;
}
.cookies__close:hover {
  background: #9bc3f1;
  color: #353535;
}
.bcFloat {
  z-index: 999999999 !important;
}
.cookies br {
  display: none;
}
@media all and (max-width: 1480px) {
  .cookies {
    padding: 0 0 0 20px;
  }
  #accept_cookie_window .cookies_text {
    padding-right: 200px;
  }
  .cookies .cookies-br__second {
    display: inline;
  }
}
@media all and (max-width: 1100px) {
  .cookies .cookies-br__first {
    display: inline;
  }
}
@media only screen and (max-device-width: 736px) {
  .cookies {
    padding: 0 120px 0 20px;
  }
  #accept_cookie_window .cookies_text {
    font-size: 11px;
    padding-right: 0;
  }
  .cookies .cookies-br__first,
  .cookies .cookies-br__second {
    display: none;
  }
}
</style>
<div id="accept_cookie_window" class="cookies">
            <p class="cookies_text">We use cookies to make sure you have the best experience on our website.<br class="cookies-br__first" />
                You can control what cookies are set on your device in your "cookies settings".<br class="cookies-br__second" />
                If you continue to use this site, you consent to our use of cookies.<span class="cookies__close" id="accept_cookie_window_close" onclick="acceptCookie()">Close</span></p>
                <script>
                document.addEventListener("DOMContentLoaded", function(event) {
                    setTimeout(function() {
                        if(window.jQuery) {
                            $(".cookies").fadeIn(300);
                        } else {
                            var element = document.getElementById("accept_cookie_window");
                            element.style.display = "block";
                        }
                    }, 3000);

                    if(window.jQuery) {
                        $(".cookies__close").click(function(){
                            $(".cookies").fadeOut(300);
                        });
                    } else {
                        var element = document.getElementById("accept_cookie_window_close");
                        element.onclick = function() {
                            var element = document.getElementById("accept_cookie_window");
                            element.style.display = "none";
                            acceptCookie();
                        };
                    }
                });
                    function acceptCookie() {
                        var date = new Date(new Date().getTime() + 7776000 * 1000);
                        document.cookie = "accept_cookie=true; path=/; expires=" + date.toUTCString();
                    }
                </script>
        </div>