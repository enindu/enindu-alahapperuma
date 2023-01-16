package main

import (
	"bufio"
	"bytes"
	"errors"
	"fmt"
	"os"
	"strings"
	"text/template"
	"time"
)

func getPages() []Page {
	return []Page{
		{
			File:        "index.html",
			Twitter:     "summary_large_image",
			Title:       "Back-End Developer| Linux Power User | Freelancer | Enindu Alahapperuma",
			Description: "Expert back-end developer from Sri Lanka, Enindu Alahapperuma, specializes in web development, back-end programming, and logo design. Offers exceptional service to clients.",
			Type:        "website",
			Keywords:    "enindu alahapperuma, back-end development, back-end programming, web development, PHP, Go, Node.js, Deno, Phyxle, Sri Lanka",
			Author:      "Enindu Alahapperuma (enindu@gmail.com)",
			Username:    "@enindu",
			URL:         "https://enindu.com/index.html",
			Image:       "https://enindu.com/images/jolly-roger.png",
			Time:        time.Now().Format("02-01-2006 03:04 pm"),
		},
		{
			File:        "contact.html",
			Twitter:     "summary_large_image",
			Title:       "Contact Me | Enindu Alahapperuma",
			Description: "Expert back-end developer Enindu Alahapperuma from Sri Lanka offers extensive experience in back-end programming and web development. Connect with him through the provided link for a warm welcome.",
			Type:        "website",
			Keywords:    "enindu alahapperuma, back-end developer, web development, back-end programming, sri lanka, connect, link, warm welcome",
			Author:      "Enindu Alahapperuma (enindu@gmail.com)",
			Username:    "@enindu",
			URL:         "https://enindu.com/contact.html",
			Image:       "https://enindu.com/images/jolly-roger.png",
			Time:        time.Now().Format("02-01-2006 03:04 pm"),
		},
	}
}

func generatePages() error {
	pages := getPages()
	for _, v := range pages {
		template, exception := template.ParseFiles(
			"source/pages/layouts/base.html",
			"source/pages/includes/header.html",
			"source/pages/includes/footer.html",
			fmt.Sprintf("source/pages/%s", v.File),
		)
		if exception != nil {
			return exception
		}

		var templateBuffer bytes.Buffer
		exception = template.Execute(&templateBuffer, v)
		if exception != nil {
			return exception
		}

		var minifiedTemplateBuffer bytes.Buffer
		scanner := bufio.NewScanner(strings.NewReader(templateBuffer.String()))
		for scanner.Scan() {
			minifiedTemplateBuffer.WriteString(strings.TrimSpace(scanner.Text()))
		}

		exception = os.WriteFile(fmt.Sprintf("public/%s", v.File), minifiedTemplateBuffer.Bytes(), 0644)
		if exception != nil {
			return exception
		}
	}

	return nil
}

func generatePage(p string) error {
	template, exception := template.ParseFiles(
		"source/pages/layouts/base.html",
		"source/pages/includes/header.html",
		"source/pages/includes/footer.html",
		fmt.Sprintf("source/pages/%s", p),
	)
	if exception != nil {
		return exception
	}

	pages := getPages()
	index := -1
	for i, v := range pages {
		if v.File == p {
			index = i
		}
	}
	if index == -1 {
		return errors.New("there is no page found using that name")
	}

	var templateBuffer bytes.Buffer
	exception = template.Execute(&templateBuffer, pages[index])
	if exception != nil {
		return exception
	}

	var minifiedTemplateBuffer bytes.Buffer
	scanner := bufio.NewScanner(strings.NewReader(templateBuffer.String()))
	for scanner.Scan() {
		minifiedTemplateBuffer.WriteString(strings.TrimSpace(scanner.Text()))
	}

	exception = os.WriteFile(fmt.Sprintf("public/%s", p), minifiedTemplateBuffer.Bytes(), 0644)
	if exception != nil {
		return exception
	}

	return nil
}
