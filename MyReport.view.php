<?php
	use \koolreport\widgets\koolphp\Card;
?>
<div class="report-content">
	<div class="text-center">
		<h1>Card</h1>
		<p class="lead">
			Guide you how to use Card to display important KPI value
		</p>
	</div>
	<div class="row">
		<div class="col-md-3">
			<?php
			Card::create(
				array(
					'value'    => 2000,
					'title'    => 'Member Online',
					'cssClass' => array(
						'card'  => 'bg-info',
						'title' => 'text-white',
						'value' => 'text-white',
					),
				)
			);
			?>
		</div>
		<div class="col-md-3">
			<?php
			Card::create(
				array(
					'value'    => 230,
					'title'    => 'Conversions',
					'cssClass' => array(
						'card'  => 'bg-warning',
						'title' => 'text-white',
						'value' => 'text-white',
					),
				)
			);
			?>
		</div>
		<div class="col-md-3">
			<?php
			Card::create(
				array(
					'value'    => 15299,
					'title'    => 'Revenue',
					'format'   => array(
						'value' => array(
							'prefix' => '$',
						),
					),
					'cssClass' => array(
						'card'  => 'bg-success',
						'title' => 'text-white',
						'value' => 'text-white',
					),
				)
			);
			?>
		</div>

		<div class="col-md-3">
			<?php
			Card::create(
				array(
					'value'    => 6912,
					'title'    => 'Cost',
					'format'   => array(
						'value' => array(
							'prefix' => '$',
						),
					),
					'cssClass' => array(
						'card'  => 'bg-danger',
						'title' => 'text-white',
						'value' => 'text-white',
					),
				)
			);
			?>
		</div>
	</div>
</div>
