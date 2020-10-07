<?php 
class WebinarsContr extends WebinarsModel {
	public function addWebinar($shn_title, $shn_subtitle, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link, $shn_recommended) {
		$this->insertWebinar($shn_title, $shn_subtitle, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link, $shn_recommended);
	} 
	
}
