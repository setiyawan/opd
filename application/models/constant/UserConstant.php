<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserConstant extends CI_Model {
	function get_gender() {
		return array(
			'0' => 'Laki-Laki', 
			'1' => 'Perempuan' 
		);
	}
}

?>