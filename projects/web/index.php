<html>
<head>
  <base href="../../">
  <?php  include("../../head.php");

  if(isset($_GET["file_name"])){
    $file_name = $_GET["file_name"];
    if(isset($_GET["screen"])){
      $height = 600;
      $width = 80;
    }else{
      $height = 250;
      $width = 100;
    }
  }else{
    echo("<script>alert('something missing');</script>");
  }
  ?>
  <style>

  .web-showcase{
    padding: 30px;
  }

  .web-showcase-item{
    background-size: 100% 100%;
    height: <?php echo("$height"); ?>px;
    width: <?php echo("$width"); ?>%;
    padding: 0px;
    position: relative;
    cursor: hand;
    overflow: hidden;

  }

  .web-showcase{
    margin-bottom: 30px;
  }

  .showcase{
    padding: 0px;
    margin : 0px;
    text-align: center;
    color : white;
    background-color : rgba(0,0,0,0.6);
    position : absolute;;
    bottom : 0px;
    width: 100%;
    height: 50px;
    transition: all 1s ease;
  }

  .web-showcase-item:hover .showcase{
    height: 100%;
    overflow: hidden;
    transition: all 1s ease;
  }

  .web-showcase-item h3{
    padding: 10px;
    background-color: rgba(0,0,0,0.7);
    margin:  0;
    overflow: hidden;

  }

  .web-showcase-item h5{
    padding: 0px;
    margin : 0px;
    text-align: left;
  }

  .showcase .row{
    margin-bottom: 16px;
  }

  </style>
</head>
<body style="background : linear-gradient(to right, rgb(201,201,201) , rgb(229,229,229));height : 100%;">
  <div class="container-fluid  no-padding" " >
    <?php
    include("../../navbar.php");
    ?>
    <div class = "row first-page" style="background : linear-gradient(to right, rgb(201,201,201) , rgb(229,229,229));">
      <div class="col-lg-12" >
        <div class="container-fluid">
          <?php  include("info.php"); ?>
          <!--
            <div class="row web-showcase" style = "margin-bottom : 30px;">
              <a href="www.creativek.me">
                <div class = "col-lg-4">
                  <div class = "web-showcase-item" style="background-image : url(images/projects/tripo/home.jpg)">
                    <div class = "showcase">
                      <h3> TRIPO </h3>
                      <div class = "container-fluid " style="margin-top : 20px;">

                        <div class="row">
                          <div class = "col-lg-4">
                            <h5>Front End</h5>
                          </div>
                          <div  class="col-lg-8">
                            <h5>HTML | CSS | JS | BOOTSTRAP</h5>
                          </div>
                        </div>

                        <div class="row">
                          <div class = "col-lg-4">
                            <h5>Back End</h5>
                          </div>
                          <div  class="col-lg-8">
                            <h5>PHP</h5>
                          </div>
                        </div>

                        <div class="row">
                          <div class = "col-lg-4">
                            <h5>Database</h5>
                          </div>
                          <div  class="col-lg-8">
                            <h5>MySql</h5>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>


        -->

      </div>
    </div>
  </div>
</div>
</body>
</html>
