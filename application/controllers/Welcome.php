<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		if($this->input->post('submit_recharge')){
        $output = $this->rechargeApi(
					$rechargeNumber    = $this->input->post('rechargeNumber'), 
					$rechargeAmount    = $this->input->post('rechargeAmount'),
					$utilityOperatorId = $this->input->post('utilityOperatorId'),
					$remark            = 'Test');
					echo $output;
		}
    $data['operators'] = $this->operators();
		$this->load->view('welcome_message',$data);
	}

	public function recharge()
	{
		if($this->input->post('submit_recharge')){
				$output = $this->rechargeApi(
				 $rechargeNumber    = $this->input->post('rechargeNumber'),
				 $rechargeAmount    = $this->input->post('rechargeAmount'),
				 $utilityOperatorId = $this->input->post('utilityOperatorId'),
				 $remark            = 'Test');
				 echo $output;
	     }
		  $data['operators'] = $this->operators();
		  $this->load->view('recharge',$data);
	}

  public function rechargeApi($rechargeNumber,$rechargeAmount,$utilityOperatorId,$remark){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"http://travexsoftsol.com/projects/payz24/rest/rechargeapi");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
							 "rechargeNumber=".$rechargeNumber."&rechargeAmount=".$rechargeAmount."&utilityOperatorId=".$utilityOperatorId."&remarks=".$remark);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);
		// further processing ....
		print_r($server_output);
		if ($server_output == "OK") { echo "success" ;} else { echo "failed" ;};
  }

	public function rechargePlans($circleid,$operatorid,$type){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"http://travexsoftsol.com/projects/payz24/rest/rechargfindplan");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
							 "circleid=".$circleid."&operatorid=".$operatorid."&type=".$type);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);
		// further processing ....
		print_r($server_output);
		if ($server_output == "OK") { echo "success" ;} else { echo "failed" ;};
	}

	public function operators(){
		  return array(
				'AIRTEL' => 28,
				'AIRCEL' => 1,
				'BSNL' => 3,
				'VODAFONE' => 22,
				'TATA_DOCOMO_GSM' => 17,
				'TATA_DOCOMO_CDMA' => 18,
				'RELIANCE_GSM' => 13,
				'RELIANCE CDMA' => 12,
				'MTS' => 10,
				'UNINOR' => 19,
				'LOOP' => 9,
				'VIDEOCON' => 5,
				'MTNL_MUMBAI' => 6,
				'MTNL_DELHI' => 20,
				'IDEA' => 8,
				'JIO' => 29
			);
	}

	public function getOperatorId_CircleId_Type(){

	}



}
