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
                                            <td><strong>SITE INFORMATION</strong></td>
                                          </tr>
                                          <tr>
                                            <td>
                                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Site ID</strong></td>
                                          		<td width="30%">
                                                    <input  type="text" name="i_1" class="form-control cover_form"  value="<?= read_page($survey_id, 1, $page_no);?>"/>
                                              </td>
                                                <td width="10%">&nbsp;</td>
                                                <td width="15%"><strong>RNC Number/Name</strong></td>
                                                <td width="30%">
                                                  <input type="text" name="i_2" class="form-control cover_form"  value="<?= read_page($survey_id, 2, $page_no);?>"/>
                                               </td>
                                              </tr>
                                            </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Site Name</strong></td>
                                                <td width="85%"><input type="text" name="i_3" class="form-control cover_form"  value="<?= read_page($survey_id, 3, $page_no);?>"/></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Address</strong></td>
                                                <td width="85%"><input type="text" name="i_4" class="form-control cover_form"  value="<?= read_page($survey_id, 4, $page_no);?>"/></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Coordinate</strong></td>
                                                <td width="25%"><strong>Latitude</strong></td>
                                                <td width="60%"><input type="text" name="i_5" class="form-control cover_form"  value="<?= read_page($survey_id, 5, $page_no);?>"/></td>
                                              </tr>
                                              <tr>
                                                <td>&nbsp;</td>
                                                <td><strong>Longitude</strong></td>
                                                <td><input type="text" name="i_6" class="form-control cover_form"  value="<?= read_page($survey_id, 6, $page_no);?>"/></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Region</strong></td>
                                                <td width="30%"><input type="text" name="i_7" class="form-control cover_form"  value="<?= read_page($survey_id, 7, $page_no);?>"/></td>
                                                <td width="10%">&nbsp;</td>
                                                <td width="15%"><strong>Zone</strong></td>
                                                <td width="30%"><input type="text" name="i_8" class="form-control cover_form"  value="<?= read_page($survey_id, 8, $page_no);?>"/></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Province</strong></td>
                                                <td width="85%"><input type="text" name="i_9" class="form-control cover_form"  value="<?= read_page($survey_id, 9, $page_no);?>"/></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%" valign="top"><strong>Site Model Type</strong></td>
                                                <td width="85%"><table width="100%" border="0" cellspacing="0" cellpadding="4">
                                           		  <tr>
                                            		    <td width="4%"><input type="radio" name="i_10" class="minimal" value="1" 
														<?php if(read_page($survey_id, 10, $page_no) == 1){ echo "checked"; }?>/></td>
                                            		    <td width="96%">New</td>
                                       		      </tr>
                                            		  <tr>
                                            		    <td><input type="radio" name="i_10" class="minimal" value="2" <?php if(read_page($survey_id, 10, $page_no) == 2){ echo "checked"; }?>/></td>
                                            		    <td>Swap (Specify) : SWAP UPGRADE</td>
                                       		        </tr>
                                            		  <tr>
                                            		    <td><input type="radio" name="i_10" value="3" class="minimal" <?php if(read_page($survey_id, 10, $page_no) == 3){ echo "checked"; }?>/></td>
                                            		    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                           		          <tr>
                                           		            <td width="18%">Co-locate (Specify) :</td>
                                           		            <td width="82%"><input  type="text" name="i_11" class="form-control cover_form"  value="<?= read_page($survey_id, 11, $page_no);?>"/></td>
                                       		              </tr>
                                       		            </table></td>
                                       		        </tr>
                                       		    </table></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Site Type</strong></td>
                                                <td width="30%"><input type="radio" name="i_12" value="1" class="minimal" <?php if(read_page($survey_id, 12, $page_no) == 1){ echo "checked"; }?>/>
                                                &nbsp; Dense Urban </td>
                                                <td width="30%"><input type="radio" name="i_12" class="minimal" value="2" <?php if(read_page($survey_id, 12, $page_no) == 2){ echo "checked"; }?>/>
                                                &nbsp;Urban</td>
                                                <td width="25%"><input type="radio" name="i_12" class="minimal" value="3" <?php if(read_page($survey_id, 12, $page_no) == 3){ echo "checked"; }?>/>
                                               &nbsp; Sub Urban</td>
                                                
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%"><strong>Site Access Protocol</strong></td>
                                                <td width="85%"><input type="text" name="i_13" class="form-control cover_form"  value="<?= read_page($survey_id, 13, $page_no);?>"/></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="15%" valign="top"><strong>Comment</strong></td>
                                                <td width="85%" valign="top"><textarea name="i_14" cols="" rows="5" class="form-control cover_form"><?= read_page($survey_id, 14, $page_no);?></textarea>
                                                
                                                </td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          </table>
                                          <br />
                                          <table width="100%" border="2" cellspacing="0" cellpadding="5">
                                          <tr>
                                            <td colspan="4"><strong>LANDLORD Contact Information:</strong></td>
                                          </tr>
                                           <tr>
                                           
                                                <td width="25%">Name</td>
                                                <td width="35%">Address</td>
                                                <td width="20%">Phone</td>
                                                <td width="20%">Fax</td>
                                              
                                            
                                          </tr>
                                           <tr>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                               <?php
                                               for($l1=1; $l1<=5; $l1++){
											   ?>
                                               <tr>
                                                 <td><input  type="text" name="i_l_name_<?= $l1 ?>" class="form-control cover_form"  value="<?php $text = read_landlord($survey_id, $l1); echo $text['sl_name'] ?>"/></td>
                                               </tr>
                                               <?php
											   }
											   ?>
                                             </table></td>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                               <?php
                                               for($l2=1; $l2<=5; $l2++){
											   ?>
                                               <tr>
                                                 <td><input  type="text" name="i_l_address_<?= $l2 ?>" class="form-control cover_form"  value="<?php $text = read_landlord($survey_id, $l2); echo $text['sl_address'] ?>"/></td>
                                               </tr>
                                               <?php
											   }
											   ?>
                                             </table></td>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                               <?php
                                               for($l3=1; $l3<=5; $l3++){
											   ?>
                                               <tr>
                                                 <td><input  type="text" name="i_l_phone_<?= $l3 ?>" class="form-control cover_form"  value="<?php $text = read_landlord($survey_id, $l3); echo $text['sl_phone'] ?>"/></td>
                                               </tr>
                                               <?php
											   }
											   ?>
                                             </table></td>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                               <?php
                                               for($l4=1; $l4<=5; $l4++){
											   ?>
                                               <tr>
                                                 <td><input  type="text" name="i_l_fax_<?= $l4 ?>" class="form-control cover_form"  value="<?php $text = read_landlord($survey_id, $l4); echo $text['sl_fax'] ?>"/></td>
                                               </tr>
                                               <?php
											   }
											   ?>
                                             </table></td>
                                           </tr>
                                          </table>
                                          
                                          <?php include 'footer_page.php'; ?>
                                          
                                        </div>
                                        </div>

                                        <!-- text input -->
                                      
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-info" type="submit" name="save_button" value="Save">
								<input class="btn btn-info" type="submit" name="next_button" value="Next & Save">
                                <input class="btn btn-info" type="submit" name="prev_button" value="Prev & Save">
                                <input class="btn btn-info" type="submit" name="close_button" value="Close & Save">
                               
                               <?php include 'search_page.php'; ?>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->