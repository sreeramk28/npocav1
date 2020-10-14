<?php
class MailSubsView extends MailSubsModel {
	public function showAllSubscribers() {
		$res = $this->showSubscribers();
		$n = count($res);
		echo "<table id='npoca-sessions'>";
		echo "<tr>";
		echo "<th>Name</th><th>Email</th><th>Designation</th>";
		echo "</tr>";
		for ($i = 0; $i < $n; $i++) {
			echo "<tr>";
			echo "<td>" . $res[$i]['sub_name'] . "</td>";
			echo "<td>" . $res[$i]['sub_email'] . "</td>";
			echo "<td>" . $res[$i]['sub_designation'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}
