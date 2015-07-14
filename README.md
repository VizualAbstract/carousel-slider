Modman compatible "Carousel-Slider"
=============
This is a simple, but flexible carousel slider for Magento. Based on [MagentoSlider](https://github.com/stepzerosolutions/MagentoSlider) by [stepzerosolutions](https://github.com/stepzerosolutions), modernized and made into a modman extension, simplyfing its installation and removal.

## Overview

Carousel-Slider will add a contextual menu to your Magento installation called Carousel Slider (found under CMS > Carousel Slider).

From here you'll be able to create **Carousels** and **Slides**. Carousels are embeddable into content blocks and house individual slides. Slides have a number of options and fields, including caption blocks and links.

## Integration
After creating a **Carousel** you'll need to embed it into a static block using the following tag:

```js
{{block type="slider/slider" carousel_id="1" carousel_name="my-carousel" template="carousel/slider/slider.phtml" name="slider" as="slider" }}
```

--
**REMEMBER:** Update the values for `carousel_id` and `carousel_name` for each Carousel you embed.

- **carousel_id**: This is an ID number assigned to each Carousel when it's created. *Look for it in the ID column on the Carousel Grid page (found under CMS > Carousel Slider > Carousel)*

- **carousel_name**: Use this to give your Carousel an `id=""` tag when the HTML block is rendered, allowing you to call specific styles or scripts on it.

## Javascript
The module will be installed without any javascript for now. Future plans will allow you to leave javascript disabled, or install a variety of scripts (lke Owl Carousel or Slick.js)

## Styling the Carousel
For now, the carousel comes without styling. This will allow you to use it for things other than a carousel, such as stacking images on a homepage.

#### HTML Structure Overview
Slide will render different depending on which form fields and filled out in the backend

```html
	<section id="{{ carousel_name }}" class="carousel-slider">
		<div class="slide-wrapper">

			<!-- slide: no link, no caption -->
			<div class="slide-item">
				<img src="{{ slide_image_path }}" class="slide-image">
			</div>

			<!-- slide: link, no caption -->
			<div class="slide-item">
				<a href="{{ slide_url }}" class="slide-link">
					<img src="{{ slide_image_path }}" class="slide-image" title="{{ slide_title }}">
				</a>
			</div>

			<!-- slide: link, caption -->
			<div class="slide-item">
				<a href="{{ slide_url }}" class="slide-link">
					<img src="{{ slide_image_path }}" class="slide-image" title="{{ slide_title }}">
					<div class="slide-caption">
						{{ slide_caption }}
					</div>
				</a>
			</div>

			<!-- slide: link, caption, button-text -->
			<div class="slide-item">
				<img src="{{ slide_image_path }}" class="slide-image" title="{{ slide_title }}">
				<div class="slide-caption">
					{{ slide_caption }}
				</div>
				<a href="{{ slide_url }}" title="{{ slide_title }}">
					{{ button_text }}
				</a>
			</div>
		</div>
	</section>
```
--
#### Class Structure Overview

```css
section.carousel-slider {
	/* Module Wrapper */

	div.slide-wrapper {
		/* Inner Wrapper */

		div.slide-item {
			/* Individual Slide */

			a.slide-link {
				/* If available, will wrap slide in a link */

			}
			img.slide-image {
				/* The slide image */

			}
			div.slide-caption {
				/* If available, a slide caption box */

			}
			a.slide-button {
				/* If available, a call-to-action button */

			}
		}
	}
}
```

## Installation

Make sure you have modman installed. See [https://github.com/colinmollenhour/modman/](https://github.com/colinmollenhour/modman/) for details.

```
$ cd /var/www/html				# Wherever Magento is installed
$ modman init					# This is only done once in your application root
$ modman clone https://github.com/VizualAbstract/multiple-select-nav.git
```
It's important that you re-index for the plugin to work properly (found under System > Index Management).

If [n98-magerun](https://github.com/netz98/n98-magerun) is installed, all you have to do is run:

```
$ magerun index:reindex:all
```
--
### Allowing Symlinks
  * Web server must follow symlinks
  * For Magento, if using template files in a modman module, you must enable "Allow Symlinks" (found under System > Configuration > Advanced > Developer)

![Allow Symlinks](http://host.coreycapetillo.com/git/media/allow-symlinks.png)

## Working with modman
For more information on working with modman modules, see their excellent tutorial at [https://github.com/colinmollenhour/modman/wiki/Tutorial](https://github.com/colinmollenhour/modman/wiki/Tutorial).

## Future Plans
- Create options to Enable, Disable, or select jQuery/Carousel Plugins (Owl Carousel or Slick.js)
- Ability to automatically Enable/Disable carousel scripts
- Allow the creation of multiple links (As opposed to 1 caption, 1 link)
- Custom classes per slide item