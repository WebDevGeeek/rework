<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	  // Constructor to load the model
	  public function __construct() {
        parent::__construct();
        // Load the Home_model

    }
	public function index($title = NULL)
	{
		$this->load->view('frontend/history');
	}
}