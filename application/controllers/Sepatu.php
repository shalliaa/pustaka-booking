<?php

class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('form_sepatu.php');
    }
    public function cetak()
    {
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $merk = $this->input->post('merk');
        $ukuran = $this->input->post('ukuran');
        $data = [
            'nama' => $nama,
            'telp' => $telp,
            'merk' => $merk,
            'ukuran' => $ukuran
        ];
        return $this->load->view('data_sepatu', $data);
    }
}
