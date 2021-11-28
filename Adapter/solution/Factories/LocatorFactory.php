<?php



class LocatorFactory
{
    public function make(string $source): Locator
    {
        switch ($source) {
            case 'api':
                return new IpLocationLocator;
            case 'database':
                return new IpDatabaseLocator;
            default:
                throw new \RuntimeException('Unknown IP Locator service');
        }
    }
}