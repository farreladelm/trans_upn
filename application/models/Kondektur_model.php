<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kondektur_model extends CI_Model
{
    public function get_total()
    {
        return $this->db->get('kondektur')->num_rows();
    }

    public function get($id = null)
    {
        if ($id) {
            return $this->db->get_where('kondektur', array('id_kondektur' => $id))->result_array()[0];
        }
        return $this->db->get('kondektur')->result_array();
    }

    public function add($data)
    {
        $this->db->insert('kondektur', $data);
    }

    public function update($data, $id)
    {
        $this->db->update('kondektur', $data, array('id_kondektur' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('kondektur', array('id_kondektur' => $id));
    }

    // PENDAPATAN KONDEKTUR
    public function total_income_per_month($month)
    {
        $query = $this->db->query("select kondektur.id_kondektur, kondektur.nama, sum(trans_upn.jumlah_km) as jumlah_km, sum(trans_upn.jumlah_km) * 1500 as pendapatan
        from trans_upn, kondektur 
        where trans_upn.id_kondektur = kondektur.id_kondektur 
        and month(trans_upn.tanggal) = '$month'
        GROUP by kondektur.id_kondektur
        ");

        return $query->result_array();
    }
}
