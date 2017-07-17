# Kirby Grid Gallery

Version 1.0

## Installation

### 1. Kirby CLI

If you are using the Kirby CLI, you can install this plugin by running the following commands in your shell:

```text
$ cd path/to/kirby
$ kirby plugin:install lauriiii/grid-gallery
```

### 2. Clone or download

- Clone or download this repository.
- Unzip the archive if needed and rename the folder to grid-gallery.

Make sure that the plugin folder structure looks like this:

```text
site/plugins/grid-gallery/
```

### Include the plugin CSS inside of <head>

```
echo css('assets/plugins/grid-gallery/css/grid-gallery.css');
```

## Usage

```text
(gallery: image1.jpg image2.jpg image3.jpg)
```

### Options

#### 1. Columns

Default: Nr. of images (up to 8 after which it defaults to 4)

```text
(gallery: image1.jpg image2.jpg image3.jpg columns: 4)
```

#### 2. Mobile Columns

Default: 1

```text
(gallery: image1.jpg image2.jpg image3.jpg columns: 4 mobilecolumns: 2)
```

#### 3. Class

```text
(gallery: image1.jpg image2.jpg image3.jpg columns: 4 class: test)
```

#### 4. Links

Wraps the images with a link to the file

Default: false

```text
(gallery: image1.jpg image2.jpg image3.jpg columns: 4 links: true)
```

### Config options

You can use the following settings on your config file to change the defaults.

```php
c::set('gridgallery.default.class', 'default');
c::set('gridgallery.default.links', true);
c::set('gridgallery.default.mobilecolumns', '2');
```

## License

http://www.opensource.org/licenses/mit-license.php

## Author

Lauri Liimatta
http://lauriliimatta.com