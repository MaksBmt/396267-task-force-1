<?php

require_once 'vendor/autoload.php';

$strategy = new force\logic\Task('cancel', 2);
var_dump($strategy->getStatusAfterAction('act_cancel'));

// assert($strategy->getNextStatus('act_cancel') == AvailableActions::STATUS_CANCEL, 'cancel');
