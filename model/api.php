<?
/*
Author		: Wibisono Sastrodiwiryo
Date		: 15 April 2014
Copyleft	: eGov Lab UI
Contact		: wibi@alumni.ui.ac.id
Version		: 0.0.1
*/

class api extends db_connection {
//-------disediakan untuk kepentingan yang akan datang

	function get_dapil($dapil_id) {
		$content=file_get_contents(dapil_url.'/api.php?cmd=search&dapil_id='.$dapil_id);
        return $content;
	}

}
?>
