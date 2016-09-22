# boilerplate



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

If you are using Windows, you need to use [Git Bash](https://git-for-windows.github.io/) to run these commands properly.

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

It does not run any `*:prod` task.

### `serve`

Runs browser-sync.

### `js`

It simply runs browserify without compression.

### `js:lint`

Runs your code against Standard.

### `js:prod`

It runs browserify with minifiyify for compression.

### `css`

It runs Stylus.

### `css:prod`

It runs Stylus with compression and autoprefixer.

### `img`

It just copy your images from your source.

### `img:prod`

Compress your images before copying.
