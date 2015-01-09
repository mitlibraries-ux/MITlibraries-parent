# Debugging WordPress issues

Our `wp-config.php` file is currently set to write WordPress PHP notices, warnings, and errors to a `debug.log` file, located from the site root at `/wp-content/debug.log`. If the site is experiencing any unexplained behavior, you may check this file for notes as to why.

Note that this file can get pretty bloated, and may take a while to download. It is probably a good idea to look into ways to periodically flush the contents of this file, in order to keep it from growing too large.