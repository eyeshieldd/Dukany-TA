<?php
class transaksisewa extends ci_controller{
    
        function __construct() {
        parent::__construct();
        $this->load->model(array('model_barangsewa','model_transaksisewa'));
        $this->model_transaksisewa->getsecurity();
    }
    
    function index()
    {
        if(isset($_POST['submit']))
        {
            $this->model_transaksisewa->simpan_barang();
            redirect('transaksisewa');
        }
        else
        {

            $data['barang']= $this->model_barangsewa->lihat_data();
            $data['detail']= $this->model_transaksisewa->tampilkan_detail_transaksi()->result();
            $this->template->load('template','transaksisewa/transaksisewa',$data);
        }
    }
    
    
    function hapusitem()
    {
        $id=  $this->uri->segment(3);
        $this->model_transaksisewa->hapusitem($id);
        redirect('transaksisewa');
    }
    
    
    function selesai_belanja()
    {

        $tanggal =  date('YmdHis');      
        $user    =  $this->session->userdata('username');
        $id_kasir=  $this->db->get_where('kasir',array('username'=>$user))->row_array();
        $no_nota =  date('YmdHis');
        $status  =  '0';
        $data    =array('id_kasir'=>$id_kasir['id_kasir'],
                        'no_nota' =>$no_nota,
                        'tanggal' =>$tanggal
                        );

                        $data1    =array('status'=>$status);

                        $data2    =array('no_nota'=>$no_nota);
                

        $this->model_transaksisewa->selesai_belanja($data,$data1,$data2);
        redirect('transaksisewa');

        
       

        // $data2 = array(
        // 'transaksisewadetail' => 'transaksisewadetail', // pass the real table name
        // 'status' => 1,
        // 'no_nota' => $this->input->post('no_nota')
        //     );

        //     $this->load->model_transaksisewa('Updmodel'); // load the model first
        //     if($this->Updmodel->upddata($data2)) // call the method from the model
        //     {
        //         // update successful
        //     }
        //     else
        //     {
        //         // update not successful
        //     }

     
    }
    
    
    // function laporan()
    // {
        
    //     if(isset($_POST['submit']))
    //     {
    //         $tanggal1       =  $this->input->post('tanggal1');
    //         $tanggal2       =  $this->input->post('tanggal2');
    //         $data['record'] =  $this->model_transaksisewa->laporan_periode($tanggal1,$tanggal2);
    //         $this->template->load('template','transaksisewa/laporan',$data);
    //     }
    //     else
    //     {
    //         $data['record']=  $this->model_transaksisewa->laporan_default();
    //         $this->template->load('template','transaksi/laporan',$data);
    //     }
    // }
    
    
    // function excel()
    // {
    //     header("Content-type=appalication/vnd.ms-excel");
    //     header("content-disposition:attachment;filename=laporantransaksi.xls");
    //     $data['record']=  $this->model_transaksisewa->laporan_default();
    //     $this->load->view('transaksi/laporan_excel',$data);
    // }
    
    // function pdf()
    // {

    //     $this->load->library('cfpdf');
    //     $pdf=new FPDF('L','mm','A4');
    //     $pdf->AddPage();
    //     $pdf->SetFont       ('Arial','B','L');
    //     $pdf->SetFontSize   (14);
    //     $pdf->Text          (10, 10, 'LAPORAN TRANSAKSI');
    //     $pdf->SetFont       ('Arial','B','L');
    //     $pdf->SetFontSize   (10);
    //     $pdf->Cell          (10, 10,'','',1);
    //     $pdf->Cell          (10, 7, 'No'                 , 1,0);
    //     $pdf->Cell          (30, 7, 'No Transaksi'       , 1,0);
    //     $pdf->Cell          (34, 7, 'Tanggal Transaksi'  , 1,0);
    //     $pdf->Cell          (40, 7, 'Nama kasir'         , 1,0);
    //     $pdf->Cell          (35, 7, 'Nama Barang'        , 1,0);
    //     $pdf->Cell          (27, 7, 'Banyaknya'          , 1,0);
    //     $pdf->Cell          (30, 7, 'Harga'              , 1,0);
    //     $pdf->Cell          (38, 7, 'Total'              , 1,1);
    //     // tampilkan dari database
    //     $pdf->SetFont('Arial','','L');
    //     $data=  $this->model_transaksisewa->laporan_default();
    //     $no=1;
    //     $total=0;
    //     foreach ($data->result() as $r)
    //     {
    //         $pdf->Cell(10, 7, $no,                  1,0, 'C');
    //         $pdf->Cell(30, 7, $r->no_nota,          1,0);
    //         $pdf->Cell(34, 7, $r->tanggal,          1,0);
    //         $pdf->Cell(40, 7, $r->nama_lengkap,     1,0);
    //         $pdf->Cell(35, 7, $r->nama_barangsewa,  1,0);
    //         $pdf->Cell(27, 7, $r->jumlah,           1,0);
    //         $pdf->Cell(30, 7, $r->harga_sewa,       1,0);
    //         $pdf->Cell(38, 7, $r->jumlah*$r->harga_sewa,            1,1);
    //         $no++;
    //         $total=$total+$r->jumlah*$r->harga_sewa;
    //     }
    //     // end
    //     $pdf->Cell(206,7,'Total',1,0,'R');
    //     $pdf->Cell(38,7,$total,1,0);
    //     $pdf->Output();

    // }
}