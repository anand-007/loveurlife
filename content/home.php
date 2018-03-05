<html itemscope itemtype="http://schema.org/Product">
  <head>
    <title>jquery.earth-3d.js plugin - draw a 3d spinning earth on canvas with javascript</title>
    <meta itemprop="name" content="jquery.earth-3d.js">
    <meta itemprop="image" content="images/preview.png">
    <link rel="stylesheet" href="css/demo.css">
    <script type="text/javascript" src="../plugins/sphere/requestanimationframe.polyfill.js"></script>
    <script type="text/javascript" src="../plugins/jquery/jquery-1.7.2.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="../plugins/jquery.ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../sphere-hacked.js"></script>
    <script type="text/javascript" src="../jquery.earth-3d.js"></script>
    <script type="text/javascript" src="../demo.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>
  </head>
  <body onload="garytest()">
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
    
    <div style="background-color:#78244c">    

    <div class="card" style="width:23%;height:400px;background-color:white; float:left; margin-right:3%;">

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

    <div class="card" style="width:23%;height:400px;background-color:white; float:left; margin-right:3%;">

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

    <div class="card" style="width:23%;height:400px;background-color:white; float:left; margin-right:2%;">

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



    <div class="container2" style="margin-top:1">
  <h2>Few Memories</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


    </div>


<!--/.Carousel Wrapper-->
                        
  </body>
</html>
