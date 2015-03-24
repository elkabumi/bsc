<!-- Content Header (Page header) -->
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan gagal !</b>
               Password dan confirm password tidak sama
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                         

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                
                                		<div class="col-md-12 cover_survey">
                                        <div class="cover_survey1">SITE SURVEY DETAIL REPORT</div>
                                        <div class="cover_survey2">BSC / TCSM / RNC</div>
                                        <div class="cover_survey3">INFRASTRUCTURE DEVELOPMENT OF<br /> CELLULAR TELECOMMUNICATION NETWORKS</div>
                                        <div class="cover_survey4"></div>
                                        <div class="cover_survey5"></div>
                                        <div class="cover_survey6"></div>
                                        </div>
                                        
                                        <div class="col-md-2"></div>
                                    	<div class="col-md-8">
                                        <div class="cover_frame">
                                        
                                        	 <div class="col-md-4">
                                              <label style="padding-top:5px;">SITE Name</label>
                                             </div>
                                       		 <div class="col-md-8">
                                                  <div class="form-group">
                                                   
                                                    <input required type="text" name="i_site_name" class="form-control cover_form"  value="<?= $row->site_name ?>"/>
                                                </div>
                                             </div> 
                                             
                                              <div class="col-md-4">
                                              <label style="padding-top:5px;">BSC/TCSM/RNC Name</label>
                                             </div>
                                       		 <div class="col-md-8">
                                                  <div class="form-group">
                                                   
                                                    <input required type="text" name="i_bsc_name" class="form-control cover_form"  value="<?= $row->bsc_name ?>"/>
                                                </div>
                                             </div> 
                                             
                                              <div class="col-md-4">
                                              <label style="padding-top:5px;">SITE ID</label>
                                             </div>
                                       		 <div class="col-md-8">
                                                  <div class="form-group">
                                                   
                                                    <input required type="text" name="i_site_id" class="form-control cover_form"  value="<?= $row->site_id ?>"/>
                                                </div>
                                             </div> 
                                             
                                              <div class="col-md-4">
                                              <label style="padding-top:5px;">Project</label>
                                             </div>
                                       		 <div class="col-md-8">
                                                  <div class="form-group">
                                                   
                                                    <input required type="text" name="i_project" class="form-control cover_form"  value="<?= $row->project ?>"/>
                                                </div>
                                             </div> 
                                             
                                              <div class="col-md-4">
                                              <label style="padding-top:5px;">Region</label>
                                             </div>
                                       		 <div class="col-md-8">
                                                  <div class="form-group">
                                                   
                                                    <input required type="text" name="i_region" class="form-control cover_form"  value="<?= $row->region ?>"/>
                                                </div>
                                             </div> 
                                             
                                              <div class="col-md-4">
                                              <label style="padding-top:5px;">Branch</label>
                                             </div>
                                       		 <div class="col-md-8">
                                                  <div class="form-group">
                                                   
                                                    <input required type="text" name="i_branch" class="form-control cover_form"  value="<?= $row->branch ?>"/>
                                                </div>
                                             </div> 
                                             
                                              <div style="clear:both;"></div>
                                        </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        
                                        <!-- text input -->
                                      
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                <br /><br />
                                  <div class="box-footer">
                                  <input class="btn btn-info " type="submit" name="save_button" value="Save">
									<input class="btn btn-info" type="submit" name="next_button" value="Next & Save">
                             
                                <a href="<?= $close_button?>" class="btn btn-info" >Close & Save</a>
                             <?php include 'search_page.php'; ?>
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->