<?php
class Calificar  {
	public function Calificar($nota){
		if ($nota >= 60){
			return "Primera Division";
		}
		elseif($nota >= 45){
			return "Segunda Division";
		}
		elseif ($nota >= 33){
			return "Tercera Division";
		}
		else{
			return "Reprobado";
		}
	}
}
?>