# Custom content blocks

For the custom content blocks to be displayed, the extension needs to be installed:

```
ddev composer install friendsoftypo3/content-blocks
```

## Kickstarting a new content block

You can kickstart a new content block using the command:

```
ddev typo3 content-blocks:create
```

Afterwards run:

```
ddev typo3 cache:flush -g system
ddev typo3 extension:setup --extension=site_package
```

About how to create additional content blocks have a look at
[TYPO3 Content Blocks manual](https://docs.typo3.org/permalink/friendsoftypo3-content-blocks:start).
