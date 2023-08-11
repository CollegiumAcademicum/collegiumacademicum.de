# Collegium Academicum Website

[![Hugo](https://img.shields.io/badge/Buildwith-hugo-pink?logo=hugo)](https://gohugo.io/)
![GitHub](https://img.shields.io/github/license/morris-frank/unsupervised-source-separation)
![GitHub repo size](https://img.shields.io/github/repo-size/collegiumacademicum/collegiumacademicum.de)

This repo contains the code and content of collegiumacademicum.de.

## Requirements

- Hugo: **>=0.49**
- YARN

## Installation

The website is a static website built with the static site generator [Hugo](gohugo.io). As CSS framework we use [Bulma](bulma.io).

You will need to have the `Hugo` binary installed. You may do this by:

| Dist       | install command             |
| ---------- | --------------------------- |
| Ubuntu     | `sudo apt-get install hugo` |
| Arch Linux | `sudo pacman -S hugo`       |
| Fedora     | `sudo yum install hugo`     |

And you need [Yarn](https://yarnpkg.com/lang/en/docs/install)

```bash
git clone https://github.com/CollegiumAcademicum/collegiumacademicum.de
yarn install
```

## Compiling

| Command      | Function                                                             |
| ------------ | -------------------------------------------------------------------- |
| `./build.sh` | Build for online deployment (into ./upload/) and upload using `lftp` |

### Audio files

The audio files for the CA Ausstellung are way to big to put them in the Git project. Also having them in the content folder makes hugo considerably slower just because theyre huge. Therefore they have to be put into the web space by hand. Into the `/audio/` folder.

## Shortcodes

You can use the following custom shortcodes in the content markdown files to get programmatic content blocks:

| Shortcode                               | function                                                                                                                                      |
| --------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `{{< img src="" alt="" attr="" />}}`    | Includes an image and adds the modal popup. **Note the trailing slash!**                                                                      |
| `{{< pdf src="" width="" height="" >}}` | Embeds a PDF.                                                                                                                                 |
| `{{< audio ### >}}`                     | Embeds a audio file.                                                                                                                          |
| `{{< quotes source="" size="" >}}`      | Prints a grid of quotes. Source `team` or `supporters`. Data can be added/edited in `data/quotes_team.toml` and `data/quotes_supporters.toml` |
| `{{< timeline >}}`                      | Prints the timeline. Data can be added/edited in `data/timeline.toml`                                                                         |
| `{{< partners >}}`                      | Prints the list of partners. Data can be added/edited in `data/partners.toml`                                                                 |

## Various

### Videos

Encode videos two times as [recommended by Mozilla](https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Video_codecs):

- One with MP4 and libx264 Video + AAC audio
  ```bash
ffmpeg -i input.mp4 -c:a aac -crf 20 -preset slow -vf scale=-1:1080 output.mp4
  ```
- One with WEBM and VP8 video + Opus audio
  ```bash
ffmpeg -i input.mp4 -c:v libvpx-vp9 -c:a libopus -vf scale=-1:1080 output.webm
  ```

### Icons

Get from http://fontello.com/.

Icons needed: heart, euro, user, mail-alt, exclamation, wrench, phone, info, user-secret, github-circled, home, language
