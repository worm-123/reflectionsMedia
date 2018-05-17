<?php 
require_once('../config/database.php');
require_once('header.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 noPadding">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../media/img/blog.png" alt="First slide">
                    </div>
                   
                </div>
               <!--  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span>
                </a> -->
            </div>
            <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1>REFLECTIONS BLOG</h1>
                    <h2>Let your knowledge flow to the world.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

        <?php 
        $limit = 3;  
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
        $start_from = ($page-1) * $limit;  
  
            $sql="SELECT * FROM `blog` ORDER BY `id` DESC LIMIT $start_from, $limit";
            $loginQuery=mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC)){
        ?>
			<h1 class="about_hospitality"><?php echo $row['heading'] ?></h1>
            <p class="text-center">by <?php echo $row['postedBy']?></p>
			<div class="container">
                <div class="col-md-3">
                </div> 
                 <div class="col-md-6"> 
                 <div class="blogImage">
                        <img src="../media/img/<?php echo $row['big_img']?>" alt="<?php echo $row['postedBy']?>" title="<?php echo $row['postedBy']?>" class="img-responsive"/>
                        <p class="text-justify margin-top-10">
                            <?php echo $row['description'] ?>
                        </p>
                        <hr>

                        <hr>
                    </div> 
                 </div>
                    <div class="col-md-3">
                
                </div>
                
                
			</div>
         <?php
            }
        ?>
        <div class="container">
        <?php  
            $sql = "SELECT COUNT(id) FROM blog";  
            $rs_result = mysqli_query($link, $sql);  
            $row =  mysqli_fetch_array($rs_result, MYSQL_BOTH); 
            $total_records = $row[0];  
            $total_pages = ceil($total_records / $limit);  
            $pagLinkLer = "<div class='paginationFooter blogImage margin-top-10'>"; 
             $pagLink=''; 
            for ($i=1; $i<=$total_pages; $i++) {  
                         $pagLink .= "<a href='blog.php?page=".$i."' class='number'>".$i."</a>";  
            };
            if(@$_GET['page'] >1){
                $previous="<a href='blog.php?page=".(@$_GET['page'] - 1)."' class='btn button'><</a>";
            }else{
                $previous="<a href='javascript:void(0)' class='btn button'><</a>";
            }
            if(@$_GET['page'] >= ($i-1)){
                $next="<a href='javascript:void(0)' class='btn button'>></a>"; 
            }else{
                 $next="<a href='blog.php?page=".(@$_GET['page'] + 1)."' class='btn button'>></a>"; 
            }
            echo $pagLinkLer.$previous.$pagLink.$next. "</div>";  
            ?>
            </div>
		</div>
        
	</div>
</div>

<?php require_once('footer.php');?>
