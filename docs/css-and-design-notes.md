# CSS & design system notes

## Style guide

[A style guide is viewable, here.](http://libraries.mit.edu/style-guide/)

Broadly speaking, there are two main CSS files associated with the Libraries' WordPress theme:

## [style.css](/style.css) (`/style.css`).

This is the original Libraries' WordPress CSS file. It contains a style reset, as well as a range of default styles for handling WordPress related markup. It is essentially a copy of the WordPress twentytwelve theme CSS, with perhaps a few rules added/removed. This file is essential to the theme, as the comments at the top of the file define the theme for WordPress:
```
/*
Theme Name: MIT Libraries
Author: Lightning Trumpet
Author URI: http://wordpress.org/
Version: 1.1

MIT Libraries theme built for the MIT Libraries website.
*/
```

While it is necessary for all WordPress themes to have a `style.css` file, it should be noted all the CSS rules in this particular file could more effieciently handled by compiling and/or concatenating them into the global.css file (details below). The goal should be for the Libraries' theme to load a single CSS file, rather than a `style.css`	and a `global.css`.

### Loading this file in the theme

WordPress loads this file automatically in the document `<head>`.

## global.css

This is the file that contains the vast majority of CSS rules associated with the Libraries' WordPress theme.

This is also a build file, meaning that it is purely the result of a series of automated build steps, and is never actually touched by anyone. Furthermore, build files are not currently checked-in to this repository, meaning the _actual_ `global.css` file, while uploaded to the server, is not viewable in this repository. This file is compiled from a series of Sass files.

### Sass file structure

The [global.scss](/css/global.scss) (`/css/global.scss`) imports the proper Sass partials and files. The only two full Sass files that are compiled ([main.scss](/css/main.scss) and [responsive.scss](/css/responsive.scss)) are leftover from the work of a previous developer. While these files have been trimmed dramatically from their original sizes, further work can and should be done to reduce or eliminate the number of rules in those files.

The Sass partials are broken up into three directories:

#### [/modules](/css/modules) (`/css/modules`)

This directory contains Sass partials that do not actually output any CSS (mixins, variables, etc.)

#### [/partials](/css/partials) (`/css/partials`)

This directory contains Sass partials that output actual CSS. Each file is modularized and contains only a specific set of rules (i.e. `_messages.scss` contains Sass relating to site messages, `_footer.scss` contains Sass relating to the site footer, etc.).

#### [/libs](/css/libs) (`/css/libs`)

This directory contains third-party Sass.

### Build process

The `global.css` file is first compiled from a series of Sass files, and is then autoprefixed and minified in separate builds. To date, these builds have been handled using [Grunt.js](http://gruntjs.com/), though there are certainly other ways to handle them. The Grunt tasks in use are checked-in to this repository, at [/tasks/options](/tasks/options) (`/tasks/options`). The Gruntfile is also checked-in, at [Gruntfile.js](/Gruntfile.js) (`/Gruntfile.js`).

#### Sass compiling

The `global.scss` file is first compiled into `/css/build/global.css`.

#### Autoprefixing

This file is then autoprefixed (into `/css/build/prefixed/global.css`), meaning that the Grunt Autoprefixer plugin automatically adds prefixed CSS rules where necessary to the file. Note that this means that prefixes are never hand-written into the CSS. _This step is critically important_ to ensure that the site performs well and looks good on older browsers.

#### Minification

This file is then minified into `css/build/minified/global.css`. This dramatically reduces the CSS file size, and should also be considered a critical step.

### Loading this file in the theme

This file is properly registered and enqueued, and loaded in the `<head>`, in [functions.php](/functions.php) (`/functions.php`).