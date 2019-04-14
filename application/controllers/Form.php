<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['title'] = "Halaman Isi Formulir";
		$data['user'] = $this->User_model->getWelcomeName();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('form/index');
        $this->load->view('templates/footer');
	}

	public function tampil()
	{
		$data['title'] = "Halaman Tampil Formulir";
		$data['user'] = $this->User_model->getWelcomeName();
		$data['data'] = $this->db->get('location_information')->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('form/tampil');
        $this->load->view('templates/footer');
	}



	public function aksi_save()
	{
		$form_data = [
			'tgl' => date("Y-m-d")
		];
		$this->db->insert('form',$form_data);
		$id_form = $this->db->insert_id();

		$data = array(
			'survey_date' => $this->input->post('survey_date'),
			'jpp_year' => $this->input->post('jpp_year'),
			'obj_loc' => $this->input->post('obj_loc'),
			'region' => $this->input->post('region'),
			'street' => $this->input->post('street'),
			'desa' => $this->input->post('desa'),
			'kabupaten' => $this->input->post('kabupaten'),
			'loc_coordinate' => $this->input->post('loc_coordinate'),
			'searching_radius' => $this->input->post('searching_radius'),
			'road_condition' => $this->input->post('road_condition'),
			'pole_nearby' => $this->input->post('pole_nearby'),
			'outage_frequency' => $this->input->post('outage_frequency'),
			'other_information' => $this->input->post('other_information'),
			'fk_form' => $id_form,
		);

		$this->User_model->add_data('location_information', $data);

		$data_market_potency = [
			'gdp' => $this->input->post('gdp'),
			'building_available' => $this->input->post('building_available'),
			'crowded_places' => $this->input->post('crowded_places'),
			'nearest_site' => $this->input->post('nearest_site'),

			'revenue_prediction' => $this->input->post('revenue_prediction'),
			'population' => $this->input->post('population'),
			'productive_age' => $this->input->post('productive_age'),
			'job_sector' => $this->input->post('job_sector'),
			'fk_form' => $id_form,
		];
		$this->db->insert('market_potency',$data_market_potency);

		$data_cellular_coverage = [
			'signal_quality' => $this->input->post('signal_quality'),
			'strongest_band' => $this->input->post('strongest_band'),
			'cell_id' => $this->input->post('cell_id'),
			'speed_test' => $this->input->post('dl')." - ".$this->input->post('ul'),
			'competitor_coverage1' => $this->input->post('competitor_coverage1'),
			'coverage_band1' => $this->input->post('coverage_band1'),
			'competitor_coverage2' => $this->input->post('competitor_coverage2'),
			'coverage_band2' => $this->input->post('coverage_band2'),
			'competitor_coverage3' => $this->input->post('competitor_coverage3'),
			'coverage_band3' => $this->input->post('coverage_band3'),
			'fk_form' => $id_form,
		];
		$this->db->insert('cellular_coverage',$data_cellular_coverage);
		//$insert = $this->models->add_data('location_information', $data);

		//ditambah 4 


		$data_nearby_site = [
			'site_id1' => $this->input->post('site1'),
			'coordinate1' => $this->input->post('coordinate1'),
			'distance1' => $this->input->post('distance1'),
			'site_id2' => $this->input->post('site2'),
			'coordinate2' => $this->input->post('coordinate2'),
			'distance2' => $this->input->post('distance2'),
			'co_ordinate1' => $this->input->post('co_ordinate1'),
			'distance_nom1' => $this->input->post('distance_nom1'),
			'site_owner2' => $this->input->post('site_owner2'),
			'co_ordinate2' => $this->input->post('co_ordinate2'),
			'distance_nom2' => $this->input->post('distance_nom2'),
			'site_owner2' => $this->input->post('site_owner2'),
			'fk_form' => $id_form,
		];
		$this->db->insert('nearby_site',$data_nearby_site);

		redirect('Form/tampil','refresh');
	}
}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */