<?php

class BarangModel extends CI_Model{
    function getBarang()
    {
        return $this->db->get("barang");
    }

    function insertBarang()
    {
        $barang = array(
            "nama_barang" => $this->input->post("nama"),
            "stok_barang" => $this->input->post("stok"),
            "harga_per_pcs" => $this->input->post("harga"),
        );
        return $this->db->insert('Barang', $barang);
    }

    function getBarangById($id)
    {
        $this->db->where("id_barang", $id);
        return $this->db->get('Barang');
    }
    function updateBarang($id)
    {
        $barang = array(
            "nama_barang" => $this->input->post("nama"),
            "stok_barang" => $this->input->post("stok"),
            "harga_per_pcs" => $this->input->post("harga"),
        );
        $this->db->where("id_barang", $id);
        return $this->db->update("Barang", $barang);
    }
    function deleteBarang($id)
    {
        $this->db->where("id_barang", $id);
        return $this->db->delete("Barang");
    }
}

?>