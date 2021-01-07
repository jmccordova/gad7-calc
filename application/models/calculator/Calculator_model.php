<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator_model extends CI_Model {
	
	public $ans1;
	public $ans2;
	public $ans3;
	public $ans4;
	public $ans5;
	public $ans6;
	public $ans7;

	public function compute() {
		$this->ans1 = $this->parseInt($this->input->post('q1'));
		$this->ans2 = $this->parseInt($this->input->post('q2'));
		$this->ans3 = $this->parseInt($this->input->post('q3'));
		$this->ans4 = $this->parseInt($this->input->post('q4'));
		$this->ans5 = $this->parseInt($this->input->post('q5'));
		$this->ans6 = $this->parseInt($this->input->post('q6'));
		$this->ans7 = $this->parseInt($this->input->post('q7'));

		return $this->ans1 + $this->ans2 + $this->ans3 + $this->ans4 + $this->ans5 + $this->ans6 + $this->ans7;
	}

	public function analyze($result) {
		$analysis = '';

		if($result < 5) $analysis = 'minimal';
		else if($result >= 5 && $result < 10) $analysis = 'mild';
		else if($result >= 10 && $result < 15) $analysis = 'moderate';
		else if($result >= 15 && $result < 22) $analysis = 'severe';
		else $analysis = "You've altered the code. Very funny.";

		return $analysis;
	}

	private function parseInt($ans) {
		return is_numeric($ans) ? intval($ans) : false;
	}

	public function toString($ans) {
		$textualRep = '';
		$ans = $this->parseInt($this->input->post($ans));
		switch ($ans) {
			case 0:
				$textualRep = 'Not at all';
				break;
			case 1:
				$textualRep = 'Several days';
				break;
			case 2:
				$textualRep = 'More than half the days';
				break;
			case 3:
				$textualRep = 'Nearly everyday';
				break;
			default:
				$textualRep = 'Altered by user';
				break;
		}

		return $textualRep;
	}
}

?>