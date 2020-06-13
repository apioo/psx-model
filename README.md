PSX Model
===

## About

Library which contains generated models based on a [TypeSchema](https://typeschema.org/)
definition. All specifications are available at the `spec/` folder. You can also
generate all models by using the command `php gen.php`. We support the following
data formats:

* ActivityStream
* Atom
* OpenAPI
* Rss
* SchemaOrg

All generated code is automatically Psalm level 1 compatible. These classes can
be used standalone or in combination with the `psx/data` and `psx/schema`
package to consume or produce the data format.
