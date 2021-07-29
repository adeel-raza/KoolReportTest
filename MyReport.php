<?php
class MyReport extends \koolreport\KoolReport {
	use \koolreport\clients\Bootstrap;
	use \koolreport\clients\FontAwesome;

	public function settings() {
		return array(
			'assets'      => array(
				'path' => __DIR__ . '/assets',
				'url'  => '/kool_report/assets',
			),
			'dataSources' => array(),
		);
	}
}
