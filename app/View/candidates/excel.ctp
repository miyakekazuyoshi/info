<?php
	App::import('Vendor','PHPExcel_writer_IWriter',array('file' => 'phpexcel/PHPExcel/Writer/IWriter.php'));
	App::import('Vender','PHPExcel_Writer_Abstract',array('file' => 'phpexcel/PHPExcel/Writer/Abstract.php'));
	App::import('Vender','PHPExcel_Writer_Excel5',array('file' => 'phpexcel/PHPExcel/Writer/Excel5.php'));
	App::import('Vender','PHPExcel_Render_Excel5',array('file' => 'phpexcel/PHPExcel/Render/Excel5.php'));

	$objRender = PHPExcel_IOFactory::createRender('Excel5');

	$template = TMP . 'phpexcel/';
	$template_path = $template . 'template.xls';
	$PHPExcel = $objRender->load($template_path);

	$PHPExcel->setActiveSheetIndex(0);
	$sheet = $PHPExcel->getActiveSheet();

	$sheet->setCellValue('A1',$candidate['Candidate']['id']);

	$filename = 'output.xls';

	Configre::write('debug',0);
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment;filename="' . $filename . '"');
	header('Cache-Control: max-age=0');
	$objWriter = new PHPExcel_Writer_Excel5($PHPExcel);
	$objWRiter->save('php://output');
?>