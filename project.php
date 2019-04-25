<html>
<head>

  <?php  include("head.php");
  ?>
  <style>



  .web-showcase-item{
    background-size: 100% 100%;
    height: 250px;
    width: 100%;
    padding: 0px;
    position: relative;
    cursor: hand;
    overflow: hidden;

  }

  .web-showcase{
    margin-bottom: 30px;
    padding: 15px;

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

  .equal-padding{
    padding: 10px;
  }

  </style>
</head>
<body>
  <div class="container-fluid  equal-padding" style="background : linear-gradient(to right, rgb(201,201,201) , rgb(229,229,229));" >
    <?php
    include("navbar.php");
    ?>
    <div class = "row first-page" >
      <div class="col-lg-12" >
        <div class="container-fluid">
          <div class="row web-showcase equal-padding" style = "margin-bottom : 15px; margin-top : 30px;">

            <a href="projects/web/index.php?file_name=web">
              <div class = "col-lg-4">
                <div class = "web-showcase-item" style="background-image : url(images/projects/project/web.jpg)">
                  <div class = "showcase">
                    <h3> Web Development </h3>
                    <div class = "container-fluid " style="margin-top : 20px;">

                      <div class="row">
                        <div class = "col-lg-3">
                          <h5>Front End </h5>
                        </div>
                        <div  class="col-lg-9">
                          <h5>HTML | CSS | JS | JQUERY | BOOTSTRAP </h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-3">
                          <h5>Back End</h5>
                        </div>
                        <div  class="col-lg-9">
                          <h5>PHP</h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-3">
                          <h5>Database</h5>
                        </div>
                        <div  class="col-lg-9">
                          <h5>MySql | JSON</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <a href="projects/web/index.php?file_name=mobile&amp;screen=pp">
              <div class = "col-lg-4">
                <div class = "web-showcase-item" style="background-image : url(images/projects/project/android.jpg)">
                  <div class = "showcase">
                    <h3> Mobile App </h3>
                    <div class = "container-fluid " style="margin-top : 20px;">

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Front End</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>Android | Windows Phone</h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Back End</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>JAVA | C#</h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Database</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>MySql | SQlite</h5>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </a>

            <a href="projects/web/index.php?file_name=desktop">
              <div class = "col-lg-4">
                <div class = "web-showcase-item" style="background-image : url(images/projects/project/desktop.jpg)">
                  <div class = "showcase">
                    <h3> Desktop Application </h3>
                    <div class = "container-fluid " style="margin-top : 20px;">

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Front End</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>JAVA | C# | PYTHON</h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Back End</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>JAVA | C# | PYTHON</h5>
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
            </a>
          </div>

          <div class="row web-showcase" style = "margin-bottom : 70px;">
           
            <a href="projects/web/index.php?file_name=data-analysis">
              <div class = "col-lg-4">
                <div class = "web-showcase-item" style="background-image : url(images/projects/project/data_analysis.jpg)">
                  <div class = "showcase">
                    <h3> Data Analysis </h3>
                    <div class = "container-fluid " style="margin-top : 20px;">

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Front End</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>Command Line Interface</h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Back End</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>Hadoop | PYTHON</h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Database</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>NA</h5>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
          </a>
		   <div class = "col-lg-4">
            </div>
		  <a href="projects/web/index.php?file_name=graphic&amp;screen=pp">
              <div class = "col-lg-4">
                <div class = "web-showcase-item" style="background-image : url(images/projects/project/graphic.jpg)">
                  <div class = "showcase">
                    <h3> Graphic Design </h3>
                    <div class = "container-fluid " style="margin-top : 20px;">

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Software Tools</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>Corel Draw, Paint</h5>
                        </div>
                      </div>

                      <div class="row">
                        <div class = "col-lg-4">
                          <h5>Field</h5>
                        </div>
                        <div  class="col-lg-8">
                          <h5>Magazine Design | Poster/Flex Design</h5>
                        </div>
                      </div>

                      

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
		              </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
