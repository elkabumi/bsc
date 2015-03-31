<?php echo $format; ?><table width="100%" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td bgcolor="#FFFF00">Site Name</td>
    <td bgcolor="#FFFF00">BSC/TCSM/RNC Name</td>
    <td bgcolor="#FFFF00">Site ID</td>
    <td bgcolor="#FFFF00">Project</td>
    <td bgcolor="#FFFF00">Region</td>
    <td bgcolor="#FFFF00">Branch</td>
    <td bgcolor="#FFFF00">Page</td>
    <td bgcolor="#FFFF00">Field Name</td>
 
    <td bgcolor="#FFFF00">Data</td>
  </tr>
  <?php
   if($i_survey_id == 0){
	   $parameter = "";
	}else{
		$parameter = " where survey_id = '$i_survey_id' ";
	}
  $query = mysql_query("select * from survey $parameter  order by survey_id ");
 
  while($row = mysql_fetch_array($query)){
	  $no_detail = 1;
	  
	  $sd_question = array(
	  					'',
	  					'Site ID',
						'RNC Number/Name',
						'Site Name',
						'Address',
						'Coordinate	Latitude',
						'Coordinate	Longitude',
						'Region',
						'Zone',
						'Province',
						'Site Model Type',
						'Site Type',
						'Site Access Protocol',
						'Comment',
						'Gambar 1',
						'Gambar 2'
						
	  				);
	  
	  $query_detail = mysql_query("select a.*, b.sc_name
	  								from survey_details a
									join survey_categories b on b.sc_id = a.sc_id
									where survey_id = '".$row['survey_id']."' 
									and sd_view_type = '0'
									order by sd_id");
	  while($row_detail = mysql_fetch_array($query_detail)){
		  
  ?>
  <tr>
    <td><?php echo $row['site_name'] ?></td>
    <td><?php echo $row['bsc_name'] ?></td>
    <td><?php echo $row['site_id'] ?></td>
    <td><?php echo $row['project'] ?></td>
    <td><?php echo $row['region'] ?></td>
    <td><?php echo $row['branch'] ?></td>
    <td><?php echo "Page ".$row_detail['sd_page'] ?></td>
    <td><?php echo $sd_question[$no_detail] ?></td>
  
    <td><?php 
	 if($row_detail['sd_number']==10 && $row_detail['sd_page']==2){
	 	$site_model_type = array("", "New", "Swap (Specify) : SWAP UPGRADE", "Co-locate (Specify) : ");
		if($row_detail['sd_answer']){
			echo $site_model_type[$row_detail['sd_answer']];
		}
		if($row_detail['sd_answer'] == 3){
			echo read_page($row['survey_id'], 11, 2);
		}
	 }else if($row_detail['sd_number']==12 && $row_detail['sd_page']==2){
	 	$site_type = array("", "Dense Urban", "Urban", "Sub Urban");
		if($row_detail['sd_answer']){
			echo $site_model_type[$row_detail['sd_answer']];
		}
	 }else{
		echo $row_detail['sd_answer']; 
	 }
	?></td>
  </tr>
  <?php
		  
 	$no_detail++;
		 if($no_detail == 14){
	$query_landlord = mysql_query("select * from survey_landlord where (survey_id = '".$row['survey_id']."') 
	 and (sl_name <> '' or sl_address <> '' or sl_phone <> '' or sl_fax <> '')
	 order by sl_id");
	  while($row_landlord = mysql_fetch_array($query_landlord)){
		 	$landlord_title = array("","Name", "Address", "Phone", "Fax");
		  for($il=1; $il<=4; $il++){ 
		  ?>
		<tr>
     <td><?php echo $row['site_name'] ?></td>
    <td><?php echo $row['bsc_name'] ?></td>
    <td><?php echo $row['site_id'] ?></td>
    <td><?php echo $row['project'] ?></td>
    <td><?php echo $row['region'] ?></td>
    <td><?php echo $row['branch'] ?></td>
    <td>Page 2</td>
    <td><?php echo $landlord_title[$il] ?></td>
  
    <td><?php echo $row_landlord[$il + 2] ?></td>
    </tr>  
		<?php 
		  }
		}
		 }
	  }
	  
	 
	  
	  
  }
  ?>
</table>
