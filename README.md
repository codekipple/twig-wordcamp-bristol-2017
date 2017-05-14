# WordCamp Bristol 2017 talk project files
## Get Twig. Use Twig. Smile.

![Twig cartoon character wearing a cape](https://github.com/codekipple/twig-wordcamp-bristol-2017/blob/master/twig-cape.jpg)

Talk slides [https://slides.com/codekipple/get-twig-use-twig-smile](https://slides.com/codekipple/get-twig-use-twig-smile).

Three example themes for you to play with:-
- **Twig** - Uses Twig via the Timber plugin. Includes an integrated styleguide via Spress.
- **Child** - Child of Twig theme, demonstrates how you can override twig templates in child themes.
- **Normal** - Same design as the Twig theme but no Twig.

## Getting up and running
- Setup a WordPress install and add these three themes
- Install the Timber plugin [https://en-gb.wordpress.org/plugins/timber-library](https://en-gb.wordpress.org/plugins/timber-library/)

## Styleguide
The styleguide is integrated into the `twig-theme`. It is a static site generated by [Spress](http://spress.yosymfony.com/). 

You can view the styleguide in two ways:-
1. Setup a dev domain to point at the `/twig-theme/styleguide/build` folder

2. Install Spress and run Spress local server
    -   Follow the [getting started](http://spress.yosymfony.com/docs/getting-started/) page on the Spress.
    - Using the command line `cd` into that directory and run `./watch.sh`, this will start Spress's built in server and serve the site from `http://localhost:4000`

