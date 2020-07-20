<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use <a class=""localLink"" href=""http://schema.org/Action"">Action</a>-based vocabulary, alongside types such as <a class=""localLink"" href=""http://schema.org/Comment"">Comment</a>.")
 */
class UserBlocks extends UserInteraction implements \JsonSerializable
{
}
