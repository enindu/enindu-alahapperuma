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
	aGen := flag.Bool("gen-assets", false, "Generate assets in specific directory\nEx: enindu.com -gen-assets <path>")
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

		fmt.Println(fmt.Sprintf("%s page generated", flag.Arg(0)))
		return
	}

	if *psGen {
		e := genPages()
		if e != nil {
			log.Fatal(e.Error())
		}

		fmt.Println("Pages generated")
		return
	}

	if *aGen {
		if flag.Arg(0) == "" {
			flag.PrintDefaults()
			return
		}

		e := genAssets(flag.Arg(0))
		if e != nil {
			log.Fatal(e.Error())
		}

		fmt.Println("Assets generated")
		return
	}

	flag.PrintDefaults()
}
