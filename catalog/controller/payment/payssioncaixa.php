<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionCaixa extends ControllerPaymentPayssion {
	protected $pm_id = 'caixa_br';
}