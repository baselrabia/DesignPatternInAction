<?php

class IpLocationLocator implements ILocator
{
    public function fromIp(string $ipAddress): Mark
    {
        $locator = new IpLocation;
        $location = $locator->locate($ipAddress);

        return new Mark(
            $location['country_name'],
            $location['region_name'],
            $location['city']
        );
    }
}

 



