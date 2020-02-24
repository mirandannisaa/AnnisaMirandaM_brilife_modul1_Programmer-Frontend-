<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');

        // membuat halaman baru
        $pdf->AddPage();

        // font
        $pdf->SetFont('Arial','B',16);

        // mencetak string 
        $pdf->Cell(190,7,'BADAN KOORDINASI KELUARGA BERENCANA NASIONAL',0,1,'C');
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,7,'REKAPITULASI PEMAKAI ALAT KONTRASEPSI DI INDONESIA',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'No',1,0);
        $pdf->Cell(85,6,'Provinsi',1,0);
        $pdf->Cell(27,6,'Pemakai Alat Kontrasepsi',1,0);
        $pdf->Cell(25,6,'Jumlah',1,1);
        $pdf->SetFont('Arial','',10);
        $pengguna = $this->db->get('list_pemakai_kontrasepsi')->result();
        foreach ($pengguna as $row){
            $pdf->Cell(20,6,$row->id_list,1,0);
            $pdf->Cell(85,6,$row->nama_provinsi,1,0);
            $pdf->Cell(27,6,$row->nama_kontrasepsi='Pil',1,0);
            $pdf->Cell(25,6,$row->nama_kontrasepsi='Kondom',1,1);
            $pdf->Cell(27,6,$row->nama_kontrasepsi='IUD',1,0);
            $pdf->Cell(25,6,$row->jumlah,1,1); 
        }
        $pdf->Output();
    }
}