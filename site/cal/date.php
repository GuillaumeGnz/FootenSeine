<?php 


// Définit le fuseau horaire par défaut à utiliser. Disponible depuis PHP 5.1
date_default_timezone_set('Europe/Paris');


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
			$w =  $y + $m + $d;

			$r = $w;
			$date = strtotime(date('Y-m-d', $date).' +1 DAY');

		}

		return $r;
	}



}
	function jour($int){
		$days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
		return $days[$int];
	}

	function mois($int){
		$months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
		return $months[$int];
	}

	function dateOjd(){
		return (jour(date('N')-1).' '.date('j').' '.mois(date('n')-1));
	}

	function dateDuJour($int){
		//$dat = date('d-m-Y', strtotime("now") + $int * 24 * 3600);
		//$tabDate = explode('-', $dat);

		$w = jour(date('N', strtotime("now") + $int * 24 * 3600)-1);
		$d = date('j', strtotime("now") + $int * 24 * 3600);
		$m = mois(date('n', strtotime("now") + $int * 24 * 3600)-1);
		
		return $w.' '.$d.' '.$m;

	}

	function prochainLundi(){
		$i = 0;
		while (substr ( dateDuJour($i) , 0 , 3 ) != 'Lun'):
    		$i++;
		endwhile;
		return $i;
	}

		function dernierLundi(){
		$i = -7;
		while (substr ( dateDuJour($i) , 0 , 3 ) != 'Lun'):
    		$i++;
		endwhile;
		return $i;
	}
