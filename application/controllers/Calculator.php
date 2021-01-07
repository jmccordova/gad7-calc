<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('calculator/calculator_model', 'calc');
	}

	public function index()	{
		$this->load->view('calculator/index');
	}

	public function compute() {
		$result = $this->calc->compute();
		$analysis = $this->calc->analyze($result);

		$data = array("ans1" => $this->calc->toString("q1"), "ans2" => $this->calc->toString("q2"), 
			"ans3" => $this->calc->toString("q3"), "ans4" => $this->calc->toString("q4"), 
			"ans5" => $this->calc->toString("q5"), "ans6" => $this->calc->toString("q6"), 
			"ans7" => $this->calc->toString("q7"), "result" => $result, "analysis" => $analysis);
		$this->load->view('calculator/result', $data);
	}


}
