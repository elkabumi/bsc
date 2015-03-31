<?php

function read_page($survey_id, $sd_number, $sd_page){
	$query = mysql_query("select sd_answer
			from survey_details
			where survey_id = '$survey_id' and sd_number = '$sd_number' and sd_page = '$sd_page'");
	
			
	$result = mysql_fetch_array($query);
	return $result['sd_answer'];
}


function get_data_survey($survey_id){
	$query = mysql_query("select * from survey where survey_id = '$survey_id'");
	
			
	$result = mysql_fetch_array($query);
	return $result;
}

?>
