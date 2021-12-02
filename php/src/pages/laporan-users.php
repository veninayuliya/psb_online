<?php
    include "../koneksi.php";
    $laporan = "SELECT email_users, nama, telepon, roles FROM users";
    $hasil = mysqli_query($db,$laporan);
    $data = array();
    while($row = mysqli_fetch_assoc($hasil)){
        array_push($data, $row);
    }
    $judul = "Data User";
    $tgl= "Update : ".date("l, d F Y");
    $header= array(
        array("label"=>"Email User", "length"=>50, "align"=>"L"),
        array("label"=>"Nama User", "length"=>60, "align"=>"L"),
        array("label"=>"Telepon", "length"=>35, "align"=>"L"),
        array("label"=>"Roles", "length"=>35, "align"=>"L"),
    );
    require ("../fpdf16/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage('P','A4','C');
    $pdf->SetFont('arial','B','15');
    $pdf->Cell(0, 15, $judul, '0', 1, 'C');
    $pdf->SetFont('arial','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('arial','','12');
    $pdf->SetFillColor(100,149,237);
    $pdf->SetTextColor(255);
    $pdf->setDrawColor(0,0,0);
    
    foreach ($header as $kolom){
        $pdf->Cell($kolom['length'], 8, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf->Ln();
    $pdf->SetFillColor(220,220,220);
    $pdf->SettextColor(0);
    $pdf->SetFont('arial','','11');
    $fill =false;
    foreach ($data as $baris){
        $i= 0;
        foreach ($baris as $cell){
            $pdf->Cell ($header[$i]['length'], 7, $cell, 2, '0', $kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
?>