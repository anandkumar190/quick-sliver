<?php include_once('app/product.php'); ?>
<?php include_once('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><?php echo $product_category_name.' / '.$product_sub_category_name; ?>  </h3>
              
                              
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <a href="sub-product.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id']; }?>" title="Back">Back</a> | Product <span id="pagetitle" ><?php echo $product_category_name.' / '.$product_sub_category_name; ?></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">   
                             <div class="col-lg-12" >
                                <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#range">Range</a></li>
    <li><a data-toggle="tab" href="#Introduction"> Introduction</a></li>
    <li><a data-toggle="tab" href="#USP"> USP</a></li>
    <li><a data-toggle="tab" href="#UNIQUE">  UNIQUE</a></li>
    <li><a data-toggle="tab" href="#STANDARD-SIZE"> STANDARD-SIZE</a></li>
    <li><a data-toggle="tab" href="#APPLICATION">  APPLICATION</a></li>
    <li><a data-toggle="tab" href="#TECHNICAL-SPECIFIACTION">  TECHNICAL-SPECIFIACTION</a></li>
  </ul>

  <div class="tab-content">
    <div id="range" class="tab-pane fade in active">
        <form role="form" action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
             <label class="lable col-md-2">Design Number:</label>
              <div class="col-md-4"> 
         <input type="text" name="designnumber"  placeholder="Range Name" class="form-control" required="">
        </div>
          <label class="lable col-md-2">Name:</label>
        <div class="col-md-4"> 
         <input type="text" name="name"  placeholder=" Name" class="form-control" required="">
        </div>
          </div>

           <div class="form-group">
             <label class="lable col-md-2">Colour Texture:</label>
              <div class="col-md-4"> 
                  <input type="text" name="colourtexture"  placeholder="Colour Texture:" class="form-control" >
              </div>  
              <label class="lable col-md-2">Range:</label>
        <div class="col-md-4"> 
         <input type="text" name="rang"  placeholder=" Rnge" class="form-control">
        </div>       
          </div>
              <div class="form-group">
             <label class="lable col-md-2">Finish displayed in:</label>
              <div class="col-md-4"> 
                  <input type="text" name="finishdisplayedin"  placeholder="Finish displayed in:" class="form-control" >
              </div>  
              <label class="lable col-md-2">Available Finish:</label>
        <div class="col-md-4"> 
         <input type="text" name="availablefinish"  placeholder="Finish displayed in" class="form-control">
        </div>       
          </div>


        

        <div class="form-group">
          <label class="lable col-md-2">Range Image:</label>
         <div class="col-md-4">  <input type="file" name="img"  class="form-control" required="" accept="image/*">
        </div>
        <div class="col-md-4">
          <input type="hidden" name="add_content_product" value="<?php echo $addcontentproduct_id; ?>">
        <button type="submit" name="addrange" class="btn btn-success">Save </button>
        <button type="reset" class="btn btn-primary">Reset</button>
     
        </div>
        </div>        
        </form>  
       
        
        <div class="col-lg-12">
          <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Range <span id="pagetitle" ></span>
                </div>
                <div class="panel-body">
                    <div class="row">                                        
                        <div class="col-md-12 col-lg-12" >
                        <h3>List of Range</h3>
                         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>                                        
                                        <th>Name</th>                                      
                                        <th>Design Number</th>                                      
                                        <th>Range</th>                                      
                                        <th>Colour Texture</th>                                      
                                        <th>Finish displayed in</th>                                      
                                        <th>Available Finish</th>                                      
                                        <th>Action</th>                      
                                    </tr>
                                </thead>
                                <tbody><?php echo $rangetable; ?></tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
    </div>
    <div id="Introduction" class="tab-pane fade">
      <form role="form" action="" method="post" enctype="multipart/form-data"> 
       <div class="form-group">
          <label>Content:</label>
        <textarea class="form-control" rows="5" name="editor1"><?php echo $introduction; ?></textarea>
        <script>CKEDITOR.replace( 'editor1' );</script>
        </div> 
          
          <div class="form-group">
         
             <div class="col-md-2">
            <?php 
            $ext = pathinfo($introduction_img, PATHINFO_EXTENSION);
         
           if(!empty($ext)){?>
              <img src="<?php echo $directory.$introduction_img; ?>" style="width: 100px; height: 100px;">
           <?php }   ?>
            <input type="hidden" name="oldimg" value="<?php echo $introduction_img; ?>">
               <input type="hidden" name="add_content_product" value="<?php echo $addcontentproduct_id; ?>">
          </div> 
           <label class="col-md-2">Choose Image:</label>
          <div class="col-md-4">
            <input type="file" name="img"  class="form-control"  accept="image/*"></div>
               
        </div>
        
        <button type="submit" name="updateintroduction" class="btn btn-success">Save </button>
        <button type="reset" class="btn btn-primary">Reset</button>
      </form>  
    </div>
    <div id="USP" class="tab-pane fade">
      <form role="form" action="" method="post" enctype="multipart/form-data"> 
       <div class="form-group">
          <label>Content:</label>
        <textarea class="form-control" rows="5" name="editor2"><?php echo $usp; ?></textarea>
        <script>CKEDITOR.replace( 'editor2' );</script>
        </div> 
          <div class="form-group">
         
             <div class="col-md-2">
            <?php 
            $ext = pathinfo($usp_img, PATHINFO_EXTENSION);
         
           if(!empty($ext)){?>
              <img src="<?php echo $directory.$usp_img; ?>" style="width: 100px; height: 100px;">
           <?php }   ?>
            <input type="hidden" name="oldimg" value="<?php echo $usp_img; ?>">
               <input type="hidden" name="add_content_product" value="<?php echo $addcontentproduct_id; ?>">
          </div> 
           <label class="col-md-2">Choose Image:</label>
          <div class="col-md-4">
            <input type="file" name="img"  class="form-control"  accept="image/*"></div>
               
        </div>
        <button type="submit" name="updateusp" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
      </form>  
    </div>
    <div id="STANDARD-SIZE" class="tab-pane fade">
      <form role="form" action="" method="post" enctype="multipart/form-data"> 
       <div class="form-group">
          <label>Content:</label>
        <textarea class="form-control" rows="5" name="editor3"><?php echo $standard_size; ?></textarea>
        <script>CKEDITOR.replace( 'editor3' );</script>
        </div> 
             <div class="form-group">
         
             <div class="col-md-2">
            <?php 
            $ext = pathinfo($standard_size_img, PATHINFO_EXTENSION);
         
           if(!empty($ext)){?>
              <img src="<?php echo $directory.$standard_size_img; ?>" style="width: 100px; height: 100px;">
           <?php }   ?>
            <input type="hidden" name="oldimg" value="<?php echo $standard_size_img; ?>">
               <input type="hidden" name="add_content_product" value="<?php echo $addcontentproduct_id; ?>">
          </div> 
           <label class="col-md-2">Choose Image:</label>
          <div class="col-md-4">
            <input type="file" name="img"  class="form-control"  accept="image/*"></div>
               
        </div>
        <button type="submit" name="updatestandersize" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
      </form>    
    </div>
    <div id="APPLICATION" class="tab-pane fade">
      <form role="form" action="" method="post" enctype="multipart/form-data"> 
       <div class="form-group">
          <label>Content:</label>
        <textarea class="form-control" rows="5" name="editor4"><?php echo $application; ?></textarea>
        <script>CKEDITOR.replace( 'editor4' );</script>
        </div> 
          <div class="form-group">
         
             <div class="col-md-2">
            <?php 
            $ext = pathinfo($application_img, PATHINFO_EXTENSION);
         
           if(!empty($ext)){?>
              <img src="<?php echo $directory.$application_img; ?>" style="width: 100px; height: 100px;">
           <?php }   ?>
            <input type="hidden" name="oldimg" value="<?php echo $application_img; ?>">
               <input type="hidden" name="add_content_product" value="<?php echo $addcontentproduct_id; ?>">
          </div> 
           <label class="col-md-2">Choose Image:</label>
          <div class="col-md-4">
            <input type="file" name="img"  class="form-control"  accept="image/*"></div>
               
        </div>
        <button type="submit" name="updateapplications" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
      </form>    
    </div>
    <div id="TECHNICAL-SPECIFIACTION" class="tab-pane fade">
     <form role="form" action="" method="post" enctype="multipart/form-data"> 
       <div class="form-group">
          <label>Content:</label>
        <textarea class="form-control" rows="5" name="editor5"><?php echo $technical_specifiaction; ?></textarea>
        <script>CKEDITOR.replace( 'editor5' );</script>
        </div> 
             <div class="form-group">
         
             <div class="col-md-2">
            <?php 
            $ext = pathinfo($technical_specifiaction_img, PATHINFO_EXTENSION);
         
           if(!empty($ext)){?>
              <img src="<?php echo $directory.$technical_specifiaction_img; ?>" style="width: 100px; height: 100px;">
           <?php }   ?>
            <input type="hidden" name="oldimg" value="<?php echo $technical_specifiaction_img; ?>">
               <input type="hidden" name="add_content_product" value="<?php echo $addcontentproduct_id; ?>">
          </div> 
           <label class="col-md-2">Choose Image:</label>
          <div class="col-md-4">
            <input type="file" name="img"  class="form-control"  accept="image/*"></div>
               
        </div>
        <button type="submit" name="updatetechnicalspecification" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
      </form>    
    </div>
     <div id="UNIQUE" class="tab-pane fade">
     <form role="form" action="" method="post" enctype="multipart/form-data"> 
       <div class="form-group">
          <label>Content:</label>
        <textarea class="form-control" rows="5" name="editor6" ><?php echo $unique; ?></textarea>
        <script>CKEDITOR.replace( 'editor6' );</script>
        </div> 
           <div class="form-group">
         <div class="col-md-2">
        <?php  $ext = pathinfo($unique_img, PATHINFO_EXTENSION);     if(!empty($ext)){ ?>
              <img src="<?php echo $directory.$unique_img; ?>" style="width: 100px; height: 100px;">
           <?php }   ?>
            <input type="hidden" name="oldimg" value="<?php echo $unique_img; ?>">
               <input type="hidden" name="add_content_product" value="<?php echo $addcontentproduct_id; ?>">
          </div> 
           <label class="col-md-2">Choose Image:</label>
          <div class="col-md-4">
            <input type="file" name="img"  class="form-control" accept="image/*"></div>
               
        </div>
        <button type="submit" name="updateunique" class="btn btn-success">Save </button>
                                <button type="reset" class="btn btn-primary">Reset</button>
      </form>    
    </div>     
  </div>
                     
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

