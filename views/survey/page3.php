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
                                
                                		<div class="col-md-12">
                                        
                                          <?php include 'header_page.php'; ?>
                                        <div class="col-md-12" style="padding:20px;">
                                        	<table width="100%" border="2" cellspacing="0" cellpadding="5">
                                          <tr>
                                            <td><strong>UPLOAD IMAGES</strong></td>
                                          </tr>
                                          <tr>
                                            <td align="center">
                                            <?php
                                            $img_1 = read_page($survey_id, 1, $page_no);
											//echo $img_1;
											if($img_1){ ?>
                                            <img src="<?= "../img/survey/".read_page($survey_id, 1, $page_no) ?>" class="img_survey" />
											<?php
											}
											?>
                                            <input type="file" name="i_img_1" id="i_img_1" /></td>
                                          </tr>
                                           <tr>
                                            <td>
                                              
                                                   
                                                    <input  type="text" name="i_text_4" class="form-control cover_form"  value="<?= read_page($survey_id, 4, $page_no);?>" style="text-align:center; font-size:16px; font-weight:bold;"/>
                                              
                                            </td>
                                          </tr>
                                           <tr>
                                            <td align="center">
                                              <?php
                                            $img_2 = read_page($survey_id, 2, $page_no);
											//echo $img_1;
											if($img_2){ ?>
                                            <img src="<?= "../img/survey/".read_page($survey_id, 2, $page_no) ?>" class="img_survey" />
											<?php
											}
											?>
                                            <input type="file" name="i_img_2" id="i_img_2" /></td>
                                          </tr>
                                         
                                          <tr>
                                            <td>
                                              
                                                   
                                                    <input  type="text" name="i_text_3" class="form-control cover_form"  value="<?= read_page($survey_id, 3, $page_no);?>" style="text-align:center; font-size:16px; font-weight:bold;"/>
                                              
                                            </td>
                                          </tr>
                                          </table>
                                          <br />
                                          <?php include 'footer_page.php'; ?>
                                          
                                        </div>
                                        </div>

                                        <!-- text input -->
                                      
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-info" type="submit" name="save_button" value="Save">
								
                                <input class="btn btn-info" type="submit" name="prev_button" value="Prev & Save">
                                <input class="btn btn-info" type="submit" name="close_button" value="Close & Save">
                            <?php include 'search_page.php'; ?>
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->