<?php

class Barang extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Barang";
        $data['Brg_Nama'] = $this->model('Barang_Model')->getAllBarang();
        $this->view('templates/header', $data);
        $this->view('Barang/index', $data);
        $this->view('templates/footer');
    }
}
