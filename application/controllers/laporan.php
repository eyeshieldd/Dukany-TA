<?php
class laporan extends ci_controller{
    
        function __construct() {
        parent::__construct();
        $this->load->model(array('model_barangjual','model_transaksijual','model_laporan'));
    }
    
    function index()
    {
        
            if(isset($_POST['submit']))
        {
            $tanggal1       =  $this->input->post('tanggal1');
            $tanggal2       =  $this->input->post('tanggal2');
            $data['record'] =  $this->model_laporan->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template','laporan/laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_laporan->laporan_default();
            $this->template->load('template','laporan/laporan',$data);
        }
       
    }
    
    
    
    function laporan()
    {
        
        if(isset($_POST['submit']))
        {
            $tanggal1       =  $this->input->post('tanggal1');
            $tanggal2       =  $this->input->post('tanggal2');
            $data['record'] =  $this->model_transaksijual->laporan_periode($tanggal1,$tanggal2);
            $this->template->load('template','transaksijual/laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_transaksijual->laporan_default();
            $this->template->load('template','transaksi/laporan',$data);
        }
    }
    
    
    function excel()
    {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporantransaksi.xls");
        $data['record']=  $this->model_laporan->laporan_default();
        $this->load->view('laporan/laporan_excel',$data);
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
        $data=  $this->model_laporan->laporan_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no,                  1,0, 'C');
            $pdf->Cell(30, 7, $r->no_nota,          1,0);
            $pdf->Cell(34, 7, $r->tanggal,          1,0);
            $pdf->Cell(40, 7, $r->nama_lengkap,     1,0);
            $pdf->Cell(35, 7, $r->nama_barangjual,  1,0);
            $pdf->Cell(27, 7, $r->jumlah,           1,0);
            $pdf->Cell(30, 7, $r->harga_jual,       1,0);
            $pdf->Cell(38, 7, $r->jumlah*$r->harga_jual,            1,1);
            $no++;
            $total=$total+$r->jumlah*$r->harga_jual;
        }
        // end
        $pdf->Cell(206,7,'Total',1,0,'R');
        $pdf->Cell(38,7,$total,1,0);
        $pdf->Output();

    }
}