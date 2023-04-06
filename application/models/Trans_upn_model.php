<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trans_upn_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('trans_upn')->result_array();
    }

    public function get($id = null)
    {
        if ($id) {
            return $this->db->get_where('trans_upn', array('id_trans_upn' => $id))->result_array()[0];
        }
        return $this->db->get('trans_upn')->result_array();
    }

    public function add($data)
    {
        $this->db->insert('trans_upn', $data);
    }

    public function update($data, $id)
    {
        $this->db->update('trans_upn', $data, array('id_trans_upn' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('trans_upn', array('id_trans_upn' => $id));
    }

    // PERHITUNGAN TOTAL KM
    public function total_km_bus($id)
    {
        return $this->db->select_sum("jumlah_km")
            ->from('trans_upn')
            ->where('id_bus', $id)
            ->get()
            ->result();
    }

    public function get_latest()
    {
        return $this->db->order_by('tanggal', 'desc')->get('trans_upn')->result_array();
    }
}
