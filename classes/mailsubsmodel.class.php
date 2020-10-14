<?php
/**
 * 
 */
class MailSubsModel extends Dbce {
	protected function insertSubscriber($sub_name, $sub_email, $sub_designation) {
		try {
			$sql="insert into mailsubscribers(sub_name, sub_email, sub_designation) values (?, ?, ?)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$sub_name, $sub_email, $sub_designation]);
		}
		catch (PDOException $e) {
			echo "Insert error: " . $e->getMessage();
			exit();
		}
	}
	protected function showSubscribers() {
		try {
			$sql = "select sub_name, sub_email, sub_designation from mailsubscribers";
			$stmt = $this->connect()->query($sql);
			$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $res;
		}
		catch (PDOException $e) {
			echo "Select error" . $e->getMessage();
			exit();
		}
	}
}