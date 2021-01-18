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

func genPages() error {
	p := getPages()
	for _, v := range p {
		t, e := template.ParseFiles(
			"source/pages/layouts/base.html",
			"source/pages/includes/header.html",
			"source/pages/includes/footer.html",
			fmt.Sprintf("source/pages/%s", v.File),
		)
		if e != nil {
			return e
		}

		var tBuf bytes.Buffer
		e = t.Execute(&tBuf, v)
		if e != nil {
			return e
		}

		var lBuf bytes.Buffer
		s := bufio.NewScanner(strings.NewReader(tBuf.String()))
		for s.Scan() {
			lBuf.WriteString(strings.TrimSpace(s.Text()))
		}

		e = ioutil.WriteFile(fmt.Sprintf("public/%s", v.File), []byte(lBuf.String()), 0644)
		if e != nil {
			return e
		}
	}

	return nil
}

func genPage(p string) error {
	t, e := template.ParseFiles(
		"source/pages/layouts/base.html",
		"source/pages/includes/header.html",
		"source/pages/includes/footer.html",
		fmt.Sprintf("source/pages/%s", p),
	)
	if e != nil {
		return e
	}

	pgs := getPages()
	idx := -1
	for i, v := range pgs {
		if v.File == p {
			idx = i
		}
	}
	if idx == -1 {
		return errors.New("There is no page found using that name")
	}

	var tBuf bytes.Buffer
	e = t.Execute(&tBuf, pgs[idx])
	if e != nil {
		return e
	}

	var lBuf bytes.Buffer
	s := bufio.NewScanner(strings.NewReader(tBuf.String()))
	for s.Scan() {
		lBuf.WriteString(strings.TrimSpace(s.Text()))
	}

	e = ioutil.WriteFile(fmt.Sprintf("public/%s", p), []byte(lBuf.String()), 0644)
	if e != nil {
		return e
	}

	return nil
}
