<?php
include_once "EddBuilder.php";

class InternationalEddBuilder implements EddBuilder {


	private $edd;
	protected $property;

	public function __construct()
	{
		$this->edd = new EstimatedDeliveryDate();
	}


	public function setShippingDays(): EddBuilder {

		$this->edd->shipping_days = 10;
		return $this;

	}
	public function setProcessingDays(): EddBuilder {
		$this->edd->processing_days = 10;
		return $this;

	}
	public function setBufferingDays(): EddBuilder {
		$this->edd->buffering_days = 10;
		return $this;

	}

	public function getEdd(): EstimatedDeliveryDate {
		return $this->edd;

	}

}
?>