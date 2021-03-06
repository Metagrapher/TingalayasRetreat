# [TRim Theme](http://trim.io/)

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)

TRim is a WordPress starter theme based on [HTML5 Boilerplate](http://html5boilerplate.com/) & [Bootstrap](http://getbootstrap.com/) that will help you make better themes.

* Source: [https://github.com/trim/trim](https://github.com/trim/trim)
* Home Page: [http://trim.io/](http://trim.io/)
* Twitter: [@retlehs](https://twitter.com/retlehs)
* Newsletter: [Subscribe](http://trim.io/subscribe/)
* Forum: [http://discourse.trim.io/](http://discourse.trim.io/)

## Installation

Clone the git repo - `git clone git://github.com/trim/trim.git` - or [download it](https://github.com/trim/trim/zipball/master) and then rename the directory to the name of your theme or website. [Install Grunt](http://gruntjs.com/getting-started), and then install the dependencies for TRim contained in `package.json` by running the following from the TRim theme directory:

```
npm install
```

Reference the [theme activation](http://trim.io/trim-101/#theme-activation) documentation to understand everything that happens once you activate TRim.

## Theme Development

After you've installed Grunt and ran `npm install` from the theme root, use `grunt watch` to watch for updates to your LESS and JS files and Grunt will automatically re-build as you write your code.

## Configuration

Edit `lib/config.php` to enable or disable support for various theme functions and to define constants that are used throughout the theme.

Edit `lib/init.php` to setup custom navigation menus and post thumbnail sizes.

## Documentation

### [TRim Docs](http://trim.io/docs/)

* [TRim 101](http://trim.io/trim-101/) — A guide to installing TRim, the files and theme organization
* [Theme Wrapper](http://trim.io/an-introduction-to-the-trim-theme-wrapper/) — Learn all about the theme wrapper
* [Build Script](http://trim.io/using-grunt-for-wordpress-theme-development/) — A look into the TRim build script powered by Grunt
* [TRim Sidebar](http://trim.io/the-trim-sidebar/) — Understand how to display or hide the sidebar in TRim

## Features

* Organized file and template structure
* HTML5 Boilerplate's markup along with ARIA roles and microformat
* Bootstrap
* [Grunt build script](http://trim.io/using-grunt-for-wordpress-theme-development/)
* [Theme activation](http://trim.io/trim-101/#theme-activation)
* [Theme wrapper](http://trim.io/an-introduction-to-the-trim-theme-wrapper/)
* Root relative URLs
* Cleaner HTML output of navigation menus
* Cleaner output of `wp_head` and enqueued scripts/styles
* Nice search (`/search/query/`)
* Image captions use `<figure>` and `<figcaption>`
* Example vCard widget
* Posts use the [hNews](http://microformats.org/wiki/hnews) microformat
* [Multilingual ready](http://trim.io/wpml/) (Brazilian Portuguese, Bulgarian, Catalan, Danish, Dutch, English, Finnish, French, German, Hungarian, Indonesian, Italian, Korean, Macedonian, Norwegian, Polish, Russian, Simplified Chinese, Spanish, Swedish, Traditional Chinese, Turkish, Vietnamese, Serbian)

## Contributing

Everyone is welcome to help [contribute](CONTRIBUTING.md) and improve this project. There are several ways you can contribute:

* Reporting issues (please read [issue guidelines](https://github.com/necolas/issue-guidelines))
* Suggesting new features
* Writing or refactoring code
* Fixing [issues](https://github.com/trim/trim/issues)
* Replying to questions on the [forum](http://discourse.trim.io/)

## Support

Use the [TRim Discourse](http://discourse.trim.io/) to ask questions and get support.
