<?php
class Director {

	public function __construct(private EddBuilder $builder)
	{
		$this->builder = $builder;
	}

	public function buildEdd(): void {
		$this->builder->setProcessingDays()
		->setShippingDays()
		->setBufferingDays();
	}

	public function getEdd(): EstimatedDeliveryDate {
		return $this->builder->getEdd();
	}
}
?>