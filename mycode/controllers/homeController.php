<?php 
	namespace mycode\controllers;
	use mycode\app\controller;
	use mycode\models\homeModel;

	class homeController extends Controller{
		public function __construct(){	
			}
		public function list_category(){		
			$data = $this->model_get();
		}
		public function edit(){
			$record = $this->model_edit();
			$this->renderHTML();
		}
		public function do_edit(){
			$this->model_do_edit();
			header("location: ");
		}
		public function add(){
			$this->renderHTML();
		}
		public function do_add(){
			$this->model_do_add();
			header("location: ");
		}
		public function delete(){
			$this->model_delete();
			header("location: ");
		}
	}
 ?>