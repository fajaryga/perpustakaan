<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("home_model");
    }

	public function index()
	{
		$data["stats"] = $this->home_model->stats();
		$data["testi"] = $this->home_model->testi();
		$data["banner"] = $this->home_model->banner();
		$data["gallery"] = $this->home_model->gallery();
		$data["event"] = $this->home_model->event();
		$this->load->view('home', $data);
	}
}
