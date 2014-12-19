<?php
	require_once '../database/database.php';
	class ClassAnalysis{
		private $dataArray;
		private $name;
		private $dataCheck = array();
		function ClassAnalysis($idDisease, $idSymptom){
			print_r($idDisease. "\n");
			$name = db_select('disease', array('name_disease'), ' WHERE id_disease = '. $idDisease);
			$this->name = $name[0]['name_disease'];
			$this->dataArray = db_select('map_disease',null , 'where id_disease = '. $idDisease);
			foreach($this->dataArray as $key => $value){
				$this->dataCheck[$value['id_symptom']] = 0;
			}
			$this->setIndexTrue($idSymptom);
		}
		
		public function setIndexTrue($id){
			$this->dataCheck[$id] = 1;
		}
		
		public function getCheck(){
			return $this->dataCheck;
		}
		
		public function getPercent(){
			$count = 0;
			foreach($this->dataCheck as $key => $value){
				if($value == 1) $count ++;
			}
			return($count * 100 / count($this->dataCheck));
		}
		
		function getName(){
			return $this->name;
		}
		
		function out(){
			print_r($this->dataCheck);
		}
	}
?>