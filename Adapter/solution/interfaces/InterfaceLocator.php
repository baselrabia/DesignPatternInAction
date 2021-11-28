<?php

/**
 * InterfaceLocator
 * 
 * param string $ipAddress
 * 
 * return Mark
 * 
 * @package    Adapter
 */
interface Locator
{
    public function fromIp(string $ipAddress): Mark;
}
