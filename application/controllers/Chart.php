<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->model(array('kota_model'));
    }

    public function index() {
		$this->pie();
	}

	public function pie() {

		$data_kota = $this->kota_model->read();
		
		$output = array(
					'judul' => 'Pie Chart',
					'data_kota' => $data_kota
				);

		$this->load->view('chart_pie', $output);
	}

	public function column() {

		$data_kota = $this->kota_model->read();

		$output = array(
					'theme_page' => 'chart_column',
					'judul' => 'Column Chart',
					'data_kota' => $data_kota
				);

		$this->load->view('chart_column', $output);


	}

}
