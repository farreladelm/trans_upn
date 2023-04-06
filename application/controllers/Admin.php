<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('bus_model');
		$this->load->model('driver_model');
		$this->load->model('kondektur_model');
		$this->load->model('trans_upn_model');
	}
	public function index()
	{
		$data['page_title'] = 'Admin';
		$data['curr_page'] = 'dashboard';
		$data['bus_status'] = 3;
		$data['total_bus'] = $this->bus_model->get_total();
		if ($this->input->get('bus') || $this->input->get('bus') === 0) {
			$data['total_bus'] = $this->bus_model->get_total_per_status($this->input->get('bus'));
			$data['bus_status'] = $this->input->get('bus');
		} else {
			$data['total_bus'] = $this->bus_model->get_total();
		}


		$data['total_driver'] = $this->driver_model->get_total();
		$data['total_kondektur'] = $this->kondektur_model->get_total();
		$data['trans_upns'] = $this->trans_upn_model->get_latest();
		$breadcrumb_items = [
			'Admin' => '/',
			'Dashboard' => 'index',
		];
		$this->breadcrumb->add_item($breadcrumb_items);

		// Generate breadcrumb
		$data['content_breadcrumb'] = $this->breadcrumb->generate();
		// print_r($data);
		$this->view_admin->load('admin/dashboard', $data);
	}
}
