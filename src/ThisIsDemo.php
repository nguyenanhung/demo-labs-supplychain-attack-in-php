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
}
