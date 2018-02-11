<html itemscope itemtype="http://schema.org/Product">
  <head>
    <title>jquery.earth-3d.js plugin - draw a 3d spinning earth on canvas with javascript</title>
    <meta itemprop="name" content="jquery.earth-3d.js">
    <meta itemprop="image" content="images/preview.png">
    <link rel="stylesheet" href="css/demo.css">
    <script type="text/javascript" src="../plugins/sphere/requestanimationframe.polyfill.js"></script>
    <script type="text/javascript" src="../plugins/jquery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../plugins/jquery.ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../sphere-hacked.js"></script>
    <script type="text/javascript" src="../jquery.earth-3d.js"></script>
    <script type="text/javascript" src="../demo.js"></script>
  </head>
  <body>
    <div id="demo">
      <div id="showoff">
        <div id="container">
          <canvas id="sphere" width="400" height="400"></canvas>
          <div id="glow-shadows" class="earth"></div>
          <canvas id="flights" width="400" height="400"></canvas>
          <div id="locations"></div>
        </div>
      </div>
    </div>
  </body>
</html>
