<?php

// http://www.phpclasses.org/browse/package/4472.html
require_once('ParseXml.class.php');

class Weather
{
    public function __construct($lat, $long)
    {
        $xml = new ParseXml();
        $xml->LoadRemote("http://api.wunderground.com/auto/wui/geo/ForecastXML/index.xml?query={$lat},{$long}", 3);
        $data = $xml->ToArray();

        return $data;
    }
}