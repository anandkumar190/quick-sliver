<?php include_once('app/about.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About us</h1>    
                        
                </div>
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About us <span id="pagetitle" ></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">                                                  
                            <div class="col-lg-12" >
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
   <label class="control-label  col-lg-2 col-md-2 col-sm-2 col-xs-2  " for="product_name"> Product Name: <span class="text-danger"><b>*</b></span></label>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control">
      </div>
</div>
<div class="form-group">
      <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <textarea class="form-control" rows="2" name="content"><?php echo $content; ?></textarea>
        <script>CKEDITOR.replace( 'content' );</script>
      </div>
</div>

    <div class="form-group">        
      <div class="col-sm-offset-0 col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
        <button type="submit" name="UpdateAboutUs" id="UpdateAboutUs" class="btn btn-primary">Submit</button>
        <a href="" name="reset" class="btn btn-primary">Reset</a>
      </div>
    </div>
  </form>
                                </div> 

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
          
        </div>
        <!-- /#page-wrapper -->

   <?php include_once('footer.php'); ?>

