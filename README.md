[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

# WP Vue.js Starter Theme

Hi. I'm a starter theme helping you getting started with a Wordpress/vue.js/SCSS Stack with parcel.

Gutenberg and custom blocks enable us to easly create complex content blocks where Vue.js can be very helpful. Let me help you implement vue.js in your custom Theme.

I'm a theme meant for hacking so don't use me as a <em>Parent Theme</em>. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

- A just right amount of lean, well-commented, modern, HTML5 templates.
- A helpful 404 template.
- A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
- Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
- Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
- A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
- 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
  Note: `.no-sidebar` styles are not automatically loaded.
- Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
- Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
- Licensed under GPLv2 or later. :) Use it to make something cool.

## Getting Started

Download this theme from GitHub. cange the directory name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'wpvs'` (inside single quotations) to capture the text domain.
2. Search for `wpvs_` to capture all the function names.
3. Search for `Text Domain: wp-vuejs-starter` in `style.css`.
4. Search for <code>&nbsp;wp-vuejs-starter</code> (with a space before it) to capture DocBlocks.
5. Search for `wpvs-` to capture prefixed handles.

OR

1. Search for: `'wpvs'` and replace with: `'megatherium-is-awesome'`.
2. Search for: `wpvs_` and replace with: `megatherium_is_awesome_`.
3. Search for: `Text Domain: wp-vuejs-starter` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;\_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for: `wpvs-` and replace with: `megatherium-is-awesome-`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!

## Credits

This Template has been strongly inspired by:

- `Using Parce In A Vue.js App`: https://scotch.io/tutorials/using-parcel-in-a-vuejs-app
- `Spectre.css`: https://picturepan2.github.io/spectre/components/menu.html
- `Introducing ACF Blocks for Gutenberg`: https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/
