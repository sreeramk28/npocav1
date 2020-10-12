<?php
class WebinarsModel extends Dbce {
	protected function insertWebinar($shn_title, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link) {
		try {
			$sql = "insert into webinars(shn_title, shn_speakers, shn_description, shn_date, shn_time, shn_type, shn_link) values(?, ?, ?, ?, ?, ?, ?)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$shn_title, $shn_speakers, $shn_description, $shn_date, $shn_time, $shn_type, $shn_link]);
		}
		catch (PDOException $e) {
			echo "Insert error::" . $e->getMessage();
			exit();
		}
	}
	protected function getWebinars() {
		date_default_timezone_set('Asia/Kolkata');
		$today_date = date('Y-m-d');
		$today_time = date('H:i:s');

		//echo $today_date;
		try {
			$sql = "select * from webinars where shn_date >= ? order by shn_date, shn_time";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$today_date]);
			$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			echo "Retrieval error::" . $e->getMessage();
			exit();
		}
		return $res;
	}
	protected function getWebinarsSignature() {
		try {
			$sql = "select shn_id, shn_title, shn_date from webinars order by shn_date";
			$stmt = $this->connect()->query($sql);
			$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			echo "Retrieval error::" . $e->getMessage();
			exit();
		}
		return $res;
	}
	protected function deleteWebinar($shn_id) {
		try {
			$sql = "delete from webinars where shn_id = ?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$shn_id]);
		}
		catch (PDOException $e) {
			echo "Delete Error::" . $e->getMessage();
			exit();
		}
	}
}