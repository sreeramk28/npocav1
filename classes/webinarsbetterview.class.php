<?php
header("Content-type: text/html");
header("Cache-Control: no-cache, must-revalidate");
class WebinarsBetterView extends WebinarsModel {
	public function showWebinarsSignature() {
		$res = $this->getWebinarsSignature();
		$n = count($res);
		echo "<table id='npoca-sessions'>";
		echo "<tr>";
		echo "<th>Session ID</th><th>Title</th><th>Date</th>";
		echo "</tr>";
		for ($i = 0; $i < $n; $i++) {
			echo "<tr>";
			echo "<td>" . $res[$i]['shn_id'] . "</td>";
			echo "<td>" . $res[$i]['shn_title'] . "</td>";
			echo "<td>" . $res[$i]['shn_date'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}