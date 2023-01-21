package main

import (
	"bufio"
	"bytes"
	"fmt"
	"os"
	"regexp"
	"strings"
)

func generateStyles() error {
	var stylesBuffer bytes.Buffer
	var minifiedStylesBuffer bytes.Buffer

	styles, exception := os.ReadDir("source/assets/css")
	if exception != nil {
		return exception
	}

	for _, v := range styles {
		styleBinary, exception := os.ReadFile(fmt.Sprintf("source/assets/css/%s", v.Name()))
		if exception != nil {
			return exception
		}

		scanner := bufio.NewScanner(strings.NewReader(string(styleBinary)))
		for scanner.Scan() {
			regex, exception := regexp.Compile(`\s*([\:\;\{\}\,\!\+\-\/\*\<\>\(\)])\s*`)
			if exception != nil {
				return exception
			}

			stylesBuffer.WriteString(regex.ReplaceAllStringFunc(strings.TrimSpace(scanner.Text()), strings.TrimSpace))
		}
	}

	regex, exception := regexp.Compile(`\/\*[^*]*\*+([^/*][^*]*\*+)*\/`)
	if exception != nil {
		return exception
	}

	minifiedStylesBuffer.WriteString(regex.ReplaceAllString(stylesBuffer.String(), ""))

	exception = os.WriteFile("public/css/style.css", minifiedStylesBuffer.Bytes(), 0644)
	if exception != nil {
		return exception
	}

	return nil
}
