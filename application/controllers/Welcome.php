<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  protected $joloUserId = "ram0438";
  protected $joloApiKey = "228535506280853";

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
    $data['circles']   = $this->circles();
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
      $data['circles']   = $this->circles();
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

  public function circles(){
     return array(
       'Andhra_Pradesh' => 5,
       'Assam' => 19,
       'Bihar_Jharkhand' => 17,
       'Chennai' => 23,
       'Delhi_NCR' => 1,
       'Gujarat' => 8,
       'Haryana' => 16,
       'Himachal_Pradesh' => 21,
       'Jammu_Kashmir' => 22,
       'Karnataka' => 7,
       'Kerala' => 14,
       'Kolkata' => 3
     );
  }

	public function getOperatorPlanoffer(){
    $ch = curl_init();
    $timeout = 30; // set to zero for no timeout
    $myurl = "https://joloapi.com/api/findplan.php?userid=demo&key=000000&opt=28&cir=1&typ=TUP&max=&amt=";
    curl_setopt ($ch, CURLOPT_URL, $myurl);
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $jsonxx = curl_exec($ch);
    $curl_error = curl_errno($ch);
    curl_close($ch);
    $someArray = json_decode($jsonxx, true);
    if (count($someArray) > 0) {
       return $someArray;
     }else{
     echo"No offer details available for this category";
     }
	}
  public function getOperatorNameAndCircleName($mobileNumber){
    $ch = curl_init();
    $timeout = 30; // set to zero for no timeout
    $myurl = "https://api.datayuge.com/v1/lookup/" .$mobileNumber;
    curl_setopt ($ch, CURLOPT_URL, $myurl);
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $jsonxx = curl_exec($ch);
    $curl_error = curl_errno($ch);
    curl_close($ch);
    return $jsonxx;
  }

  public function getOperatorIdAndCircleId($mobileNumber){
    $ch = curl_init();
    $timeout = 30; // set to zero for no timeout
    $myurl = "https://joloapi.com/api/findoperator.php?userid=".
             $this->joloUserId."&key=".$this->joloApiKey."&mob=".$mobileNumber."&type=json";
    curl_setopt ($ch, CURLOPT_URL, $myurl);
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $jsonxx = curl_exec($ch);
    $curl_error = curl_errno($ch);
    curl_close($ch);
    return $jsonxx;
  }

  public function getOperatorPlanofferAjax(){
    // $api = $this->getOperatorNameAndCircleName($this->input->post('mobileNumber'));
    // $operator = $api->operator;
    // $circle = $api->circle;
    $api = $this->getOperatorIdAndCircleId($this->input->post('mobileNumber'));
    $api = json_decode($api,true);
    $operatorId = $api['operator_code'];
    $circleId   = $api['circle_code'];
    $ch = curl_init();
    $timeout = 30; // set to zero for no timeout
    $myurl = "https://joloapi.com/api/findplan.php?userid=".$this->joloUserId."&key=".$this->joloApiKey.
             "&opt=".$operatorId."&cir=".$circleId."&typ=".$this->input->post('type')."&max=&amt=";
    curl_setopt ($ch, CURLOPT_URL, $myurl);
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $jsonxx = curl_exec($ch);
    $curl_error = curl_errno($ch);
    curl_close($ch);
    $someArray = json_decode($jsonxx, true);
    //print_r($someArray);die;
    if (count($someArray) > 0) {
      foreach ($someArray as $key => $value) {
       echo " <tr><td>" .$value["Amount"] . "</td> <td>" .$value["Validity"]. "</td> <td>" .$value["Detail"]. "</td><td>" .$value["Amount"] . "</td>  </tr>";
       }
     }else{
      echo"No offer details available for this category";
     }
	}



}
