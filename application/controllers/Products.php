<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends My_Controller {

	
	public function __construct()
	{
		parent::__construct();	
			if(!isset($this->session->userdata['name'])){
			redirect("Users/login");
			}
		$this->load->library('paypal_lib');
		$this->load->library('phpmailer_lib');
	}

public function products(){
	$data['result']=$this->db->get("products")->result_array();

	 $data['content']='products';
		$this->load->view('_layout',$data);
}
public function buy($id){
	{
          
		$returnURL = base_url().'success'; //payment success url
		$cancelURL = base_url().'cancel'; //payment cancel url
		$notifyURL = base_url().'ipn'; //ipn url
		$product = $this->db->get_where('products',array('id'=>$id))->row_array();
		$userID = 1; 

		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name',$product['name']);
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number',$product['id']);
		$this->paypal_lib->add_field('amount', $product['price']);
		
		// Render paypal form
		$this->paypal_lib->paypal_auto_form();
		
	}
}
  public function success()
  {
	// Get the transaction data
		$paypalInfo = $this->input->post();

		$data['item_name']= $paypalInfo['item_name'];
		$data['item_number']= $paypalInfo['item_number'];
		$data['txn_id'] = $paypalInfo["txn_id"];
		$data['payment_amt'] = $paypalInfo["payment_gross"];
		$data['currency_code'] = $paypalInfo["mc_currency"];
		$data['status'] = $paypalInfo["payment_status"];
		
		// Pass the transaction data to view
		$this->load->view('paypal/success', $data);
  }
  public function cancel()
  {
  	// Load payment failed view
		$this->load->view('paypal/cancel');
  }
  public function ipn()
  {
  	$paypalInfo = $this->input->post();
		
		if(!empty($paypalInfo)){
			// Validate and get the ipn response
			$ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo);

			// Check whether the transaction is valid
			if($ipnCheck){
				// Insert the transaction data in the database
				$data['user_id']	= $paypalInfo["custom"];
				$data['product_id']	= $paypalInfo["item_number"];
				$data['txn_id']	= $paypalInfo["txn_id"];
				$data['payment_gross']	= $paypalInfo["mc_gross"];
				$data['currency_code']	= $paypalInfo["mc_currency"];
				$data['payer_email']	= $paypalInfo["payer_email"];
				$data['payment_status'] = $paypalInfo["payment_status"];

				$this->product->insertTransaction($data);
			}
		}
  }
  public function insertTransaction($data){
		$insert = $this->db->insert('payments',$data);
		return $insert?true:false;
	}
}
?>