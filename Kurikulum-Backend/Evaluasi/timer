#!/usr/bin/php

<?php

echo "Start Ujian ... ";
echo "Dengan waktu 1.5 jam";
sleep(1);

$duration = 90;
$durationToMin = $duration*60;

$start = time();

function displayColorTerm()
{
        system("clear");
        system("setterm -term linux -back red -fore white");
        echo "00:00";

        sleep(1);

        system("clear");
        system("setterm -term linux -default");
        echo "00:00";
        sleep(1);
}

$main = function() use ($start, $durationToMin) {
    while (true) {
        system("clear");

        $now = time();
        $diff = $now-$start;
        $elapse = $durationToMin - $diff;
        $minutes = floor($elapse/60);
        $secs = ceil($elapse - ($minutes*60));

        if ($minutes == 0 && $secs == 0) {
            for ($i=1; $i<=2; $i++) {
                displayColorTerm();
                system("kill -9 $(pgrep subl) 2>/dev/null");
                system("kill -9 $(pgrep code) 2>/dev/null");
            }
            break;
        } else {
            echo "$minutes:$secs";
            sleep(1);
        }
    }
};

$main();