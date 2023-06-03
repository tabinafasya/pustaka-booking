<?php

class Matakuliah extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        // $this->load->library('form_validation');
        // $this->load->helper('form');
        // $this->load->helper('url');

        // Validasi form jika input field "kode" tidak di isi
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => '❌ Silahkan isi Kode Matakuliah tidak boleh kosong ❌',
            'min_length' => 'Kode Terlalu Pendek'
        ]);

        // Validasi form jika input field "nama" tidak di isi
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => '❌ Silahkan isi Nama matakuliah tidak boleh kosong ❌',
            'min_length' => 'Nama Terlalu Pendek'
        ]);

        // Validasi form jika select option SKS tidak dipilih
        $this->form_validation->set_rules(
            'sks',
            'Pilih SKS',
            'required',
            [
                'required' => "❌ Silahkan Pilih SKS tidak boleh kosong ❌"
            ]
        );


        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
