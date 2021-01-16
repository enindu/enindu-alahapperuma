package main

import (
	"bufio"
	"bytes"
	"errors"
	"fmt"
	"io/ioutil"
	"strings"
	"text/template"
	"time"
)

func getPages() []Page {
	return []Page{
		Page{
			File:        "index.html",
			Title:       "Back-end Developer | Linux Power User | Freelancer | Enindu Alahapperuma",
			Description: "I am Enindu Alahapperuma, a back-end developer from Sri Lanka. I do back-end programming, web development and a little bit of logo designing.",
			Type:        "website",
			Keywords:    "enindu, alahapperuma, back-end development, back-end programming, web designing, web development, php, go, node.js, deno, phyxle, sri lanka",
			Author:      "Enindu Alahapperuma (me@enindu.com)",
			URL:         "https://enindu.com/index.html",
			Image:       "https://enindu.com/images/jolly-roger.png",
			Time:        time.Now().Format("02-01-2006 03:04 pm"),
		},
		Page{
			File:        "contact.html",
			Title:       "Contact Me | Enindu Alahapperuma",
			Description: "My name is Enindu Alahapperuma and I am a back-end developer from Sri Lanka. If you wish to contact me, click this link and you are welcome.",
			Type:        "website",
			Keywords:    "enindu, alahapperuma, back-end development, back-end programming, web designing, web development, php, go, node.js, deno, phyxle, sri lanka, contact",
			Author:      "Enindu Alahapperuma (me@enindu.com)",
			URL:         "https://enindu.com/contact.html",
			Image:       "https://enindu.com/images/jolly-roger.png",
			Time:        time.Now().Format("02-01-2006 03:04 pm"),
		},
	}
}

func generatePages() error {
	pages := getPages()
	for _, item := range pages {
		templates, issue := template.ParseFiles("source/pages/layouts/base.html", "source/pages/includes/header.html", "source/pages/includes/footer.html", fmt.Sprintf("source/pages/%s", item.File))
		if issue != nil {
			return issue
		}

		var rawTemplatesBuffer bytes.Buffer
		issue = templates.Execute(&rawTemplatesBuffer, item)
		if issue != nil {
			return issue
		}

		var parsedTemplatesBuffer bytes.Buffer
		bufferScanner := bufio.NewScanner(strings.NewReader(rawTemplatesBuffer.String()))
		for bufferScanner.Scan() {
			parsedTemplatesBuffer.WriteString(strings.TrimSpace(bufferScanner.Text()))
		}

		issue = ioutil.WriteFile(fmt.Sprintf("public/%s", item.File), []byte(parsedTemplatesBuffer.String()), 0644)
		if issue != nil {
			return issue
		}
	}

	return nil
}

func generatePage(page string) error {
	templates, issue := template.ParseFiles("source/pages/layouts/base.html", "source/pages/includes/header.html", "source/pages/includes/footer.html", fmt.Sprintf("source/pages/%s", page))
	if issue != nil {
		return issue
	}

	pageIndex := -1
	pages := getPages()
	for index, item := range pages {
		if item.File == page {
			pageIndex = index
		}
	}
	if pageIndex == -1 {
		return errors.New("There is no page found using that name")
	}

	var rawTemplatesBuffer bytes.Buffer
	issue = templates.Execute(&rawTemplatesBuffer, pages[pageIndex])
	if issue != nil {
		return issue
	}

	var parsedTemplatesBuffer bytes.Buffer
	bufferScanner := bufio.NewScanner(strings.NewReader(rawTemplatesBuffer.String()))
	for bufferScanner.Scan() {
		parsedTemplatesBuffer.WriteString(strings.TrimSpace(bufferScanner.Text()))
	}

	issue = ioutil.WriteFile(fmt.Sprintf("public/%s", page), []byte(parsedTemplatesBuffer.String()), 0644)
	if issue != nil {
		return issue
	}

	return nil
}
