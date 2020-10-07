<?php

class WebinarsModel extends Dbce {
	protected function insertWebinar($shn_title, $shn_subtitle, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link, $shn_recommended) {
		$sql = "insert into webinars values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$shn_title, $shn_subtitle, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link, $shn_recommended]);
	}
	protected function getWebinars() {
		date_default_timezone_set('Asia/Kolkata');
		$today_date = date('Y-m-d');
		$today_time = date('H:i:s');

		//echo $today_date;

		$sql = "select * from webinars where shn_date >= ? order by shn_date, shn_time";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$today_date]);
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
}