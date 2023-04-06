<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Driver extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('driver_model');
    }

    public function index()
    {
        $data['page_title'] = 'Driver';
        $data['curr_page'] = 'driver';
        // Add items
        $breadcrumb_items = [
            'Admin' => '/',
            'Driver' => 'driver',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $data['drivers'] = $this->driver_model->get();
        $this->view_admin->load('driver/index', $data);
    }

    public function add()
    {
        $data['page_title'] = 'Driver';
        $data['curr_page'] = 'driver';

        $breadcrumb_items = [
            'Admin' => '/',
            'Driver' => 'driver',
            'tambah Data Driver' => 'add',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'nama' => $input['nama'],
                'no_sim' => $input['no_sim'],
                'alamat' => $input['alamat']
            ];
            $this->driver_model->add($formfields);

            return redirect('driver');
        } else {
            $this->view_admin->load('driver/add', $data);
        }
    }

    public function update($id)
    {
        if (!$this->driver_model->get($id)) {
            return redirect('driver');
        }

        $data['page_title'] = 'Driver';
        $data['curr_page'] = 'driver';
        $data['driver'] = $this->driver_model->get($id);

        $breadcrumb_items = [
            'Admin' => '/',
            'Driver' => 'driver',
            'Update Data Driver' => 'update',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'nama' => $input['nama'],
                'no_sim' => $input['no_sim'],
                'alamat' => $input['alamat']
            ];
            $this->driver_model->update($formfields, $id);

            return redirect('driver');
        } else {
            $this->view_admin->load('driver/update', $data);
        }
    }

    public function delete($id)
    {
        if (!$this->driver_model->get($id)) {
            return redirect('driver');
        }
        $this->driver_model->delete($id);
        redirect('driver');
    }

    public function month($monthNum)
    {
        $dateObj = DateTime::createFromFormat('!m', $monthNum);
        $monthName = $dateObj->format('F'); // March
        return $monthName;
    }

    public function pendapatan()
    {
        $month = $this->input->get('bulan');
        $data['page_title'] = 'Driver';
        $data['curr_page'] = 'driver';
        // Add items
        $breadcrumb_items = [
            'Admin' => '/',
            'Driver' => 'driver',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();
        $data['drivers'] = $this->driver_model->total_income_per_month($month);
        $data['month'] = $this->month($month);
        $data['month_num'] = $month;
        $this->view_admin->load('driver/pendapatan', $data);
    }
}
