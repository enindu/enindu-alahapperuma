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
			Title:       "Back-End Developer, Linux Power User & Freelancer | Enindu Alahapperuma",
			Description: "As a highly skilled and experienced back-end developer hailing from Sri Lanka, I specialize in the art of back-end programming, web development, and possess a proficiency in logo design. My name is Enindu Alahapperuma, and I am dedicated to providing exceptional service to my clients.",
			Type:        "website",
			Keywords:    "enindu, alahapperuma, back-end development, back-end programming, web designing, web development, php, go, node.js, deno, phyxle, sri lanka",
			Author:      "Enindu Alahapperuma (enindu@gmail.com)",
			URL:         "https://enindu.com/index.html",
			Image:       "https://enindu.com/images/jolly-roger.png",
			Time:        time.Now().Format("02-01-2006 03:04 pm"),
		},
		{
			File:        "contact.html",
			Title:       "Contact Me | Enindu Alahapperuma",
			Description: "Introducing Enindu Alahapperuma, a seasoned back-end developer hailing from Sri Lanka. I possess a wealth of expertise in the realm of back-end programming and web development. Should you desire to reach out and connect with me, kindly follow this link, and you will be greeted with a warm welcome.",
			Type:        "website",
			Keywords:    "enindu, alahapperuma, back-end development, back-end programming, web designing, web development, php, go, node.js, deno, phyxle, sri lanka, contact",
			Author:      "Enindu Alahapperuma (enindu@gmail.com)",
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
