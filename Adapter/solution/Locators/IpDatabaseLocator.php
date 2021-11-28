<?php

 

class IpDatabaseLocator implements Locator
{
    public function fromIp(string $ipAddress): Mark
    {
        $locator = new IpDatabase;
        $location = $locator->findByIpAddress($ipAddress);

        return new Mark(
            $location['country'],
            $location['state_or_province'],
            $location['city_name']
        );
    }
}
 