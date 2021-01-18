package main

import (
	"flag"
	"fmt"
	"log"
)

// Page struct
type Page struct {
	File        string
	Title       string
	Description string
	Type        string
	Keywords    string
	Author      string
	URL         string
	Image       string
	Time        string
}

func main() {
	pGen := flag.Bool("gen-page", false, "Generate a specific page\nEx: enindu.com -gen-page <page>")
	psGen := flag.Bool("gen-pages", false, "Generate all pages at once\nEx: enindu.com -gen-pages")
	cssGen := flag.Bool("gen-css", false, "Generate all CSSs at once\nEx: enindu.com -gen-css")
	flag.Parse()

	if *pGen {
		if flag.Arg(0) == "" {
			flag.PrintDefaults()
			return
		}

		e := genPage(flag.Arg(0))
		if e != nil {
			log.Fatal(e.Error())
		}

		fmt.Println(fmt.Sprintf("%s page is generated", flag.Arg(0)))
		return
	}

	if *psGen {
		e := genPages()
		if e != nil {
			log.Fatal(e.Error())
		}

		fmt.Println("Pages are generated")
		return
	}

	if *cssGen {
		e := genCSS()
		if e != nil {
			log.Fatal(e.Error())
		}

		fmt.Println("CSSs are generated")
		return
	}

	flag.PrintDefaults()
}
