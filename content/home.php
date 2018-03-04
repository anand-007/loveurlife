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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>
  </head>
  <body>
  <div id="data">
    <!--Card-->
    <div class="card" style="width:23%;height:400px;background-color:white; float:left;">

        <!--Card image-->
        <div class="view overlay">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
            <a href="#">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h4 class="card-title">Card title</h4>
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>

    </div>
    <!--/.Card-->
    <div id="demo" style="display:inline-block;">



    <!--/.Card-->
                    

      <div id="showoff" style="width:400px;display:inline-block;">


        <div id="container">
          <canvas id="sphere" width="400" height="400"></canvas>
          <div id="glow-shadows" class="earth"></div>
          <canvas id="flights" width="400" height="400"></canvas>
          <div id="locations"></div>
        </div>
      </div>
    </div>

        <!--Card-->
    <div class="card" style="width:23%;height:400px;background-color:white; float:right;">

        <!--Card image-->
        <div class="view overlay">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
            <a href="#">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h4 class="card-title">Card title</h4>
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>

    </div>

    </div>
  </body>
</html>
