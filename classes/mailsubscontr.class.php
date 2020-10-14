<?php
class MailSubsContr extends MailSubsModel {
	public function addSubscriber($sub_name, $sub_email, $sub_designation) {
		$this->insertSubscriber($sub_name, $sub_email, $sub_designation);
	}
}