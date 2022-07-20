<?php
class Keranjang extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("KeranjangModel", "", TRUE);
    }
    public function index()
    {
        $this->load->library('table');
        $this->load->model("KeranjangModel", "", TRUE);
        $data['keranjang'] = $this->KeranjangModel->getKeranjang();
        $this->load->view("keranjang", $data);
    }
    public function tambah()
    {
        $this->load->model('KeranjangModel');
        $data['keranjang'] = $this->KeranjangModel->getKeranjang();
        $this->load->view("tambah_keranjang", $data);
    }
    public function prosesTambah()
    {
        if ($this->KeranjangModel->insertKeranjang()) {
            redirect(site_url("Keranjang"));
        } else {
            redirect(site_url("Keranjang/tambah"));
        }
    }
    public function update($id)
    {
        $this->load->model('KeranjangModel');
        $data['keranjang'] = $this->KeranjangModel->getKeranjangById($id)->row();
        $this->load->view("update_keranjang", $data);
    }
    public function prosesUpdate($id)
    {
        if ($this->KeranjangModel->updateKeranjang($id)) {
            redirect(site_url("Keranjang"));
        } else {
            redirect(site_url("Keranjang/update/$id"));
        }
    }
    public function hapus($id)
    {
        $this->KeranjangModel->deleteKeranjang($id);
        redirect(site_url("Keranjang"));
    }
}
?>