#!/usr/bin/env php
<?php
require_once "loxberry_log.php";

// $mylog = LBLog::newLog(array("name" => "PHPLog", "package" => "core", "logdir" => $lbslogdir));
LOGSTART("Das ist mein gl PHP Log");
LOGDEB("Das ist eine gl Debug Message");
LOGINF("Das ist eine gl Info Message");
LOGOK("Das ist eine gl OK Message");
LOGWARN("Das ist eine gl Warning Message");
LOGERR("Das ist eine gl Error Message");
LOGCRIT("Das ist eine gl Critical Message");
LOGALERT("Das ist eine gl Alert Message");
LOGEMERG("Das ist eine gl Emergency Message");
LOGEND("Das ist das gl Log Ende");

?>
