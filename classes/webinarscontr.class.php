<?php 
class WebinarsContr extends WebinarsModel {
	public function addWebinar($shn_title, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link) {
		$this->insertWebinar($shn_title, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link);
	}
	public function removeWebinar($shn_id) {
		$this->deleteWebinar($shn_id);
	}
}