# Collegium Academicum Website

This repo contains the new version of collegiumacademicum.de.

## Requirements

* Hugo: __>=0.49__
* YARN

## Installation

The website is a static website built with the static site generator [Hugo](gohugo.io). As CSS framework we use [Bulma](bulma.io).

You will need to have the `Hugo` binary installed. You may do this by:

| Dist | install command |
| --- | --- |
| Ubuntu | `sudo apt-get install hugo` |
| Arch Linux | `sudo pacman -S hugo` |
| Fedora | `sudo yum install hugo` |

And you need [Yarn](https://yarnpkg.com/lang/en/docs/install)

```bash
git clone https://github.com/CollegiumAcademicum/collegiumacademicum.de
yarn install
make local
```

## Compiling

| Command | Function |
| --- | --- |
| `make publish` | Build for online deployment (into ./upload/) and upload using `lftp` |
| `make local` | Build for local development (into ./public/)|

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
