# Collegium Academicum Website

This repo contains the new version of collegiumacademicum.de.

## Installation
The website is a static website built with the static site generator [Hugo](gohugo.io). As CSS framework we use [Bulma](bulma.io).

You will need to have the `Hugo` and the `SASS` binary installed. You may do this by:

| Dist | install command |
| --- | --- |
| Ubuntu | `sudo apt-get install hugo ruby-sass` |
| Arch Linux | `sudo pacman -S hugo ruby-sass` |
| Fedora | `sudo yum install hugo rubygem-sass` |

Next clone the repo. As the repo contains submodules you will need to do:

```
git clone --recursive -j8 git://github.com/CollegiumAcademicum/collegiumacademicum.de.git
```
## Compiling
We use make to build the website. For _development_ mode you have to edit the `LOCALURL` variable in the `Makefile` to point to your local webservers base URL.

| Command | Function |
| --- | --- |
| `make publish` | Build for online deployment (into ./upload/)|
| `make local_publish` | Build for local development (into ./public/)|
| `make clean` | Clean the build folder |
| `make html` | Build the html files for online deployment |
| `make local_html` | Build the html files for local development |
| `make css` | Only compile the SASS files |

### Audio files
The audio files for the CA Ausstellung are way to big to put them in the Git project. Also having them in the content folder makes hugo considerably slower just because theyre huge. Therefore they have to be put into the web space by hand. Into the `/audio/` folder.

## Shortcodes
You can use the following custom shortcodes in the content markdown files to get programmatic content blocks:

| Shortcode | function |
| --- | --- |
| `{{< img src="" alt="" attr="" >}}` | Includes an image and adds the modal popup. |
| `{{< cimg src="" alt="" attr="" >}} {{< /cimg >}}` | Includes an image and adds the modal popup with the given content in the modal.  |
| `{{< carousel >}}` | Prints the quote carousel. Data can be added/edited in `data/carousel.toml` |
| `{{< timeline >}}` | Prints the timeline. Data can be added/edited in `data/partner.toml` |
| `{{< partners >}}` | Prints the list of partners. Data can be added/edited in `data/timeline.toml` |