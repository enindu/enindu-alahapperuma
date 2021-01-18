# enindu.com

I made this static page generator (Kinda) for generate my personal website.

## Build

Use Go compiler.

```
$ go build
```

## Usage

There are several flags that you can use for generate pages and assets. All source pages and assets are located in `source/` directory and all generated stuff located in `public/` directory.

```
$ enindu.com -gen-page <page> # Generate a specific page
$ enindu.com -gen-pages       # Generate all pages at once
$ enindu.com -gen-css         # Generate all CSSs at once
```
