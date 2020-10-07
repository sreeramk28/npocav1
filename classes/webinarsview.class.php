<?php
header("Content-type: text/xml");
header("Cache-Control: no-cache, must-revalidate");
class WebinarsView extends WebinarsModel {
	
	/*
	public function getTitle($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_title'];
	}
	public function getSubTitle($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_subtitle'];
	}
	public function getSpeakers($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_speakers'];
	}
	public function getDescription($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_description'];
	}
	public function getDate($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_date'];
	}
	public function getTime($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_time'];
	}
	public function getType($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_type'];
	}
	public function getLink($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_link'];
	}
	public function getAudience($idx) {
		if($idx < $this->n)
			echo $this->res[$idx]['shn_recommended'];
	}*/
	
	public function showWebinars() {
		$res = $this->getWebinars();
		$n = count($res);
		//$idx = 0;

		//echo "<title>".$res[0]['shn_title']."</title>";
		//echo "<title>".$res[1]['shn_title']."</title>";
		echo '<?xml version="1.0" encoding="ISO-8859-1"?><webinar>';
		//echo "<block>";
		for($idx = 0; $idx < $n; $idx++) {
			$res[$idx]['shn_speakers'] = str_replace("::Name::", " | ", $res[$idx]['shn_speakers']);
			$res[$idx]['shn_speakers'] = str_replace("::Profile::", ", ", $res[$idx]['shn_speakers']);
			$res[$idx]['shn_speakers'] = substr($res[$idx]['shn_speakers'], 3);
		}

		for($idx = 0; $idx < $n; $idx++) {
			
			//echo "<title>"."J"."</title>";
			
			$res[$idx]['shn_title'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_title']);
			$res[$idx]['shn_subtitle'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_subtitle']);
			$res[$idx]['shn_speakers'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_speakers']);
			$res[$idx]['shn_description'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_description']);
			$res[$idx]['shn_date'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_date']);
			$res[$idx]['shn_time'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_time']);
			$res[$idx]['shn_type'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_type']);
			$res[$idx]['shn_link'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_link']);
			$res[$idx]['shn_recommended'] = str_replace(array("&","<", ">", "'", '"'), array("&amp;", "&lt;", "&gt;", "&apos;", "&quot;"), $res[$idx]['shn_recommended']);
			
		}
		for($idx = 0; $idx < $n; $idx++) {
			
			//echo "<title>"."J"."</title>";
			echo "<row>";
			echo "<title>" . $res[$idx]['shn_title'] . "</title>";
			echo "<subtitle>".$res[$idx]['shn_subtitle']."</subtitle>";
			echo "<speakers>".$res[$idx]['shn_speakers']."</speakers>";
			echo "<description>".$res[$idx]['shn_description']."</description>";
			echo "<date>".$res[$idx]['shn_date']."</date>";
			echo "<time>".$res[$idx]['shn_time']."</time>";
			echo "<type>".$res[$idx]['shn_type']."</type>";
			echo "<link>".$res[$idx]['shn_link']."</link>";
			echo "<audience>".$res[$idx]['shn_recommended']."</audience>";
			echo "</row>";
		}

		echo "</webinar>";
	}
}