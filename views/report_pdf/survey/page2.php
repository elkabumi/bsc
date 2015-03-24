<?php

$html .= '
<div class="page_container">
<!-- Content Header (Page header) -->


                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                         

                    

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                
                                		<div class="col-md-12">';
                                        
										include 'header_page.php'; 
										
                                        $html .= '
                                        <div class="col-md-12" style="padding:20px;">
                                        	<table width="100%" border="1" cellspacing="0" cellpadding="5">
                                          <tr>
                                            <td>SITE INFORMATION</td>
                                          </tr>
                                          <tr>
                                            <td>
                                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="30%">Site ID</td>
                                          		<td width="30%">
                                                   '.read_page($survey_id, 1, $page_no).'
                                              </td>
                                                <td width="10%">&nbsp;</td>
                                                <td width="15%">RNC Number/Name</td>
                                                <td width="30%">
                                                 '.read_page($survey_id, 2, $page_no).'
                                               </td>
                                              </tr>
                                            </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="30%">Site Name</td>
                                                <td width="85%">'.read_page($survey_id, 3, $page_no).'</td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="30%">Address</td>
                                                <td width="85%">'. read_page($survey_id, 4, $page_no).'</td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="28%">Coordinate</td>
                                                <td width="20%">Latitude</td>
                                                <td width="60%">'.read_page($survey_id, 5, $page_no).'</td>
                                              </tr>
                                              <tr>
                                                <td>&nbsp;</td>
                                                <td>Longitude</td>
                                                <td>'.read_page($survey_id, 6, $page_no).'</td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="30%">Region</td>
                                                <td width="30%"> '.read_page($survey_id, 7, $page_no).'</td>
                                                <td width="10%">&nbsp;</td>
                                                <td width="15%">Zone</td>
                                                <td width="30%">'.read_page($survey_id, 8, $page_no).'</td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="30%">Province</td>
                                                <td width="85%">'.read_page($survey_id, 9, $page_no).'</td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="28%" valign="top">Site Model Type</td>
                                                <td width="85%"><table width="100%" border="0" cellspacing="0" cellpadding="4">
                                           		  <tr>
                                            		    <td width="0%">';
														$site_model_type1 = '<img src="../img/uncheck.png">';
														$site_model_type2 = '<img src="../img/uncheck.png">';
														$site_model_type3 = '<img src="../img/uncheck.png">';
														if(read_page($survey_id, 10, $page_no) == 1){
															$site_model_type1 = '<img src="../img/check.png">';
														}else if(read_page($survey_id, 10, $page_no) == 2){
															$site_model_type2 = '<img src="../img/check.png">';
														}else if(read_page($survey_id, 10, $page_no) == 3){
															$site_model_type3 = '<img src="../img/check.png">';
														}
														
														
														$html .= $site_model_type1. '
														</td>
                                            		    <td width="100%">New</td>
                                       		      </tr>
                                            		  <tr>
                                            		    <td>'. $site_model_type2. '</td>
                                            		    <td>Swap (Specify) : SWAP UPGRADE</td>
                                       		        </tr>
                                            		  <tr>
                                            		    <td>'. $site_model_type3. '</td>
                                            		    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                           		          <tr>
                                           		            <td width="30%">Co-locate (Specify) :</td>
                                           		            <td width="70%">'.read_page($survey_id, 11, $page_no).'</td>
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
                                                <td width="29%">
												
												
												Site Type</td>
                                                <td width="30%">';
												$site_type1 = '<img src="../img/uncheck.png">';
														$site_type2 = '<img src="../img/uncheck.png">';
														$site_type3 = '<img src="../img/uncheck.png">';
														if(read_page($survey_id, 12, $page_no) == 1){
															$site_type1 = '<img src="../img/check.png">';
														}else if(read_page($survey_id, 12, $page_no) == 2){
															$site_type2 = '<img src="../img/check.png">';
														}else if(read_page($survey_id, 12, $page_no) == 3){
															$site_type3 = '<img src="../img/check.png">';
														}
														
												$html .= $site_type1 .'
                                                &nbsp; Dense Urban </td>
                                                <td width="30%">';
												
												$html .= $site_type2 .'
                                                &nbsp;Urban</td>
                                                <td width="25%">';
												$html .= $site_type3 .'
                                               &nbsp; Sub Urban</td>
                                                
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="30%">Site Access Protocol</td>
                                                <td width="85%">'.read_page($survey_id, 13, $page_no).'</td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="30%" valign="top">Comment</td>
                                                <td width="85%" valign="top"><div class="comment_survey">'.read_page($survey_id, 14, $page_no).'</div>                                                
                                                </td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          </table>
                                          <br />
                                          <table width="100%" border="1" cellspacing="0" cellpadding="5">
                                          <tr>
                                            <td colspan="4">LANDLORD Contact Information:</td>
                                          </tr>
                                           <tr>
                                           
                                                <td width="25%">Name</td>
                                                <td width="35%">Address</td>
                                                <td width="20%">Phone</td>
                                                <td width="20%">Fax</td>
                                              
                                            
                                          </tr>
                                           <tr>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">';
                                              
                                               for($l1=1; $l1<=5; $l1++){
											   
                                               $html .= '
                                               <tr>
                                                 <td>';
												 $text = read_landlord($survey_id, $l1); 
												 $html .= "&nbsp;".$text['sl_name'] ;
												 $html .= '</td>
                                               </tr>';
                                               
											   }
											  
                                             $html .= '</table></td>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">';
                                              
                                               for($l2=1; $l2<=5; $l2++){
											   
                                               $html .= '
                                               <tr>
                                                 <td>';
												  $text = read_landlord($survey_id, $l2); 
												  $html .= "&nbsp;".$text['sl_address']; 
												  $html .= '</td>
                                               </tr>';
											   }
											    $html .= '
                                             </table></td>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">';
                                              
                                               for($l3=1; $l3<=5; $l3++){
											   $html .= '
                                               <tr>
                                                 <td>';
												 $text = read_landlord($survey_id, $l3); 
												 $html .= "&nbsp;".$text['sl_phone'];
												 $html .= '</td>
                                               </tr>';
											   }
											    $html .= '
                                             </table></td>
                                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">';
                                             
                                               for($l4=1; $l4<=5; $l4++){
											   $html .= '
                                               <tr>
                                                 <td>'; 
												 $text = read_landlord($survey_id, $l4); 
												 $html .= "&nbsp;".$text['sl_fax'];
												 $html .= '</td>
                                               </tr>';
											   }
											    $html .= '
                                             </table></td>
                                           </tr>
                                          </table>';
                                          
                                          // include 'footer_page_new.php'; 
                                          
                                        $html .= '</div>
                                        </div>

                                        <!-- text input -->
                                      
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                             
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
				</div>
				';
				?>