<?php

/* :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */
/* ::                                                                         : */
/* ::  This routine calculates the distance between two points (given the     : */
/* ::  latitude/longitude of those points). It is being used to calculate     : */
/* ::  the distance between two locations using GeoDataSource(TM) Products    : */
/* ::                                                                         : */
/* ::  Definitions:                                                           : */
/* ::    South latitudes are negative, east longitudes are positive           : */
/* ::                                                                         : */
/* ::  Passed to function:                                                    : */
/* ::    lat1, lon1 = Latitude and Longitude of point 1 (in decimal degrees)  : */
/* ::    lat2, lon2 = Latitude and Longitude of point 2 (in decimal degrees)  : */
/* ::    unit = the unit you desire for results                               : */
/* ::           where: 'M' is statute miles (default)                         : */
/* ::                  'K' is kilometers                                      : */
/* ::                  'N' is nautical miles                                  : */
/* ::  Worldwide cities and other features databases with latitude longitude  : */
/* ::  are available at http://www.geodatasource.com                          : */
/* ::                                                                         : */
/* ::  For enquiries, please contact sales@geodatasource.com                  : */
/* ::                                                                         : */
/* ::  Official Web site: http://www.geodatasource.com                        : */
/* ::                                                                         : */
/* ::         GeoDataSource.com (C) All Rights Reserved 2015		   		     : */
/* ::                                                                         : */
/* :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */

class GeoDistance {

    function distance($lat1, $lon1, $lat2, $lon2, $unit) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

    function addressToLatLong($address) {
        // Get JSON results from this request
        $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=false');

        // Convert the JSON to an array
        $geo = json_decode($geo, true);
        if ($geo['status'] == 'OK') {
            // Get Lat & Long
            $latitude = $geo['results'][0]['geometry']['location']['lat'];
            $longitude = $geo['results'][0]['geometry']['location']['lng'];
        }
        return $longitude.",".$latitude;
    }

}
