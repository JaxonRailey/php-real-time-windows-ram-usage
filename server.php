<?php

// set l'header
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// get free ram
$cmd  = 'wmic OS get FreePhysicalMemory /Value';
$res  = shell_exec($cmd);
$free = explode('=', $res)[1];
$free = trim($free);

// get total ram
$cmd   = 'wmic ComputerSystem get TotalPhysicalMemory';
$res   = shell_exec($cmd);
$total = explode(PHP_EOL, $res)[1];
$total = (int)trim($total) / 1000;

// calc values
$perc  = 100 - ($free * 100 / $total);
$usage = number_format($free / 1048576, 2, '.', ' ') . ' Gb';
$total = number_format($total / 1048576, 2, '.', ' ') . ' Gb';

// send data
echo "data: " . json_encode(['usage' => $usage, 'total' => $total, 'perc' => (int)$perc]) . "\n\n";