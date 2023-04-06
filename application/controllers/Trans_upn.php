<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trans_upn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('trans_upn_model');
        $this->load->model('bus_model');
        $this->load->model('kondektur_model');
        $this->load->model('driver_model');
    }

    public function index()
    {
        $data['page_title'] = 'Trans UPN';
        $data['curr_page'] = 'trans_upn';
        // Add items
        $breadcrumb_items = [
            'Admin' => '/',
            'Trans UPN' => 'trans_upn',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $data['trans_upns'] = $this->trans_upn_model->get_all();
        $this->view_admin->load('trans_upn/index', $data);
    }

    public function add()
    {
        $data['page_title'] = 'Trans UPN';
        $data['curr_page'] = 'trans_upn';
        $data['buses'] = $this->bus_model->get();
        $data['drivers'] = $this->driver_model->get();
        $data['kondekturs'] = $this->kondektur_model->get();

        $breadcrumb_items = [
            'Admin' => '/',
            'Trans UPN' => 'trans_upn',
            'tambah Data Trans UPN' => 'add',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'id_kondektur' => $input['id_kondektur'],
                'id_bus' => $input['id_bus'],
                'id_driver' => $input['id_driver'],
                'jumlah_km' => $input['jumlah_km'],
                'tanggal' => $input['tanggal'],
            ];
            $this->trans_upn_model->add($formfields);

            return redirect('trans_upn');
        } else {
            // print_r($data);
            $this->view_admin->load('trans_upn/add', $data);
        }
    }

    public function update($id)
    {
        if (!$this->trans_upn_model->get($id)) {
            return redirect('trans_upn');
        }

        $data['page_title'] = 'Trans UPN';
        $data['curr_page'] = 'trans_upn';
        $data['trans_upn'] = $this->trans_upn_model->get($id);
        $data['buses'] = $this->bus_model->get();
        $data['drivers'] = $this->driver_model->get();
        $data['kondekturs'] = $this->kondektur_model->get();

        $breadcrumb_items = [
            'Admin' => '/',
            'Trans UPN' => 'trans_upn',
            'Update Data Trans UPN' => 'update',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'id_kondektur' => $input['id_kondektur'],
                'id_bus' => $input['id_bus'],
                'id_driver' => $input['id_driver'],
                'jumlah_km' => $input['jumlah_km'],
                'tanggal' => $input['tanggal'],
            ];
            $this->trans_upn_model->update($formfields, $id);

            return redirect('trans_upn');
        } else {
            $this->view_admin->load('trans_upn/update', $data);
        }
    }

    public function delete($id)
    {
        if (!$this->trans_upn_model->get($id)) {
            return redirect('trans_upn');
        }
        $this->trans_upn_model->delete($id);
        redirect('trans_upn');
    }
}
