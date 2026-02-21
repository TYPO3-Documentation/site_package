# TYPO3 Site Package Tutorial Example

This Site Package can be used to follow the [TYPO3 Site
Package Tutorial](https://docs.typo3.org/permalink/t3sitepackage:start@14.3).
Team.

The tutorial describes the steps required to turn a basic design
template (HTML, CSS, JavaScript files, etc.) into a fully working,
mobile-responsive website. By following the steps of the Site Package
Tutorial, the reader builds a modern extension with all relevant files
stored at a central point and changes can easily be tracked in version
control. Despite the fact that TYPO3 supports several methods of
implementing websites, this approach is a very flexible and
professional way.

## Installation with Composer

Download the Site Package and save it into folder [packages/](https://docs.typo3.org/permalink/t3coreapi:directory-packages)
in the root of your TYPO3 installation.

Require the Site Package using Composer and DDEV:

```
ddev composer req t3docs/site-package:"@dev"
```

Or just Composer:

```
composer req t3docs/site-package:"@dev"
```

## Classic TYPO3 installations

When you intend to follow the Site Package Tutorial we recommend that you use a Composer-based installation
all paths and commands in the Tutorial are based on that type of installation.

Download the Site Package and save it into folder `typo3conf/ext/` in the root of your TYPO3 installation.

Activate extension "Site Package" with key site_package in the Extension Manager.

## Load Example data

With DDEV call:

```
ddev typo3 extension:setup
```

Without DDEV:

```
vendor/bin/typo3 extension:setup
```

If automatic loading fails you can also try to use the import command:

```
ddev typo3 impexp:import EXT:site_package/Initialisation/data.xml
```

## Include the Site set in your Site configuration

If not done by the extension setup or import command, you can copy the `Initialisation/Site/main`
folder to your [Site configuration storage](https://docs.typo3.org/permalink/t3coreapi:site-storage).

If you want to use an existing Site configuration, set the Site set "Site Package" as dependency.
You can do this in backend module "Sites -> Setup" or edit the file `config/sites/mysite/config.yaml`
and include the following lines:

```
dependencies:
  - t3docs/site-package
```

See also: [Create a basic site set](https://docs.typo3.org/permalink/t3sitepackage:minimal-extension-siteset).
