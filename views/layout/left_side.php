 <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image" style="text-align:center; margin-bottom:10px; margin-top:10px;">
                        	<?php
                             $user_data = get_user_data();
							if($user_data[2]==""){
								$img = "../img/user/default.jpg";
							}else{
								$img = "../img/user/".$user_data[2];
							}
							?>
                            <img src="<?= $img ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="info" style="text-align:center;">
                            <p style="color:#a0acbf; ">
                                        <?php
                                       
                                        echo "Welcome, ".$user_data[0];
                                        ?>
                                </p>

                            <a style="color:#a0acbf;  "><?= $user_data[1]?></a>
                        </div>
                    </div>
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   <?php //if(isset($_SESSION['menu_active'])) { echo $_SESSION['menu_active']; }?>
                    <ul class="sidebar-menu">
                     
                     <!--
                          <li class="treeview <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){ echo "active"; }?>">
                            <a href="#">
                                <i class="fa fa-list-alt"></i>
                                <span>Master </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="village.php"><i class="fa fa-chevron-circle-right"></i>Desa</a></li>
                                 
                                <li><a href="village_profile_structure.php"><i class="fa fa-chevron-circle-right"></i>Struktur Profil Desa</a></li>
                                 
                                <li><a href="village_monograph_structure.php?page=list"><i class="fa fa-chevron-circle-right"></i>Struktur Monografi</a></li>
                             </ul>
                  </li>
                         -->
                                
                     <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){ echo "class='active'"; } ?>>
                            <a href="survey.php">
                                <i class="fa fa-book"></i>
                                <span>Site Survey</span>
                               
                            </a>
                            
                  </li>
                  
                        
                    <?php
                    if($_SESSION['user_type_id'] == 1){
					?>
                 
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 8){ echo "class='active'"; } ?>>
                            <a href="user.php">
                                <i class="fa fa-users"></i>
                                <span>User</span>
                               
                            </a>
                            
                  </li>
                 <?php
					}
				 ?>
              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>