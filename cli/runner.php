<?php

define("PROFIT_RUNNER", true);

$currencies = [
    'btc', 'dash', 'etc', 'eth', 'ltc', 'pascal', 'sia', 'xmr', 'zec'
];

print "#################################################\n";
print "PROFIT RUNNER CRYPTO MINING TOOL\n";
print "Tip Addr: 34qs5Pup438Y2qe4yLzrhgKTbHMXK1uNkt BTC\n";
print "#################################################\n\n";

foreach ($currencies as $currency)
{
    print "Reporting on {$currency}\n";
    include __DIR__ . "/{$currency}.php"; //Har har har security people.
    sleep(1);
}

print "Completed Run. If there was no output there's no profitable currencies\n\n";