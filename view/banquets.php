<?php 
require_once('../config/database.php');
require_once('header_threatre.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 noPadding">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../media/img/banquetsSlider.png" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="../media/img/banquetsSlider.png" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="../media/img/banquetsSlider.png" alt="Third slide">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
            <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1>BEAUTIFUL SPACE TO MAKE YOUR EVENT SPECIAL</h1>
                    <h2>You can book it for private or cultural event</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="header" >
                <p class="navigationTxt text-center"><span class="border margin-top-10">ABOUT REFLECTIONS BANQUETS</span></p>
                <div class="text-blue text-justify">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                  
                </div>
                <hr class="horzontal_line">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="pull-left navigationTxt"><span class="border margin-top-10">BANQUET NAME 1</span></div>
                        <div class="pull-right"><h5 class="text-center text-blue"><b>Write a Review</b></h5></div>
                        <img src="../media/img/banquetside1.png" class="img-responsive" style="width:100%">
                        <a href="banquetsFirstSide.php?name=first" class="btn button mt-35 center">VIEW DETAILS</a>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-left navigationTxt"><span class="border margin-top-10">BANQUET NAME 2</span></div>
                        <div class="pull-right"><h5 class="text-center text-blue"><b>Write a Review</b></h5></div>
                        <img src="../media/img/banquetside2.png?name=second" class="img-responsive" style="width:100%">
                        <a href="" class="btn button mt-35 center">VIEW DETAILS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php');?>