# TYPO3 CMS Base Distribution

Get going quickly with TYPO3 CMS.

## Prerequisites

* PHP 7.4
* [Composer](https://getcomposer.org/download/)

## Quickstart

```bash
mkdir my-typo3-site
cd my-typo3-site
ddev config --project-type=typo3 --docroot=public --create-docroot
ddev start
ddev composer create "typo3/cms-base-distribution" --no-install
ddev composer install
ddev exec touch public/FIRST_INSTALL
ddev launch
```

### Setup

To start an interactive installation, you can do so by executing the following
command and then follow the wizard:

```bash
composer exec typo3cms install:setup
```

### Setup unattended (optional)

If you're a more advanced user, you might want to leverage the unattended installation.
To do this, you need to execute the following command and substitute the arguments
with your own environment configuration.

```bash
composer exec typo3cms install:setup \
    --no-interaction \
    --database-user-name=typo3 \
    --database-user-password=typo3 \
    --database-host-name=127.0.0.1 \
    --database-port=3306 \
    --database-name=typo3 \
    --use-existing-database \
    --admin-user-name=admin \
    --admin-password=password \
    --site-setup-type=site
```

### Development server

While it's advised to use a more sophisticated web server such as
Apache 2 or Nginx, you can instantly run the project by using PHPs` built-in
[web server](https://secure.php.net/manual/en/features.commandline.webserver.php).

* `TYPO3_CONTEXT=Development php -S localhost:8000 -t public`
* open your browser at "http://localhost:8000"

Please be aware that the built-in web server is single threaded and only meant
to be used for development.

## License

GPL-2.0 or later

## Site Extension App installation

* cd my-typo3-site/public/typo3conf/ext/
* ln -s ../../../ext/site_thenetcodeconflict .

In the container:

* composer require typo3/site_thenetcodeconflict:@dev 
