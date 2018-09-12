# Collegium Academicum Website

This repo contains the new version of collegiumacademicum.de.

## Requirements

* Hugo: __>=0.44__

## Installation

The website is a static website built with the static site generator [Hugo](gohugo.io). As CSS framework we use [Bulma](bulma.io).

You will need to have the `Hugo` and the `SASS` binary installed. You may do this by:

| Dist | install command |
| --- | --- |
| Ubuntu | `sudo apt-get install hugo ruby-sass` |
| Arch Linux | `sudo pacman -S hugo ruby-sass` |
| Fedora | `sudo yum install hugo rubygem-sass` |

Next clone the repo. As the repo contains submodules you will need to do:

```shell
git clone --recursive -j8 git://github.com/CollegiumAcademicum/collegiumacademicum.de.git
```

## Compiling

We use `make` to build the website. Copy the `Makefile.example` to `Makefile` and set the `FTP_USER` variable and the `LOCALURL` _if needed_.

| Command | Function |
| --- | --- |
| `make publish` | Build for online deployment (into ./upload/) and upload using `lftp` |
| `make local` | Build for local development (into ./public/)|
| `make clean` | Clean all generated files |
| `make css` | Only compile the SASS files |

### Audio files

The audio files for the CA Ausstellung are way to big to put them in the Git project. Also having them in the content folder makes hugo considerably slower just because theyre huge. Therefore they have to be put into the web space by hand. Into the `/audio/` folder.

## Shortcodes

You can use the following custom shortcodes in the content markdown files to get programmatic content blocks:

| Shortcode | function |
| --- | --- |
| `{{< img src="" alt="" attr="" />}}` | Includes an image and adds the modal popup. **Note the trailing slash!** |
| `{{< pdf src="" width="" height="" >}}`| Embeds a PDF. |
| `{{< audio ### >}}`| Embeds a audio file. |
| `{{< quotes source="" size="" >}}` | Prints a grid of quotes. Source `team` or `supporters`. Data can be added/edited in `data/quotes_team.toml` and `data/quotes_supporters.toml` |
| `{{< timeline >}}` | Prints the timeline. Data can be added/edited in `data/timeline.toml` |
| `{{< partners >}}` | Prints the list of partners. Data can be added/edited in `data/partners.toml` |
| `{{< hausprojekt-boxes >}}` | Outputs the menu boxes for the house projekt pages |
