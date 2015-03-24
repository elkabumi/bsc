<?php

$html .= '
<div class="page_container">

                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                         

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                
                                		<div class="col-md-12">';
                                        
                                          include 'header_page.php';
										  $html .= '<div class="col-md-12" style="padding:20px;">
                                        	<table width="100%" border="2" cellspacing="0" cellpadding="5">
                                          <tr>
                                            <td><strong>UPLOAD IMAGES</strong></td>
                                          </tr>
                                          <tr>
                                            <td align="center">';
                                            
                                            $img_1 = read_page($survey_id, 1, $page_no);
											$path = "../img/survey/";
											$img_1_link = $path . $img_1;
											
											if($img_1){ 
                                            $html .= '<img src="'.$img_1_link.'" class="img_survey" />';
											}
											$html .= '
                                           </td>
                                          </tr>
                                           <tr>
                                            <td align="center">';
                                              
                                                  $html .=  
                                               read_page($survey_id, 4, $page_no);
                                              $html .= '
                                            </td>
                                          </tr>
                                           <tr>
                                            <td align="center">';
                                             
                                            $img_2 = read_page($survey_id, 2, $page_no);
											$path = "../img/survey/";
											$img_2_link = $path . $img_2;
											
											if($img_2){ 
                                            $html .= '<img src="'.$img_2_link.'" class="img_survey" />';
											}
											$html .= '
                                          </td>
                                          </tr>
                                         
                                          <tr>
                                            <td align="center">';
                                              
                                                $html .=  
                                               read_page($survey_id, 3, $page_no);
                                              $html .= '
                                              
                                            </td>
                                          </tr>
                                          </table>
                                          <br />
                                        
                                          
                                        </div>
                                        </div>

                                        <!-- text input -->
                                      
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                              
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
				</div>';
				?>
				