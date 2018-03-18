<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
    <style type="text/css">
        .wrap {
          background-color: #78244c;
          overflow: scroll;
        }
        .outerWrap{
          margin-left: 10%;
          margin-right: 10%;
                    background-color:#78244c;

        }
        body {
        }
        article { text-align: center; line-height: 150%; }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110579542-2"></script>
    <script>
      function gary(){
  };
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110579542-2');
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7281204594203363",
    enable_page_level_ads: true
  });

</script>
<script type="text/javascript">
  function garygh(){
    var locationValue = window.location.href;
    if(locationValue && locationValue.indexOf("page=")>-1){
      document.getElementById("title").style.display = "none";
    } else {
      document.getElementById("title").style.display = "block";
    }
  }
</script>
</head>
<body onload="garygh()">

<div class="outerWrap">
  <div id="title" style= "height:300px; width:100%; background-color:78244c; text-align:center;">
      <img src = '../content/images/WebsiteTitle.png' style="height:300px;margin-top:2%;width:90%;">
  </div>
  <div class="wrap">
       <header>
          <h2><?php siteName(); ?></h2>
          <nav class="menu">
              <?php navMenu(); ?>
          </nav>
      </header>


      <article>
          <h3><?php pageTitle(); ?></h3>
          <?php pageContent(); ?>
      </article>

  </div>
</div>
</body>
</html>