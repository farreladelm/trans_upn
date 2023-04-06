<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kondektur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kondektur_model');
    }

    public function index()
    {
        $data['page_title'] = 'Kondektur';
        $data['curr_page'] = 'kondektur';
        // Add items
        $breadcrumb_items = [
            'Admin' => '/',
            'Kondektur' => 'kondektur',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $data['kondekturs'] = $this->kondektur_model->get();
        $this->view_admin->load('kondektur/index', $data);
    }

    public function add()
    {
        $data['page_title'] = 'Kondektur';
        $data['curr_page'] = 'kondektur';

        $breadcrumb_items = [
            'Admin' => '/',
            'Kondektur' => 'kondektur',
            'tambah Data Kondektur' => 'add',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'nama' => $input['nama'],
            ];
            $this->kondektur_model->add($formfields);

            return redirect('kondektur');
        } else {
            $this->view_admin->load('kondektur/add', $data);
        }
    }

    public function update($id)
    {
        if (!$this->kondektur_model->get($id)) {
            return redirect('kondektur');
        }

        $data['page_title'] = 'Kondektur';
        $data['curr_page'] = 'kondektur';
        $data['kondektur'] = $this->kondektur_model->get($id);

        $breadcrumb_items = [
            'Admin' => '/',
            'Kondektur' => 'kondektur',
            'Update Data Kondektur' => 'update',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();

        $input = $this->input->post();

        if ($input) {
            $formfields = [
                'nama' => $input['nama'],
            ];
            $this->kondektur_model->update($formfields, $id);

            return redirect('kondektur');
        } else {
            $this->view_admin->load('kondektur/update', $data);
        }
    }

    public function delete($id)
    {
        if (!$this->kondektur_model->get($id)) {
            return redirect('kondektur');
        }
        $this->kondektur_model->delete($id);
        redirect('kondektur');
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
        $data['page_title'] = 'Kondektur';
        $data['curr_page'] = 'kondektur';
        // Add items
        $breadcrumb_items = [
            'Admin' => '/',
            'Kondektur' => 'kondektur',
        ];
        $this->breadcrumb->add_item($breadcrumb_items);

        // Generate breadcrumb
        $data['content_breadcrumb'] = $this->breadcrumb->generate();
        $data['kondekturs'] = $this->kondektur_model->total_income_per_month($month);
        $data['month'] = $this->month($month);
        $data['month_num'] = $month;
        $this->view_admin->load('kondektur/pendapatan', $data);
    }
}
