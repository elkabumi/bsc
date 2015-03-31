<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/survey_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Site Survey");

$_SESSION['menu_active'] = 1;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "survey.php?page=form";
		$export_excel_button = "export_excel.php";

		include '../views/survey/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "survey.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
			$action = "survey.php?page=edit&id=$id";
			
			$next_button = "survey.php?page=page&survey_id=$id&page_id=2";
			
		} else{
			
			//inisialisasi
			$row = new stdClass();
			
			$row->site_name = false;
			$row->bsc_name = false;
			$row->site_id = false;
			$row->project = false;
			$row->region = false;
			$row->branch = false;

			$action = "survey.php?page=save";
		}

		include '../views/survey/page1.php';
		get_footer();
	break;
	
	case 'page':
		get_header();

		$survey_id = (isset($_GET['survey_id'])) ? $_GET['survey_id'] : null;
		$page_id = (isset($_GET['page_id'])) ? $_GET['page_id'] : null;
		
		$next_page = $page_id + 1;
		$prev_page = $page_id - 1;
		if($prev_page == 1){
			$prev_button = "survey.php?page=form&id=$survey_id";
		}else{
			$prev_button = "survey.php?page=page&survey_id=$survey_id&page_id=$prev_page";
		}
		$next_button = "survey.php?page=page&survey_id=$survey_id&page_id=$next_page";
		
		if($survey_id){

			$action = "survey.php?page=edit_page&survey_id=$survey_id&page_id=$page_id";
			
		} 
		
		$row = read_id($survey_id);

		switch($page_id){
			case 2: $page_no = 2; include '../views/survey/page2.php'; break;
			case 3: $page_no = 3; include '../views/survey/page3.php'; break;
			default: include '../views/survey/page_not_found.php'; break;
		}
		
		get_footer();
	break;

	case 'save':

		extract($_POST);

		$i_site_name = get_isset($i_site_name);
		$i_bsc_name = get_isset($i_bsc_name);
		$i_site_id = get_isset($i_site_id);
		$i_project = get_isset($i_project);
		$i_region = get_isset($i_region);
		$i_branch = get_isset($i_branch);

			$data = "'',
					'$i_site_name', 
					'$i_bsc_name', 
					'$i_site_id',
					'$i_project', 
					'$i_region', 
					'$i_branch',
					'".$_SESSION['user_id']."',
					'',
					'".date("Y-m-d")."'
			";
			
			//echo $data;

			create($data);
			$survey_id = mysql_insert_id();
			
			create_page($survey_id);
			
			if (isset($_POST['save_button'])) {
				header("Location: survey.php?page=form&id=$survey_id");
			} else if (isset($_POST['next_button'])) {
				header("Location: survey.php?page=page&survey_id=$survey_id&page_id=2");
			}
			
	break;

	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);
		
		if ((isset($_POST['i_search_page']) && $_POST['i_search_page']!="") || isset($_POST['go_button'])) {
			$search_page = $_POST['i_search_page'];
			if($search_page == 1){
				header("Location: survey.php?page=form&id=$id");
			}else{
				header("Location: survey.php?page=page&survey_id=$id&page_id=$search_page");
			}
		}else{ 

		$i_site_name = get_isset($i_site_name);
		$i_bsc_name = get_isset($i_bsc_name);
		$i_site_id = get_isset($i_site_id);
		$i_project = get_isset($i_project);
		$i_region = get_isset($i_region);
		$i_branch = get_isset($i_branch);

		
					$data = "
					site_name = '$i_site_name',
					bsc_name = '$i_bsc_name',
					site_id = '$i_site_id',
					project = '$i_project',
					region = '$i_region',
					branch = '$i_branch',
					update_by_id = '".$_SESSION['user_id']."'
					";

			update($data, $id);
			
			if (isset($_POST['save_button'])) {
				header("Location: survey.php?page=form&id=$id");
			} else if (isset($_POST['next_button'])) {
				header("Location: survey.php?page=page&survey_id=$id&page_id=2");
			}
		}

	break;
	
	case 'edit_page':
	
		$survey_id = (isset($_GET['survey_id'])) ? $_GET['survey_id'] : null;
		$page_id = (isset($_GET['page_id'])) ? $_GET['page_id'] : null;
		
		if ((isset($_POST['i_search_page']) && $_POST['i_search_page']!="") || isset($_POST['go_button'])) {
			$search_page = $_POST['i_search_page'];
			if($search_page == 1){
				header("Location: survey.php?page=form&id=$survey_id");
			}else{
				header("Location: survey.php?page=page&survey_id=$survey_id&page_id=$search_page");
			}
		}else{  

		switch($page_id){
			case 2:
				for($i=1; $i<=14; $i++){
				
					$i_text = get_isset($_POST['i_'.$i]);
					update_page($i_text, $survey_id, $i, $page_id);
									
				}
				
				for($l=1; $l<=5; $l++){
				
					$i_name = get_isset($_POST['i_l_name_'.$l]);
					$i_address = get_isset($_POST['i_l_address_'.$l]);
					$i_phone = get_isset($_POST['i_l_phone_'.$l]);
					$i_fax = get_isset($_POST['i_l_fax_'.$l]);
					$data_landlord = "sl_name = '$i_name',
										sl_address = '$i_address',
										sl_phone = '$i_phone',
										sl_fax = '$i_fax'
									";
					
					update_landlord($data_landlord, $survey_id, $l);
									
				}
			
			if (isset($_POST['save_button'])) {
				header("Location: survey.php?page=page&survey_id=$survey_id&page_id=2");
			} else if (isset($_POST['next_button'])) {
				header("Location: survey.php?page=page&survey_id=$survey_id&page_id=3");
			} else if (isset($_POST['prev_button'])) {
				header("Location: survey.php?page=form&id=$survey_id");
			} else if (isset($_POST['close_button'])) {
				header("Location: survey.php");
			}
			
			break;
			
			case 3:
				for($i=1; $i<=2; $i++){
				
					$path = "../img/survey/";
					$i_img_tmp = $_FILES['i_img_'.$i]['tmp_name'];
					$i_img = ($_FILES['i_img_'.$i]['name']) ? $_FILES['i_img_'.$i]['name'] : "";
		
					if($i_img){
						update_page($i_img, $survey_id, $i, $page_id);
						move_uploaded_file($i_img_tmp, $path.$i_img);

					}
									
				}
				
				$i_text_3 = ($_POST['i_text_3']) ? $_POST['i_text_3'] : "";
				$i_text_4 = ($_POST['i_text_4']) ? $_POST['i_text_4'] : "";
				
				update_page($i_text_3, $survey_id, 3, $page_id);
				update_page($i_text_4, $survey_id, 4, $page_id);
				
				if (isset($_POST['save_button'])) {
					header("Location: survey.php?page=page&survey_id=$survey_id&page_id=3");
				} else if (isset($_POST['prev_button'])) {
					header("Location: survey.php?page=page&survey_id=$survey_id&page_id=2");
				} else if (isset($_POST['close_button'])) {
					header("Location: survey.php");
				}
				
			break;
		}		
		}

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: survey.php?page=list&did=3');

	break;
	
	case 'new_save':
		if (isset($_POST['save_button'])) {
    	//update action
			echo "save";
		} else if (isset($_POST['next_button'])) {
			//delete action
			echo "next";
		} else {
			//no button pressed
			echo "";
		}
	break;
	
	case 'create_pdf':
		
		$survey_id = (isset($_GET['survey_id'])) ? $_GET['survey_id'] : null;
		
		$row = read_id($survey_id);
		
		require_once "../lib/dompdf-master/dompdf_config.inc.php";
		
		$dompdf = new DOMPDF();
		
		$html = '';
		include('../views/report_pdf/survey/page1.php');
		
		$page_no = 2;
		include('../views/report_pdf/survey/page2.php');
		
		$page_no = 3;
		include('../views/report_pdf/survey/page3.php');
		
		$html .= '<body></html>';
		
		$dompdf->set_paper("A4");
		
		$data_survey = get_data_survey($survey_id);
		$date = date("Ymdhms");
		$title = $data_survey['survey_id']."_".$data_survey['site_id']."_".$data_survey['site_name']."_".$date;
		
			
		 
		// load the html content
		$dompdf->load_html($html);
		$dompdf->render();
		$canvas = $dompdf->get_canvas();
		$font = Font_Metrics::get_font("helvetica", "bold");
		$canvas->page_text(16, 800, "Page: {PAGE_NUM} of {PAGE_COUNT}", $font, 8, array(0,0,0));
		$dompdf->stream($title.".pdf",array("Attachment"=>1));
	break;
	
	case 'export_excel':
			
			$title = "list_survey";
			$format = create_report($title);
			
			include '../views/report_excel/survey/report.php';
	break;
	
}

?>