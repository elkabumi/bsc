<!-- Content Header (Page header) -->
           
               <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                           <div class="title_page"> <?= $title ?></div>

                             <form role="form" action="<?= $action?>" method="post">

                            <div class="box box-primary">
                                
                               
                                <div class="box-body">
                                    	
                                          <div class="col-md-12">
                                         <div class="form-group">
                                          
                                      <select id="basic" name="i_survey_id" class="selectpicker show-tick form-control" data-live-search="true" >
                                      <option value="0">SEMUA</option>
                                     
                                        <?php
									
                                        $query_survey = mysql_query("select * from survey order by survey_id");
                                        while($row_survey = mysql_fetch_array($query_survey)){
                                        ?>
                                         <option value="<?= $row_survey['survey_id']?>" ><?= $row_survey['site_name']." - ".$row_survey['bsc_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                       
                                
                                    
                                        </div>
                                        
                                     
                                              
                                              <div style="clear:both;"></div>

                                       
                                      
                                   
                                </div><!-- /.box-body -->
                             
                    
                    <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Export"/>
                             	
                                </div>
                            
                            </div><!-- /.box -->
                             
                            
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              </section>