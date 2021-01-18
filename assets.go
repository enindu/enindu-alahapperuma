package main

import (
	"bufio"
	"bytes"
	"fmt"
	"io/ioutil"
	"regexp"
	"strings"
)

func genAssets(d string) error {
	a, e := ioutil.ReadDir(fmt.Sprintf("source/assets/%s/", d))
	if e != nil {
		return e
	}

	var aBuf bytes.Buffer
	for _, v := range a {
		aBin, e := ioutil.ReadFile(fmt.Sprintf("source/assets/%s/%s", d, v.Name()))
		if e != nil {
			return e
		}

		s := bufio.NewScanner(strings.NewReader(string(aBin)))
		for s.Scan() {
			if strings.Contains(s.Text(), "/*") {
				continue
			}

			r, e := regexp.Compile(`(\s?[:;{},]\s?)`)
			if e != nil {
				return e
			}

			aBuf.WriteString(r.ReplaceAllStringFunc(strings.TrimSpace(s.Text()), func(l string) string {
				return strings.TrimSpace(l)
			}))
		}

		e = ioutil.WriteFile(fmt.Sprintf("public/%s/%s", d, v.Name()), []byte(aBuf.String()), 0644)
		if e != nil {
			return e
		}

		aBuf.Reset()
	}

	return nil
}
