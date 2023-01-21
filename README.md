# ENINDU.COM

I made this static page generator for generate my personal website.

## BUILD

Use Go compiler.

```
$ go build
```

## USAGE

There are several flags that you can use to generate pages and assets. All source pages and assets are located in `source/` directory and all generated stuff located in `public/` directory.

```
$ enindu.com -Gp <page>  # Generate a specific page
$ enindu.com -Gps        # Generate all pages at once
$ enindu.com -Gs         # Generate all CSSs at once
```
