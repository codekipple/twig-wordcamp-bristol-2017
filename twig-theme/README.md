
# Twig Theme

Based on the [Timber starter theme](https://github.com/timber/starter-theme).
Just a simple theme for demonstrating some features of Timber and Twig.

## What's here?

`templates/` contains all of your Twig templates. These pretty much correspond 1 to 1 with the PHP files that respond to the WordPress template hierarchy. At the end of each PHP template, you'll notice a `Timber::render()` function whose first parameter is the Twig file where that data (or `$context`) will be used. Just an FYI.

`styleguide/` contains a static site created with [Spress](http://spress.yosymfony.com/). 
You can view the styleguide in two ways:-
- Setup a dev domain to point at the `/twig-theme/styleguide/build` folder

- Install Spress and run Spress local server
    + Follow the [getting started](http://spress.yosymfony.com/docs/getting-started/) page on the Spress.
    + Using the command line `cd` into that directory and run `./watch.sh`, this will start Spress's built in server and serve the site from `http://localhost:4000`

`prisim/` contains a JS syntax highlighter for displaying code examples in the browser.

`sass/` contains .scss files used to create the final CSS.

`gulp/` contains gulp configs. You don't need to worry about this unless you wanted to make some CSS changes. This theme is for demonstrating twig rather than being an example gulp setup.

