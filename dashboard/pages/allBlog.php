<?php
 require_once('../../config/database.php'); 
 if(!!@$_GET['deleteId']){
 $getId= base64_decode($_GET['deleteId']);
 $sql="DELETE FROM `blog` WHERE `id`='$getId'";
 $insert=mysqli_query($link, $sql);

  if($insert) {
    $msg= "Deleted Successfully";
  } else {
    $msg= "Not Deleted! Try Again";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
if(!!@$msg){
echo '<div class="bs-example">
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>'.$msg.'!</strong>.
    </div>
</div>';
}
?>
    <div id="wrapper">
         <?php require_once('header.php'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Blog with Date Filter 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="20%">Action</th>
                                        <th width="10%">Image</th>
                                        <th width="20%">Heading</th>
                                        <th width="20%">Posted By</th>
                                        <th width="20%">Description</th>
                                        <th width="10%">Director</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $sql="SELECT  * FROM  `blog` ORDER BY `id` DESC";
                                        $loginQuery=mysqli_query($link, $sql);
                                        while($row = mysqli_fetch_array($loginQuery, MYSQL_ASSOC)){
                                    ?>
                                    <tr class="even gradeC">
                                        <td><a href="blog.php?editId=<?php echo base64_encode($row['id']); ?>" class="btn btn-primary">Edit</a>
                                        <a href="allBlog.php?deleteId=<?php echo base64_encode($row['id']); ?>" class="btn btn-danger"  onclick="return confirm('Are you sure want to delete this?');">Delete</a></td>
                                        <td><img src='../../media/img/<?php echo $row['big_img']; ?>' height="80">   </td>
                                        <td> <?php echo $row['heading']; ?>   </td>
                                        <td> <?php echo $row['postedBy']; ?>   </td>
                                        <td><div style="height: 100px; overflow-y:scroll; overflow-x:hidden; "><?php echo $row['description']; ?></div></td>
                                        <td><?php echo $row['uploadedDate']; ?></th>
                                       
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
