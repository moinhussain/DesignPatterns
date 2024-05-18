<?php
class EstimatedDeliveryDate {

  public $processing_days;
  public $shipping_days;
  public $buffering_days;

  public function __toString()
  {
	return join(",", [$this->processing_days, $this->shipping_days, $this->buffering_days]);
  }

}
?>