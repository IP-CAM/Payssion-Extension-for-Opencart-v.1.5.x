<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionPSEco extends ControllerPaymentPayssion {
	protected $pm_id = 'pse_co';
}