<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mirror_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function get_rain_data(){
		// create curl resource
		$ch = curl_init();
		// set url
		curl_setopt($ch, CURLOPT_URL, "http://gps.buienradar.nl/getrr.php?lat=52.369918&lon=4.8943573");
		
		//return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		// $output contains the output string
		$output = curl_exec($ch);
		
	    // close curl resource to free up system resources
		curl_close($ch);
		
		return $output;
	}
}

?>
