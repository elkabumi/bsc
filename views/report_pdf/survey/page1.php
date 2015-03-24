<?php

$html .= '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
<style>
body{
	font-family:"arial";
	font-size:14px;
}
.cover_survey{
	font-family:"Times New Roman", Times, serif;
	text-align:center;
}

.cover_survey1{
	font-size:26px;
	color:#00F;
	margin-top:50px;
	font-weight:bold;
}
.cover_survey2{
	font-size:50px;
	color:#800000;
	margin-top:20px;	
	font-weight:bold;
}

.cover_survey3{
	font-size:26px;
	color:#800000;
	margin-top:20px;	
	font-weight:bold;
}

.cover_survey4{
	width:300px;
	height:94px;
	background:url(../img/indosat-logo-720x226.jpg);
	margin-left:auto;
	margin-right:auto;
	margin-top:20px;
}

.cover_survey5{
	width:108px;
	height:163px;
	background:url(../img/garis.jpg);
	margin-left:auto;
	margin-right:auto;
	margin-top:20px;
}

.cover_survey6{
	width:191px;
	height:79px;
	background:url(../img/nsn.jpg);
	margin-left:auto;
	margin-right:auto;
	margin-top:60px;
}
.cover_frame{
	border:5px solid #00F;
	margin-top:50px;
	padding:20px;
	width:70%;
	margin-left:auto;
	margin-right:auto;
}
.cover_form{
	border:none;
	border-bottom:1px dotted #000;
}

.header_page_left{
	background:url(../img/nsn_header.jpg) no-repeat;
	width:100px;
	height:50px;
}

.header_page_right{
	background:url(../img/indosat_header.jpg) no-repeat;
	width:200px;
	height:50px;
}

.header_page_center{
	text-align:center;
	font-size:20px;
	padding-top:10px;
	padding-left:160px;
}
.img_survey{
	max-width:500px;
	margin:20px;
}
.comment_survey{
	min-height:100px;
	height:100px;
	max-height:100px;
}
.page_container{
	
	page-break-after: always;
	
}

</style>
</head>

<body>
<div class="page_container">
<!-- Content Header (Page header) -->
              
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
                                        
                                        	<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td valign="top">SITE Name</td>
    <td valign="top">:</td>
    <td valign="top">'.$row->site_name.'</td>
  </tr>
  <tr>
    <td valign="top">BSC /TCSM/RNC Name </td>
    <td valign="top">:</td>
    <td valign="top">'.$row->bsc_name.'</td>
  </tr>
  <tr>
    <td valign="top">SITE ID </td>
    <td valign="top">:</td>
    <td valign="top">'.$row->site_id.'</td>
  </tr>
  <tr>
    <td valign="top">Project </td>
    <td valign="top">:</td>
    <td valign="top">'.$row->project.'</td>
  </tr>
  <tr>
    <td valign="top">Region </td>
    <td valign="top">:</td>
    <td valign="top">'. $row->region .'</td>
  </tr>
  <tr>
    <td valign="top">Branch </td>
    <td valign="top">:</td>
    <td valign="top">'.$row->branch.'</td>
  </tr>
</table>

                                             
                                              <div style="clear:both;"></div>
                                        </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        
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