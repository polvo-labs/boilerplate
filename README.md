# boilerplate

> *Less is more.*

A boilerplate intended to be both fast and productive, but yet simple.

## features

* [NPM Scripts](https://www.keithcirkel.co.uk/how-to-use-npm-as-a-build-tool/)
* [Browserify](http://browserify.org/)
* [Stylus](http://stylus-lang.com/)
* [BrowserSync](https://www.browsersync.io/)
* [Imagemin](https://github.com/imagemin/imagemin)

## usage

Make sure you do have [Node](https://nodejs.org/en/)
and [Git](https://git-scm.com/) installed in your machine.

Clone the repository:

`git clone {repository}`

Now, just install all dependencies:

`npm install`

## scripts

This boilerplate uses [NPM Scripts](https://www.keithcirkel.co.uk/how-to-use-npm-as-a-build-tool/) for
tasks automation.

Use `npm run [script]` to run these scripts:

### `dev`

It runs both `watch` and `serve` tasks in parallel.
Ideal for development mode.

### `build`

It runs all `*:prod` tasks in parallel.
**Run this task before deployment.**

### `watch`

It watches your source files for changes, and call
the specific task for each sources.

It doesn't run any `*:prod` task, neither launches browser-sync.

### `serve`

It launches [BrowserSync](https://www.browsersync.io/).

### `js`

It runs [Browserify](http://browserify.org/) on your JS code.

### `js:lint`

Test your code against [Standard](https://github.com/feross/standard).

### `js:prod`

It runs [Browserify](http://browserify.org/) with minifiyify for compression and sourcemaps.

### `js:watch`

It runs [Watchify](https://github.com/substack/watchify).

### `js:clear`

Clear all files from `public/js`.

### `css`

It runs Stylus.

### `css:prod`

It runs Stylus with compression and autoprefixer.

### `css:clear`

Clear all files from `public/css/`;

### `img`

It just copy your images from your source.

### `img:prod`

Compress your images before copying.

### `img:clear`

Clear all files from dest folder (public/img/).

### `styleguide`

Generate Styleguide in `public/styleguide`
