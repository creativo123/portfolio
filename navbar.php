<!--   <div class = "row no-margin" style="margin-bottom : 52px;">
<div class = "col-lg-12" style = "background-color : rgb(56,52,49);height : 50px;z-index : 9999;position : fixed;margin-bottom : 50px;padding-top : 15px;width : 100%;">
<h5  class = "shine">CREATIVEK</h5>
<div style = "display : block;float : right;">
<a href = "#"><h5  class = "shine">Resume</h5>
<a href = "project.php"><h5  class = "shine" >Projects</h5></a>
<a href = "work-exp.php"><h5  class = "shine">Experience & Work</h5></a>
<h5  class = "shine">Contact</h5>
</div>
</div>
<div style = "width : 100%;height : 2px;background-color : white;margin-top:50px ;position : fixed; z-index : 9999;">
</div>
</div>
-->



<style>
.activea > a, .activea, .activea a{
  background-color :rgb(36,36,36);
  color : white;
}

.icon-set a{
  padding-left : 5px !important;
  padding-right : 5px !important;
  margin-left: auto;
  margin-right: auto;
}

.nav >li:last-child{
  border-right :  none;
}
.nav > li a{
  color : white;
}
.nav > li a:focus{
  background-color : inherit;
}
.nav > li.item a:hover{
  background-color :rgb(16,16,16);
}
.item-no-hover:hover{
  background-color : transparent;
}

</style>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top no-boundary" style = " border : 0px;border-bottom : 2px solid white;" role="navigation" >
  <div class="container-fluid  " style = "background-color : rgb(45,45,45);">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true" aria-controls="navbar" style = "background-color : transparent;color : white;border-color : rgb(16,16,16);margin-right : 25px;">
        <span class="sr-only"  style = "color : white;" >Toggle navigation</span>
        <img src = "images/down.svg" style = "width : 25px;">
      </button>
      <a class="navbar-brand logo shine" style = "color : white;" href="index.php">CreativeK</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" >
        <li class = "item social-icons icon-set" style = "height : 100%;"><a href="https://www.github.com/creativo123/" target="_blank"  ><img class = "item-center" src = "images/github.svg" style = "width : 20px;height : 20px;"></a></li>
		<li class = "item social-icons icon-set" style = "height : 100%;"><a href="https://www.facebook.com/keval.choudhary.9" target="_blank"  ><img class = "item-center" src = "images/facebook.svg" style = "width : 20px;height : 20px;"></a></li>
        <li class = "item social-icons icon-set" style = "height : 100%; padding-right : 20px;border-right : 2px solid rgb(36,36,36);"><a href="https://in.linkedin.com/in/keval-choudhary-6a33abb2"  target="_blank"  ><img class = "item-center" src = "images/linkedin.svg" style = "width : 20px;height : 20px;"></a></li>
        <li class="item shine" id = "partner" style="margin-right : 0;"><a href="resume.pdf" target = "_blank"  >Resume</a></li>
        <li class = "item shine" id = "contact"><a href="project.php">Project</a></li>
        <li class = "item shine" id = "contact"><a href="https://www.linkedin.com/in/keval-choudhary-6a33abb2/"   >Work &amp; Experience</a></li>
        <li class = "item shine" id = "contact"><a href="#"   >Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<script>
function activate(active){
  $(".activea").addClass("item");
  $(".activea").removeClass("activea");
  $('"'+active+'"').addClass("activea");
  $('"'+active+'"').removeClass("item");
}

$(".item").click(function(){
  $(".activea").addClass("item");
  $(".activea").removeClass("activea");
  $(this).addClass("activea");
  $(this).removeClass("item");
});

</script>
