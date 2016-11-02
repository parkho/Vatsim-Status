<?php
class VatsimStats extends CodonModule
{
	public function index() 
	   {
			$json = file_get_contents("https://stats.vatsim.net/user_count_json.php");
			$data = json_decode($json, true); 
			$pilots = $data['pilots'];
			$controllers = $data['controllers'];
			$atis = $data['atis'];
			$observers = $data['observers'];
			$supervisors = $data['supervisors'];
			$total = $data['total'];
			
            $this->set('pilots', $pilots);
            $this->set('controllers', $controllers);
            $this->set('atis', $atis);
            $this->set('observers', $observers);
            $this->set('supervisors', $supervisors);
            $this->set('total', $total);
			
            $this->show('/vatstats/vatstas.php');
			
            
        }
}
?>