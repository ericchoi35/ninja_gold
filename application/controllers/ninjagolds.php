<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NinjaGolds extends CI_Controller {

	public function index()
	{
		$this->load->view('index');

		if(!$this->session->userdata('totalGold'))
		{
			$this->session->set_userdata('totalGold', 0);
		}
		if(!$this->session->userdata('activities'))
		{
			$this->session->set_userdata('activities');
		}
		// $this->session->unset_userdata('activities');
	}

	public function process()
	{	
		$location = $this->input->post('action');
		$this->load->model('NinjaGold');
		$this->NinjaGold->bank($location);
		redirect('/');
	}

	// public function process()
	// {
		// if(isset($_POST['action']) && $this->input->post('action') == 'farm')
		// {	
		// 	$gold = rand(10,20);
		// }
		// else if(isset($_POST['action']) && $this->input->post('action') == 'cave')
		// {
		// 	$gold = rand(5,10);
		// }
		// else if(isset($_POST['action']) && $this->input->post('action') == 'house')
		// {
		// 	$gold = rand(2,5);
		// }
		// else if(isset($_POST['action']) && $this->input->post('action') == 'casino')
		// {
		// 	$gold = rand(-50,50);
		// }

		// $this->session->set_userdata('totalGold', $this->session->userdata('totalGold') + $gold);

		// $data = array(
		// 			array('gold' => $gold),
		// 			array('location' => $this->input->post('action')),
		// 			array('totalGold' => $this->session->userdata('totalGold'))
		// 	);
		// $this->activities($data);
	// }

	// public function activities($data)
	// {
		// if($data[0]['gold'] >=0)
		// {
		// 	$msg = "<p class='green'>Earned " . $data[0]['gold'] . " golds from the " . $data[1]['location'] . "!</p>";
		// }
		// else
		// {
		// 	$msg = "<p class='red'>Earned " . $data[0]['gold'] . " golds from the " . $data[1]['location'] . "!</p>";
		// }

		// $append = $msg . $this->session->userdata('activities');
		// $this->session->set_userdata('activities', $append);
		// redirect('/');
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */