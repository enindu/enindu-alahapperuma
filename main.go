package main

import (
	"flag"
	"fmt"
	"log"
)

// Page struct
type Page struct {
	File        string
	URL         string
	Title       string
	Description string
	Keywords    string
	Type        string
	Author      string
	Username    string
	Twitter     string
	Image       string
	Time        string
}

func main() {
	generatePageFlag := flag.Bool("Gp", false, "Generate a specific page\nEx: enindu.com -Gp <page>")
	generatePagesFlag := flag.Bool("Gps", false, "Generate all pages at once\nEx: enindu.com -Gps")
	generateStylesFlag := flag.Bool("Gs", false, "Generate all CSSs at once\nEx: enindu.com -Gs")

	flag.Parse()

	if *generatePageFlag {
		if flag.Arg(0) == "" {
			flag.PrintDefaults()

			return
		}

		exception := generatePage(flag.Arg(0))
		if exception != nil {
			log.Fatal(exception.Error())
		}

		fmt.Printf("%s page is generated\n", flag.Arg(0))

		return
	}

	if *generatePagesFlag {
		exception := generatePages()
		if exception != nil {
			log.Fatal(exception.Error())
		}

		fmt.Println("Pages are generated")

		return
	}

	if *generateStylesFlag {
		exception := generateStyles()

		if exception != nil {
			log.Fatal(exception.Error())
		}

		fmt.Println("Styles are generated")

		return
	}

	flag.PrintDefaults()
}
