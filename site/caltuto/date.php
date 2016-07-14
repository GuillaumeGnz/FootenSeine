<?php 


class Date{

	var $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
	var $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');

	function getAll($year){
		$r = array();
		$date = strtotime($year.'-01-01');
		while(date('Y',$date) <= $year){

			// ce que je veux : $r[ANNEE][MOIS][JOUR] = JOUR DE LA SEMAINE
			$y = date('Y', $date);
			$m = date('n', $date);
			$d = date('j', $date);
			$w = str_replace('0','7',date('w', $date)); //poose problème car commence par dimanche, aller voir sur site une autre solution

			$r[$y][$m][$d] = $w;
			$date = strtotime(date('Y-m-d', $date).' +1 DAY');

		}

		return $r;
	}

}
