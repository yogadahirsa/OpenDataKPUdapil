<?
/********************************************************************
*	Date		: 15 April 2014
*	Author		: Prayoga Dahirsa
*	Email		: yoga@cybergl.co.id
*	Copyleft	: eGov Lab UI 
*********************************************************************/
require("config.php"); 
#------------------------init
//$ses->authenticate();
$doc->pagetitle="Example";
$doc->status="Post Method";

#------------------------proc
switch ($_POST["cmd"]) {
	case "Submit":
		$json=$api->get_dapil($_POST["dapil_id"]);
		if($json!="false"){
			$data=json_decode($json);
			$json=str_replace(",",",<br/>",$json);
			$doc->content("dapil/success.php");
		}
		else{
			$doc->content("dapil/fail.php");
		}
		
	break;
	default:
		$doc->content("dapil/form.php");

}

$doc->error_message();

#------------------------view

if ($mobile) {include(viwpath."/general/m_body.php");}
else {include(viwpath."/general/body.php");}
?>