<?php
interface EddBuilder {

	public function setShippingDays(): self;
	public function setProcessingDays(): self;
	public function setBufferingDays(): self;
	public function getEdd(): EstimatedDeliveryDate;

}
?>