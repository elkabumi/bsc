<?php
set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf");

require_once "dompdf_config.inc.php";

$dompdf = new DOMPDF();

$html = '
<html>
 <body>
  <h1>Hello Dompdf

  </h1>

<div style="text-align: center; margin-top: 40%;">
<img style="width: 75%;" src="www/images/dompdf_simple.png"/>
<br/>
<span>The PHP 5 HTML to PDF converter</span>
</div>
 </body>
</html>';

$dompdf->set_paper("A4");
 
// load the html content
$dompdf->load_html($html);
$dompdf->render();
$canvas = $dompdf->get_canvas();
$font = Font_Metrics::get_font("helvetica", "bold");
$canvas->page_text(16, 800, "Page: {PAGE_NUM} of {PAGE_COUNT}", $font, 8, array(0,0,0));
$dompdf->stream("sample.pdf",array("Attachment"=>0));