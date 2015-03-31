<?php

function select(){
	$query = mysql_query("select * from survey order by survey_id");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from survey
			where survey_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_page($survey_id, $sd_number, $sd_page){
	$query = mysql_query("select sd_answer
			from survey_details
			where survey_id = '$survey_id' and sd_number = '$sd_number' and sd_page = '$sd_page'");
	
			
	$result = mysql_fetch_array($query);
	return $result['sd_answer'];
}

function read_landlord($survey_id, $sl_number){
	$query = mysql_query("select *
			from survey_landlord
			where survey_id = '$survey_id' and sl_number = '$sl_number'");
	
	$result = mysql_fetch_array($query);
	return $result;
}


function create($data){
	mysql_query("insert into survey values(".$data.")");
}

function create_page($survey_id){
	// create halaman 2
	for($i=1; $i<=14; $i++){
		$sd_category = 1;
		$sd_view_type = 0;
		if($i==11){
			$sd_view_type = 1;
		}
		$data_detail = "'',
					'$survey_id', 
					'$i', 
					'2',
					'', 
					'',
					'$sd_category',
					'$sd_view_type'
			";
		mysql_query("insert into survey_details values(".$data_detail.")");
	}
	
	// create data lanlord
	for($l=1; $l<=5; $l++){
		$data_lanlord = "'',
					'$survey_id', 
					'$l', 
					'',
					'', 
					'',
					''
			";
		mysql_query("insert into survey_landlord values(".$data_lanlord.")");
	}
	
	// create halaman 3
	for($i3=1; $i3<=4; $i3++){
		$sd_category = 3;
		$sd_view_type = 0;
		if($i3==1 || $i3==2){
			$sd_view_type = 1;
		}
		$data_detail3 = "'',
					'$survey_id', 
					'$i3', 
					'3',
					'', 
					'',
					'$sd_category',
					'$sd_view_type'
			";
		mysql_query("insert into survey_details values(".$data_detail3.")");
	}
	
}

function update($data, $id){
	mysql_query("update survey set ".$data." where survey_id = '$id'");
}

function update_page($i_text, $survey_id, $i, $page_id){
	mysql_query("update survey_details set sd_answer = '$i_text' where survey_id = $survey_id and sd_number = '$i' and sd_page = '$page_id'");
}

function update_landlord($data_landlord, $survey_id, $l){
	mysql_query("update survey_landlord set $data_landlord where survey_id = $survey_id and sl_number = '$l'");
}

function delete($id){
	mysql_query("delete from survey  where survey_id = '$id'");
	mysql_query("delete from survey_details  where survey_id = '$id'");
}

function get_data_survey($survey_id){
	$query = mysql_query("select * from survey where survey_id = '$survey_id'");
	
			
	$result = mysql_fetch_array($query);
	return $result;
}


?>