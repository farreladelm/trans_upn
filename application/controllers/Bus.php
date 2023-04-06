<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bus_model');
        $this->load->model('trans_upn_model');
    }

    public function table($data)
    {
        $data['page_title'] = 'Bus';
        $data['curr_page'] = 'bus';
        // Add items
        $breadcrumb_items = [
            'Admin' => '/',
            'Bus' => 'bus',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();


        $this->view_admin->load('bus/index', $data);
    }

    public function index()
    {
        $data['buses'] = $this->bus_model->get();
        $this->table($data);
    }

    public function aktif()
    {
        $data['buses'] = $this->bus_model->get_aktif();
        $this->table($data);
    }

    public function cadangan()
    {
        $data['buses'] = $this->bus_model->get_cadangan();
        $this->table($data);
    }

    public function rusak()
    {
        $data['buses'] = $this->bus_model->get_rusak();
        $this->table($data);
    }

    public function add()
    {
        $data['page_title'] = 'Bus';
        $data['curr_page'] = 'bus';

        $breadcrumb_items = [
            'Admin' => '/',
            'Bus' => 'bus',
            'tambah Data Bus' => 'add',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'plat' => $input['plat'],
                'status' => $input['status']
            ];
            $this->bus_model->add($formfields);

            return redirect('bus');
        } else {
            $this->view_admin->load('bus/add', $data);
        }
    }

    public function update($id)
    {
        if (!$this->bus_model->get($id)) {
            return redirect('bus');
        }

        $data['page_title'] = 'Bus';
        $data['curr_page'] = 'bus';
        $data['bus'] = $this->bus_model->get($id);

        $breadcrumb_items = [
            'Admin' => '/',
            'Bus' => 'bus',
            'Update Data Bus' => 'update',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'plat' => $input['plat'],
                'status' => $input['status']
            ];
            $this->bus_model->update($formfields, $id);


            return redirect('bus');
        } else {
            $this->view_admin->load('bus/update', $data);
        }
    }

    public function delete($id)
    {
        if (!$this->bus_model->get($id)) {
            return redirect('bus');
        }

        $this->bus_model->delete($id);
        redirect('bus');
    }
}
