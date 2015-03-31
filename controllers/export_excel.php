<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/export_excel_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "form";
$title = ucfirst("Export Excel");

switch ($page) {
	 
	
	case 'form':
		get_header();
		
		$i_survey_id = "";
		
		$action = "export_excel.php?page=export_excel";
		
		include '../views/export_excel/form.php';
		get_footer();
	break;

	case 'export_excel':
			
			$date = date("Ymdhms");
			$i_survey_id = get_isset($_POST['i_survey_id']);
			$data_survey = get_data_survey($i_survey_id);
			if($i_survey_id == 0){
				$title = "List_Survey_All_".$date;
			}else{
				$title = $data_survey['survey_id']."_".$data_survey['site_id']."_".$data_survey['site_name']."_".$date;
			}
			
			
			
			$format = create_report($title);
			
			$i_survey_id = get_isset($_POST['i_survey_id']);
			
			include '../views/report_excel/survey/report.php';
			
	break;
}

?>