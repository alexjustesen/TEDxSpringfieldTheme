```
  ________________      ________                      
 /_  __/ ____/ __ \_  _/_  __/ /_  ___  ____ ___  ___ 
  / / / __/ / / / / |/_// / / __ \/ _ \/ __ `__ \/ _ \
 / / / /___/ /_/ />  < / / / / / /  __/ / / / / /  __/
/_/ /_____/_____/_/|_|/_/ /_/ /_/\___/_/ /_/ /_/\___/ 
                                                      
```

# TEDxTheme

This theme has been designed and coded by [The Working Group](http://twg.ca) and [TEDxToronto](http://www.tedxtoronto.com) and modified by [Alex Justesen](http://alexjustesen.com) in the hopes that other TEDx organizations will find this easy to use to promote and manage their own events.

### Requirements

* **PHP 5.4** or greater
* **MySQL 5.0** or greater
* The **mod_rewrite** Apache module
* A recent version of **WordPress**

### Installation (Developers)

* `cd /wordpress/wp-content`
* `git clone git@github.com:alexjustesen/TEDxSpringfieldTheme.git`
* Install the plugin dependencies:
    * [Advanced Custom Fields](http://www.advancedcustomfields.com/)
    * [Option Tree](https://wordpress.org/plugins/option-tree/)


### Development

We've done our best to setup an efficient workflow using [Gulp.js](http://gulpjs.com/) and [Bower](http://bower.io/). You'll need to have `npm` installed before getting started. Development requires an understanding of the following commands:

* `npm install` - Install development dependencies
* `gulp watch` - Starts the Grunt task that builds css and js. Also has a livereload server running
* `gulp clean` - Cleans out the build folder
* `gulp build` - Builds the WordPress Theme zip file
* `gulp vendor-js vendor-css` - Concats and minifies Bower dependencies into a single `plugin.min.js` file. These dependencies are declared in the `Gulpfile.js`. To add a new plugin we recommend installing it with Bower and then declaring it in the gulp file.


### Change Log

#### v1.0.2 (Oct 3, 2016)
- Corrected the team member placeholder in `includes/custom_post_types/team.php`
- Corrected the text at the bottom of `footer.php` to meet the TEDx guidelines
- Removed link to the legal notice in `footer.php`

#### v1.0.1 (Sept 30, 2016)
- Removed reference to http protocol in `shortcode_templates/talk_shortcode.php` to support http and https
- Updated `screenshot.png` to match current theme preview

#### v1.0.0 (Sept 23, 2016)
- Forked from TEDxTheme and renamed to TEDxSpringfieldTheme
- Removed TWG and Jet Cooper images from `footer.php`
- Added Built by 'Alex Justesen' to `footer.php`
- Removed banner text and button from `page_templates/template_home.php`
- Removed speaker video preview from `shortcode_templates/speaker_card_shortcode.php`
- Removed related speaker video preview from `sidebar-speaker.php`
- Removed http protocol from YouTube preview image from `shortcode_templates/talk_shortcode.php` to support http and https protocols