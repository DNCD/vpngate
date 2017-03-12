<!DOCTYPE html>
<html>

  <?php include 'header.php'; ?>

<body>

<div class="container">
  <div class="row">
    <span class="span8">

         <iframe id="JotFormIFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="https://form.jotform.me/60993883030460" frameborder="0" style="width:100%; height:787px; border:none;" scrolling="no"> </iframe> <script type="text/javascript"> window.handleIFrameMessage = function(e) { var args = e.data.split(":"); var iframe = document.getElementById("JotFormIFrame"); if (!iframe) return; switch (args[0]) { case "scrollIntoView": iframe.scrollIntoView(); break; case "setHeight": iframe.style.height = args[1] + "px"; break; case "collapseErrorPage": if (iframe.clientHeight > window.innerHeight) { iframe.style.height = window.innerHeight + "px"; } break; case "reloadPage": window.location.reload(); break; } var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false; if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) { var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)}; iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*"); } }; if (window.addEventListener) { window.addEventListener("message", handleIFrameMessage, false); } else if (window.attachEvent) { window.attachEvent("onmessage", handleIFrameMessage); } if(window.location.href && window.location.href.indexOf("?") > -1) { var ifr = document.getElementById("JotFormIFrame"); var get = window.location.href.substr(window.location.href.indexOf("?") + 1); if(ifr && get.length > 0) { var src = ifr.src; src = src.indexOf("?") > -1 ? src + "&" + get : src + "?" + get; ifr.src = src; } } </script>

    </span>
    <span class="span4">

    <br><br><br><br>
    <h3>Ketentuan Akun</h3><br>

    <ol class="list-unstyled">
            <ol>
                <li>Akun Hanya aktif selama 7 hari</li>
	
                <li>Harap mengisi form request dengan benar jika ingin request agan direspon</li>
                <li>Kami tidak bertanggung jawab atas penyalahgunaan akun vpn</li>
                <li>Dilarang menggunakan akun untuk tindakan kriminal (Abuse)</li>
                <li>Ingin akun yang aktif selama satu bulan? dan enggak cuman 1 port aja yg di-forward? PM me :D</li>
            </ol>
    </ol>


    </span>
  </div>
</div>
</body>
</html>
