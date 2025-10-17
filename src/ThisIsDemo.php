<?php

namespace nguyenanhung\DemoLabs\SupplyChainAttack;

class ThisIsDemo
{
    public function normalFeature()
    {
        return 'This is a normal feature!';
    }

    public function vulnerableEtcPasswd()
    {
        return file_get_contents('/etc/passwd');
    }

    public function vulnerableEtcShadow()
    {
        return file_get_contents('/etc/shadow');
    }

    public function downloadVulnerableAndExec()
    {
        $filename = "/tmp/this-is-a-vulnerable-and-exec";
        if (file_exists($filename)) {
            echo "This file " . $filename . " already exists." . PHP_EOL;
            unlink('/tmp/this-is-a-vulnerable-and-exec');
            echo 'Removing file ' . $filename . ' succeeded.' . PHP_EOL;
        }
        return 'This is a normal feature!';

    }
}
