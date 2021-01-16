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
	generatePageFlag := flag.Bool("generate-page", false, "Generate a page")
	generatePagesFlag := flag.Bool("generate-pages", false, "Generate pages")
	generateAssetsFlag := flag.Bool("generate-assets", false, "Generate assets")
	flag.Parse()

	if *generatePageFlag {
		if flag.Arg(0) == "" {
			flag.PrintDefaults()
			return
		}

		issue := generatePage(flag.Arg(0))
		if issue != nil {
			log.Fatal(issue.Error())
		}

		fmt.Println(fmt.Sprintf("%s page generated", flag.Arg(0)))
		return
	}

	if *generatePagesFlag {
		issue := generatePages()
		if issue != nil {
			log.Fatal(issue.Error())
		}

		fmt.Println("Pages generated")
		return
	}

	if *generateAssetsFlag {
		if flag.Arg(0) == "" {
			flag.PrintDefaults()
			return
		}

		issue := generateAssets(flag.Arg(0))
		if issue != nil {
			log.Fatal(issue.Error())
		}

		fmt.Println("Assets generated")
		return
	}

	flag.PrintDefaults()
}
