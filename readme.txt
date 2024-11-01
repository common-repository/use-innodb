=== Use InnoDB ===
Contributors: wpchefgadget
Requires at least: 4.2
Tested up to: 5.4
Stable tag: 1.0.2

Increases performance by changing the storage engine of the options table from MyISAM to InnoDB.

== Description ==
This plugin changes the storage engine of the options table from MyISAM to InnoDB. Please take note that if you have a relatively fresh WordPress installation, the options table might already be the InnoDB type. In this case the plugin will not be of any help, but will not cause any issues either.

The InnoDB storage engine locks tables (when needed) on a single row level, while MyISAM does this on the entire table level, this is less effective and leads to WordPress slow-ness when working with highly loaded sites or large options table.

The plugin starts working right after activation and doesn't have any settings.

== Changelog ==

= 1.0.2 =
* Initial release.