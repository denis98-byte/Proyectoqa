<?php
require_once "./PROYECTOQA/config/APP.php";


class Prueba1Test extends \PHPUnit\Framework\TestCase{

	public function test_probar_iniciar_sesion_administrador_controlador() {
		$enlace = SERVERURL."admin";
		$this->assertEquals("http://localhost/PROYECTOQA/admin", $enlace);
	}

	public function test_new_category() {
		$newCat = SERVERURL."admin/category-new";
		$this->assertEquals("http://localhost/PROYECTOQA/admin/category-new", $newCat);

	}
	public function test_search_client() {
		$searchCli = SERVERURL."admin/client-search";
		$this->assertEquals("http://localhost/PROYECTOQA/admin/client-search", $searchCli);

	}
	public function test_read_product() {
		$prod = SERVERURL."admin/product-list";
		$this->assertEquals("http://localhost/PROYECTOQA/admin/product-list", $prod);

	}
	public function test_get_dashboard() {
		$prod = SERVERURL."admin/home";
		$this->assertEquals("http://localhost/PROYECTOQA/admin/home", $prod);

	}
}