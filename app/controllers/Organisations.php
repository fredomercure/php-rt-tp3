<?php
namespace controllers;
 /**
 * Controller Organisations
 **/
class Organisations extends ControllerBase{

	public function index(){
		$organisations=DAO::getALL("models\Organization");
		$this->loadView("Organisations/index.html"),["orgas"=>$organisations];
	}
	
	public function display($idOrga){
	$orga=DAO::getOne("models\Organization", $idOrga,true, true);
	$this->loadView("Organizations/display.html",["orga"=>$orga]);
	
}
