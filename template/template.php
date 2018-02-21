<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php pageTitle(); ?> | <?php siteName(); ?></title>
    <style type="text/css">
        .wrap {}
        article { text-align: center; line-height: 150%; }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110579542-2"></script>
    <script>
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
</head>
<body>
       <div id="title" style= "height:300px; width:100%">
      <img src = '../content/images/WebsiteTitle.png' style="height:300px;width:60%">
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
</body>
</html>