<?php 
require_once('../config/database.php');
require_once('header-threatre.php');
?>

<div class="container edit_profile margin-top-10">
    <div class="row margin-top-20">
        <div class="col-sm-6 col-sm-offset-3 tkt-box">
            <h4 class="text-center">PRINT YOUR TICKET </h4>
            <hr class="horzontal_line">
            <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="pwd">Enter booking ID:</label>
                    <div class="col-sm-8 ">
                        <input type="password" class="form-control w67" id="pwd">
                    </div>
                </div>
            </form>
          
        </div>
       
    </div>
    <div class="col-sm-offset-4 col-sm-4  mt-35 ">
            <button type="submit" class="btn button center">PRINT TICKET</button>
        </div>
</div>

<link rel="stylesheet" href="../lib/css/style.css" type="text/css">
<link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../lib/1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
<script src="../lib/1/thumbnail-slider.js" type="text/javascript"></script>
<?php require_once('footer.php');?>