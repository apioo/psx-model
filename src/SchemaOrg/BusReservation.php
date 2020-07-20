<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A reservation for bus travel. <br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class=""localLink"" href=""http://schema.org/Offer"">Offer</a>.")
*/
class BusReservation extends Reservation implements \JsonSerializable
{
}
