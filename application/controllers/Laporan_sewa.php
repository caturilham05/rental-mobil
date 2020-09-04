<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_sewa extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['sewa_m', 'mobil_m', 'simpel_sewa', 'driver_m', 'user_m']);
    }

    public function index(){
        $data['row'] = $this->sewa_m->get_laporan();
        $this->template->load('template', 'admin/laporan/laporan_data', $data);
        
    }

    function downloadById($id){
        $data['row'] = $this->sewa_m->get_laporan($id)->row();
        $html = $this->load->view('admin/laporan/download-id', $data, TRUE);
        $this->fungsi->PdfGenerator($html, 'Laporan-Sewa-'.$data['row']->name, 'A4', 'portrait');
    }

    public function downloadAll(){
        $this->load->library('pdf');
        
        $data['download'] = $this->sewa_m->get_laporan()->result();
        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->pdf->set_paper($paper_size, $orientation);
        $this->pdf->filename = 'Laporan-Sewa.pdf';
        $this->pdf->load_view('admin/laporan/download', $data);

    }
}