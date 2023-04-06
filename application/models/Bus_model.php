<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bus_model extends CI_Model
{
    public function get_total()
    {
        return $this->db->get('bus')->num_rows();
    }
    public function get_total_per_status($status)
    {
        return $this->db->where('status', $status)->get('bus')->num_rows();
    }

    public function get($id = null)
    {
        $query = $this->db->select('id_bus, plat, status, (select sum(jumlah_km) from trans_upn where trans_upn.id_bus = bus.id_bus) as jumlah_km')
            ->from('bus');
        if ($id) {
            return $query->where('id_bus', $id)->get()->result_array()[0];
        }
        return $query->get()->result_array();
    }

    public function get_status($status)
    {
        $query = $this->db->select('id_bus, plat, status, (select sum(jumlah_km) from trans_upn where trans_upn.id_bus = bus.id_bus) as jumlah_km')
            ->from('bus')
            ->where('status', $status);
        return $query->get()->result_array();
    }

    public function get_aktif()
    {
        return $this->get_status(1);
    }

    public function get_cadangan()
    {
        return $this->get_status(2);
    }
    public function get_rusak()
    {
        return $this->get_status(3);
    }

    public function add($data)
    {
        $this->db->insert('bus', $data);
    }

    public function update($data, $id)
    {
        $this->db->update('bus', $data, array('id_bus' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('bus', array('id_bus' => $id));
    }

    // PERHITUNGAN
    public function total_km()
    {
        $query = $this->db->select('t.id_bus, b.plat, b.status, sum(t.jumlah_km) as jumlah_km')
            ->from('trans_upn as t')
            ->join('bus as b', 't.id_bus = b.id_bus')
            ->group_by('t.id_bus')
            ->get();

        return $query->result_array();
    }
}
