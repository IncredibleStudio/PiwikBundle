IncrediblePiwikBundle
============

A Symfony - Piwik integration bundle

Installation
------------
Simply add the following to your composer.json (see http://getcomposer.org/):

```json
"require": {
    // ...
    "incredible/piwik-bundle": "~2.0"
}
```

And enable the bundle in `app/AppKernel.php`:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Incredible\PiwikBundle(),
    );
}
```

Usage
-----
To include tracking code simply use piwik variable
	{{ piwikTrackingCode }}

Configuration
-------------
```yaml
incredible_piwik:
    enabled: true
    site_id: 1
    tracker_url: piwik.test
    heartbeat:
      enabled: true
      timer: 30
```