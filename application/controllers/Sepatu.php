<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sepatu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelSepatu');
  }
  public function index()
  {
    $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required',[
      'required' => 'Nama Pembeli Harus Di isi!!'
    ]);
    
    $this->form_validation->set_rules('nohp', 'No. Handphone', 'required',[
      'required' => 'No. Handphone Harus Di isi!!'
    ]);
    if($this->form_validation->run() == FALSE) {
      $data['merk'] = ['Nike', 'Adidas','Kickers','Eiger','Bucherri'];
      $this->load->view('sepatu/v_input', $data);
    }else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nohp' => $this->input->post('nohp'),
        'merk' => $this->input->post('merk'),
        'ukuran' => $this->input->post('ukuran'),
        'harga' => $this->ModelSepatu->proses($this->input->post('merk'))
      ];
      $this->load->view('sepatu/v_output', $data);
    }
  }
}