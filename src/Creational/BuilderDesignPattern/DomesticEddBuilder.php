<?php
include_once "EddBuilder.php";

class DomesticEddBuilder implements EddBuilder {

	private $edd;

	public function __construct()
	{
		$this->edd = new EstimatedDeliveryDate();
	}


	public function setShippingDays(): EddBuilder {

		$this->edd->shipping_days = 5;
		return $this;

	}
	public function setProcessingDays(): EddBuilder {
		$this->edd->processing_days = 5;
		return $this;

	}
	public function setBufferingDays(): EddBuilder {
		$this->edd->buffering_days = 5;
		return $this;

	}

	public function getEdd(): EstimatedDeliveryDate {
		return $this->edd;

	}

}
?>