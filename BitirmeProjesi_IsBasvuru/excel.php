<?php
    require_once 'baglan.php';
    $baglan = baglan();

    require_once 'Classes/PHPExcel.php';

    $excel = new PHPExcel();
    $excel->getActiveSheet()->setTitle("Başvuran Bilgileri");

    $excel->getActiveSheet()->setCellValue('A1','Ad');
    $excel->getActiveSheet()->setCellValue('B1','Soyad');
    $excel->getActiveSheet()->setCellValue('C1','Doğum Yeri');
    $excel->getActiveSheet()->setCellValue('D1','Doğum Tarihi');
    $excel->getActiveSheet()->setCellValue('E1','E-posta');
    $excel->getActiveSheet()->setCellValue('F1','Cep Telefonu');
    $excel->getActiveSheet()->setCellValue('G1','Ev Telefonu');
    $excel->getActiveSheet()->setCellValue('H1','Okul Adı');
    $excel->getActiveSheet()->setCellValue('I1','Mezuniyet Yılı');
    $excel->getActiveSheet()->setCellValue('J1','Adres');
    $excel->getActiveSheet()->setCellValue('K1','Cinsiyet');
    $excel->getActiveSheet()->setCellValue('L1','Medeni Hali');
    $excel->getActiveSheet()->setCellValue('M1','Ehliyet');
    $excel->getActiveSheet()->setCellValue('N1','Askerlik');
    $excel->getActiveSheet()->setCellValue('O1','Başvuru Tarihi');
    $excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
    $excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);


    $sorgu = $baglan -> prepare("select * from application order by id asc");
    $sorgu -> execute();
    
    $s=2;
    foreach ($sorgu as $satir){


        $excel->getActiveSheet()->setCellValue('A'.$s,$satir['name']);
        $excel->getActiveSheet()->setCellValue('B'.$s,$satir['surname']);
        $excel->getActiveSheet()->setCellValue('C'.$s,$satir['birth_place']);
        $excel->getActiveSheet()->setCellValue('D'.$s,$satir['date_of_birth']);
        $excel->getActiveSheet()->setCellValue('E'.$s,$satir['email']);
        $excel->getActiveSheet()->setCellValue('F'.$s,$satir['mobile_phone']);
        $excel->getActiveSheet()->setCellValue('G'.$s,$satir['home_phone']);
        $excel->getActiveSheet()->setCellValue('H'.$s,$satir['school_name']);
        $excel->getActiveSheet()->setCellValue('I'.$s,$satir['graduation_year']);
        $excel->getActiveSheet()->setCellValue('J'.$s,$satir['address'] );
        $excel->getActiveSheet()->setCellValue('K'.$s,$satir['gender']);
        $excel->getActiveSheet()->setCellValue('L'.$s,$satir['civil_status'] );
        $excel->getActiveSheet()->setCellValue('M'.$s,$satir['driving_license'] );
        $excel->getActiveSheet()->setCellValue('N'.$s,$satir['soldiering'] );
        $excel->getActiveSheet()->setCellValue('O'.$s,$satir['application_date']);
        
        $s++;

    }

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="İşBaşvuranBilgileri.xlsx"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');

    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); 
    header ('Cache-Control: cache, must-revalidate'); 
    header ('Pragma: public'); 

    $save = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $save->save('php://output');
    exit;
