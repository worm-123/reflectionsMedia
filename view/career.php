<?php 
require_once('../config/database.php');
require_once('header_media.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 noPadding">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../media/img/career.png" alt="First slide">
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
                    <h1>GIVE YOUR CAREER A KICKSTART</h1>
                    <h2>It’s perfect industry for mad people :)</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid margin-top-10">
  <div class="container">
    <div class="row margin-top-20">
         <div class="header">
          <p class="navigationTxt text-center"><span class="border margin-top-10">CAREER AT RELECTIONS</span></p>
        </div>
        <div class="text-justify">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
    </div>
     <div class="row mt-35">
        <div class="col-sm-6 col-sm-offset-3 pl-0">
            <hr class="horzontal_line">
            <form class="form-horizontal edit_profile career_form" action="/action_page.php">
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Full Name:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Mobile No:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Email ID:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Present Address:</label>
                    <div class="col-sm-8 pl-0">
                        <textarea  class="form-control" id="pwd"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">City:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Pin:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Permanent Address:</label>
                    <div class="col-sm-8 pl-0">
                        <textarea class="form-control" id="pwd"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">City:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Pin:</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Academic Qualification(s):</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="pwd">Professional Qualification(s):</label>
                    <div class="col-sm-8 pl-0">
                        <input type="text" class="form-control" id="pwd">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="email">Post Applied For:</label>
                    <div class="col-sm-8 pl-0">
                        <div class="input-group customSelect col-md-12">
                            <select class="form-control h28" id="select_box">
                                <option value="">Select</option>
                                <option value="">option1</option>
                                <option value="">option2</option>
                                <option value="">option3</option>
                                <option value="">option4</option>
                                <option value="">option5</option>
                                <option value="">option6</option>
                            </select>
                            <!--<span class="input-group-addon openSelect" > <span class="glyphicon glyphicon-chevron-down "></span></span>-->
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label  pl-0 col-sm-4" for="email">Upload Your CV :<br> (Only .doc, .docx, .pdf)</label>
                    <div class="col-sm-8 pl-0">
                        <div class="input-group">
                            <input type="file" name="img[]" class="file-input">
                            <input type="text" class="form-control input-file browse">
                            <span class="input-group-addon browse">Browse</span>
                        </div>
                    </div>
                </div>
			<img src="../media/img/bottom.png" class="imageWithBack" >
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4 mt-35">
                        <button type="submit" class="btn button">SEND IT TO CREATIVE MINDS</button>
                    </div>
                </div>
                <div style="height:250px"></div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php require_once('footer.php');?>

<script type="text/javascript">
    $(document).on('click', '.browse', function() {
     var file = $(document).find('.file-input');
     file.trigger('click');
 });
 $(document).on('change', '.file-input', function() {
     console.log('changed')
     $(document).find('.input-file').val($(this).val().replace(/C:\\fakepath\\/i, ''));
 });

 
</script>

