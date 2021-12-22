<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A <a class="localLink" href="http://schema.org/CampingPitch">CampingPitch</a> is an individual place for overnight stay in the outdoors, typically being part of a larger camping site, or <a class="localLink" href="http://schema.org/Campground">Campground</a>.<br/><br/>

In British English a campsite, or campground, is an area, usually divided into a number of pitches, where people can camp overnight using tents or camper vans or caravans; this British English use of the word is synonymous with the American English expression campground. In American English the term campsite generally means an area where an individual, family, group, or military unit can pitch a tent or park a camper; a campground may contain many campsites.
(Source: Wikipedia see <a href="https://en.wikipedia.org/wiki/Campsite">https://en.wikipedia.org/wiki/Campsite</a>).<br/><br/>

See also the dedicated <a href="/docs/hotels.html">document on the use of schema.org for marking up hotels and other forms of accommodations</a>.')]
class CampingPitch extends Accommodation implements \JsonSerializable
{
}

