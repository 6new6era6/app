<?php 
$_SESSION['title_name'] = $_GET['title_name'];
$_SESSION['utm_campaign'] = $_GET['utm_campaign'];
$_SESSION['click_id'] = $_GET['external_id'];
$_SESSION['fbclid'] = $_GET['fbclid'];
$_SESSION['external_id'] = $_GET['external_id'];
$_SESSION['utm_source'] = $_GET['utm_source'];
$_SESSION['utm_placement'] = $_GET['utm_placement'];
$_SESSION['campaign_id'] = $_GET['campaign_id'];
$_SESSION['adset_id'] = $_GET['adset_id'];
$_SESSION['adset_name'] = $_GET['adset_name'];
$_SESSION['ad_name'] = $_GET['ad_name'];
$_SESSION['mbr'] = $_GET['mbr'];
$_SESSION['pixel'] = $_GET['pixel'];

?>
<!DOCTYPE html>
<html>
<head>
    <!-- MAIN HEAD -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/swiper-bundle.min.css">
<link rel="stylesheet" href="css/styles.css">
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
  <title>Loading</title>
  <style>
        .preloader {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
        }
    </style>
<!-- Mgid Sensor -->
<script type="text/javascript">
    (function() {
        var d = document, w = window;
        w.MgSensorData = w.MgSensorData || [];
        w.MgSensorData.push({
            cid:877087,
            lng:"us",
            project: "a.mgid.com"
        });
        var l = "a.mgid.com";
        var n = d.getElementsByTagName("script")[0];
        var s = d.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var dt = !Date.now?new Date().valueOf():Date.now();
        s.src = "https://" + l + "/mgsensor.js?d=" + dt;
        n.parentNode.insertBefore(s, n);
    })();
</script>
<!-- /Mgid Sensor -->
<script>
   (window._mgq = window._mgq || []).push(["MgSensorInvoke", "install"])
 </script>
<!-- Facebook Pixel -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
  
            const pixelId = '<?php echo $_POST['pixel'] ?>';
  
            if (pixelId) {
                !function(f,b,e,v,n,t,s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s);
                }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
                
                fbq('init', pixelId); // Використовуємо pixelId із PHP
                fbq('track', 'Lead');
                console.log('Pixel ID:', pixelId);
            } else {
                console.error('Pixel ID not found.');
            }

            // Обновлення Pixel ID у тегу noscript
            const noscriptTag = document.createElement('noscript');
            noscriptTag.innerHTML = `<img height="1" width="1" style="display:none" 
                                      src="https://www.facebook.com/tr?id=${pixelId}&ev=PageView&noscript=1"/>`;
            document.body.appendChild(noscriptTag);

            // Відправка даних форми
        });
 
    </script>
<!-- Facebook END -->
 <!-- TikTok Pixel Code --> 
    <script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


  ttq.load('<?php echo $pixel?>');
  ttq.identify({
	"email": "<?php echo hash('sha256', $email);?>", // string. The email of the customer if available. It must be hashed with SHA-256 on the client side.
	"phone_number": "<?php echo hash('sha256', $phoneWithCode);?>", // string. The phone number of the customer if available. It must be hashed with SHA-256 on the client side.
	"external_id": "<?php echo hash('sha256', $subId);?>" // string. Any unique identifier, such as loyalty membership IDs, user IDs, and external cookie IDs.It must be hashed with SHA-256 on the client side.
  });
  ttq.page();
  ttq.track('InitiateCheckout');
}(window, document, 'ttq');
</script>
<!-- TikTok Pixel Code End -->

 <!--  Global site tag (gtag.js) - Google Ads: 10944410989 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gtag?>"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $gtag?>');
</script>
 <!-- Event snippet for Page view conversion page  -->
<script>
  gtag('event', 'conversion', {'send_to': '<?php echo $gtag?>/<?php echo $gsnip?>'});
</script>



</head>
<body>

<div class="slider-container">
    <div class="slider-text-top" id="slider-text-top">1320.65$ - средний заработок в первый день</div>
    <img src="images/1.png" class="slider-image" id="slider-image" alt="Slide Image">
    <div class="slider-text-bottom" id="slider-text-bottom">(При минимальной инвестиции 250$)</div>
    <a href="{offer}" class="slider-button" id="slider-button" disabled>ДАЛЕЕ ⏵</a>
    
</div>
</body>
</html>
