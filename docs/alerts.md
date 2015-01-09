# Alerts

Alerts are handled using the default WordPress Post type on the parent site.

A set of ACF fields are available to define whether or not the post is an Alert.

New alerts will display at the top of all pages that use the MITLibraries-parent header. These alerts are a GET request using the WP JSON REST API.

Alerts may closeable. If closed, the alert will not reappear for that particular alert on that particular browser (handled using HTML5 localStorage).