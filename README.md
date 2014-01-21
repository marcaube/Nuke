# *Nuke* that cache from your favorite CMS

Nuke provides a nice button to annihilate your cache from the comfort of your browser.


## Usage

Just click on the darn thing and take a sip of coffee while war is waging on your cache files.


## Installation

### Add the bundle to you composer.json

```yml
{
    "require": {
        "ob/cachenuke-bundle": "*"
    }
}
```

### And run these commands to install

```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar update "ob/cachenuke-bundle"
```

### Register the bundles in `app/AppKernel.php`

```php
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
        new Ob\CacheNukeBundle\ObCacheNukeBundle(),
    );
}
```

### Register the routing in `app/config/routing.yml`

```yml
ob_cache_nuke:
    resource: "@ObCacheNukeBundle/Resources/config/routing.yml"
    prefix:   /

fos_js_routing:
    resource: "@FOSJsRoutingBundle/Resources/config/routing/routing.xml"
```

### Publish assets:

```bash
$ php app/console assets:install --symlink web
```


## Credit

- [FOSJsRoutingBundle](https://github.com/FriendsOfSymfony/FOSJsRoutingBundle/blob/1.5.2/Resources/doc/index.md)
- [Ladda buttons](https://github.com/hakimel/Ladda) by [Hakim El Hattab](https://github.com/hakimel)


## License
This bundle is released under the MIT License. See the bundled [LICENSE]() file for details.