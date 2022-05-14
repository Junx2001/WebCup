<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Fonction extends CI_Model{

    public function getPlusProche($locations, $lat, $long){
        $distances = array();
		foreach ($locations as $key => $location)
        {
            $a = $lat - $location['latitude'];
            $b = $long - $location['longitude'];
            $distance = sqrt(($a**2) + ($b**2));
            $distances[$key] = $distance;
        }

        asort($distances);

        $closest = $locations[key($distances)];

        return $closest;
	}

}

?>