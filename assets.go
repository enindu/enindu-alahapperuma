package main

import (
	"bufio"
	"bytes"
	"fmt"
	"io/ioutil"
	"regexp"
	"strings"
)

func genCSS() error {
	css, e := ioutil.ReadDir("source/assets/css")
	if e != nil {
		return e
	}

	var cssBuf bytes.Buffer
	for _, v := range css {
		cssBin, e := ioutil.ReadFile(fmt.Sprintf("source/assets/css/%s", v.Name()))
		if e != nil {
			return e
		}

		s := bufio.NewScanner(strings.NewReader(string(cssBin)))
		for s.Scan() {
			r, e := regexp.Compile(`\s*?[:;{},!\+]\s*?`)
			if e != nil {
				return e
			}

			cssBuf.WriteString(r.ReplaceAllStringFunc(strings.TrimSpace(s.Text()), strings.TrimSpace))
		}
	}

	r, e := regexp.Compile(`\/\*[^*]*\*+([^/*][^*]*\*+)*\/`)
	if e != nil {
		return e
	}

	var minCSSBuf bytes.Buffer
	minCSSBuf.WriteString(r.ReplaceAllString(cssBuf.String(), ""))

	e = ioutil.WriteFile("public/css/style.css", []byte(minCSSBuf.String()), 0644)
	if e != nil {
		return e
	}

	return nil
}
