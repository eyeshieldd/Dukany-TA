<?php
class laporansewa extends ci_controller{
    
        function __construct() {
        parent::__construct();
        $this->load->model(array('model_barangsewa','model_transaksisewa','model_laporansewa'));
    }
    
    function index()
    {
        
            if(isset($_POST['submit']))
        {
            $tanggal1       =  $this->input->post('tanggal1');
            $tanggal2       =  $this->input->post('tanggal2');
            $data['record'] =  $this->model_laporansewa->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template','laporan/laporansewa',$data);
        }
        else
        {
            $data['record']=  $this->model_laporansewa->laporan_default();
            $this->template->load('template','laporan/laporansewa',$data);
        }
       
    }
    
    
    
    function laporansewa()
    {
        
        if(isset($_POST['submit']))
        {
            $tanggal1       =  $this->input->post('tanggal1');
            $tanggal2       =  $this->input->post('tanggal2');
            $data['record'] =  $this->model_transaksisewa->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template','laporan/laporansewa',$data);
        }
        else
        {
            $data['record']=  $this->model_transaksisewa->laporan_default();
            $this->template->load('template','laporan/laporansewa',$data);
        }
    }
    
    
    function excel()
    {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporantransaksi.xls");
        $data['record']=  $this->model_laporansewa->laporan_default();
        $this->load->view('laporan/laporan_excellsewa',$data);
    }
    
    function pdf()
    {

        $this->load->library('cfpdf');
        $pdf=new FPDF('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont       ('Arial','B','L');
        $pdf->SetFontSize   (14);
        $pdf->Text          (10, 10, 'LAPORAN TRANSAKSI');
        $pdf->SetFont       ('Arial','B','L');
        $pdf->SetFontSize   (10);
        $pdf->Cell          (10, 10,'','',1);
        $pdf->Cell          (10, 7, 'No'                 , 1,0);
        $pdf->Cell          (30, 7, 'No Transaksi'       , 1,0);
        $pdf->Cell          (34, 7, 'Tanggal Transaksi'  , 1,0);
        $pdf->Cell          (40, 7, 'Nama kasir'         , 1,0);
        $pdf->Cell          (35, 7, 'Nama Barang'        , 1,0);
        $pdf->Cell          (27, 7, 'Banyaknya'          , 1,0);
        $pdf->Cell          (30, 7, 'Harga'              , 1,0);
        $pdf->Cell          (38, 7, 'Total'              , 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_laporansewa->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no,                  1,0, 'C');
            $pdf->Cell(30, 7, $r->no_nota,          1,0);
            $pdf->Cell(34, 7, $r->tanggal,          1,0);
            $pdf->Cell(40, 7, $r->nama_lengkap,     1,0);
            $pdf->Cell(35, 7, $r->nama_barangsewa,  1,0);
            $pdf->Cell(27, 7, $r->lama_sewa,           1,0);
            $pdf->Cell(30, 7, $r->harga_sewa,       1,0);
            $pdf->Cell(38, 7, $r->lama_sewa*$r->harga_sewa,            1,1);
            $no++;
            $total=$total+$r->lama_sewa*$r->harga_sewa;
        }
        // end
        $pdf->Cell(206,7,'Total',1,0,'R');
        $pdf->Cell(38,7,$total,1,0);
        $pdf->Output();

    }
}