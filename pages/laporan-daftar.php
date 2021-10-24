<?php
    include "../koneksi.php";
    $laporan = "SELECT nama_siswa, jk, alamat, nilai, telepon, statuss FROM siswa";
    $hasil = mysqli_query($db,$laporan);
    $data = array();
    while($row = mysqli_fetch_assoc($hasil)){
        array_push($data, $row);
    }
    $judul = "Data Pendaftaran";
    $tgl= "Update : ".date("l, d F Y");
    $header= array(
        array("label"=>"Nama Siwa", "length"=>30, "align"=>"C"),
        array("label"=>"Jenis Kelamin", "length"=>30, "align"=>"C"),
        array("label"=>"Alamat", "length"=>50, "align"=>"C"),
        array("label"=>"Nilai", "length"=>15, "align"=>"C"),
        array("label"=>"Telepon", "length"=>25, "align"=>"C"),
        array("label"=>"Status", "length"=>35, "align"=>"C"),
    );
    require ("../fpdf16/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage('P','A4','C');
    $pdf->SetFont('arial','B','11');
    $pdf->Cell(0, 15, $judul, '0', 1, 'C');
    $pdf->SetFont('arial','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('arial','','12');
    $pdf->SetFillColor(240,128,128);
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