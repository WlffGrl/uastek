<?php
Class Barang extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("BarangModel", "", TRUE);
    }
    public function index()
    {
        $this->load->library('table');
        $this->load->model("BarangModel", "", TRUE);
        $data['barang'] = $this->BarangModel->getBarang();
        $this->load->view("barang", $data);
    }
    public function tambah()
    {
        $this->load->model('BarangModel');
        $data['barang'] = $this->BarangModel->getBarang();
        $this->load->view("tambah_Barang", $data);
    }
    public function prosesTambah()
    {
        if ($this->BarangModel->insertBarang()) {
            redirect(site_url("Barang"));
        } else {
            redirect(site_url("Barang/tambah"));
        }
    }
    public function update($id)
    {
        $this->load->model('BarangModel');
        $data['barang'] = $this->BarangModel->getBarangById($id)->row();
        $this->load->view("update_barang", $data);
    }
    public function prosesUpdate($id)
    {
        if ($this->BarangModel->updateBarang($id)) {
            redirect(site_url("Barang"));
        } else {
            redirect(site_url("Barang/update/$id"));
        }
    }
    public function hapus($id)
    {
        $this->BarangModel->deleteBarang($id);
        redirect(site_url("barang"));
    }

}
?>