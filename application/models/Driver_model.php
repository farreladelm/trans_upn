<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Driver_model extends CI_Model
{
    public function get_total()
    {
        return $this->db->get('driver')->num_rows();
    }

    public function get($id = null)
    {
        if ($id) {
            return $this->db->get_where('driver', array('id_driver' => $id))->result_array()[0];
        }
        return $this->db->get('driver')->result_array();
    }

    public function add($data)
    {
        $this->db->insert('driver', $data);
    }

    public function update($data, $id)
    {
        $this->db->update('driver', $data, array('id_driver' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('driver', array('id_driver' => $id));
    }

    // PENDAPATAN DRIVER
    public function total_income_per_month($month)
    {
        $query = $this->db->query("select driver.id_driver, driver.nama, sum(trans_upn.jumlah_km) as jumlah_km, sum(trans_upn.jumlah_km) * 3000 as pendapatan
        from trans_upn, driver 
        where trans_upn.id_driver = driver.id_driver 
        and month(trans_upn.tanggal) = '$month'
        GROUP by driver.id_driver
        ");

        return $query->result_array();
    }
}
