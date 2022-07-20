<?php
class KeranjangModel extends CI_Model{
    function getKeranjang()
    {
        return $this->db->get("keranjang");
    }

    function insertKeranjang()
    {
        $keranjang = array(
            "nama_barang" => $this->input->post("nama"),
            "jum_barang" => $this->input->post("jumlah"),
            "harga_per_pcs" => $this->input->post("harga"),
            "total_item" => $this->input->post("item"),
            "total_bayar" => $this->input->post("total"),
        );
        return $this->db->insert('Keranjang', $keranjang);
    }

    function getKeranjangById($id)
    {
        $this->db->where("id_keranjang", $id);
        return $this->db->get('Keranjang');
    }
    function updateKeranjang($id)
    {
        $keranjang = array(
            "nama_barang" => $this->input->post("nama"),
            "jum_barang" => $this->input->post("jumlah"),
            "harga_per_pcs" => $this->input->post("harga"),
            "total_item" => $this->input->post("item"),
            "total_bayar" => $this->input->post("total"),
        );
        $this->db->where("id_keranjang", $id);
        return $this->db->update("Keranjang", $keranjang);
    }
    function deleteKeranjang($id)
    {
        $this->db->where("id_keranjang", $id);
        return $this->db->delete("Keranjang");
    }
}
?>