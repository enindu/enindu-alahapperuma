package main

import (
	"bufio"
	"bytes"
	"fmt"
	"io/ioutil"
	"regexp"
	"strings"
)

func generateAssets(directory string) error {
	assets, issue := ioutil.ReadDir(fmt.Sprintf("source/assets/%s/", directory))
	if issue != nil {
		return issue
	}

	var assetBuffer bytes.Buffer
	for _, item := range assets {
		binaryAsset, issue := ioutil.ReadFile(fmt.Sprintf("source/assets/%s/%s", directory, item.Name()))
		if issue != nil {
			return issue
		}

		bufferScanner := bufio.NewScanner(strings.NewReader(string(binaryAsset)))
		for bufferScanner.Scan() {
			if strings.Contains(bufferScanner.Text(), "/*") {
				continue
			}

			line := strings.TrimSpace(bufferScanner.Text())
			regex, issue := regexp.Compile(`(\s?[:;{},]\s?)`)
			if issue != nil {
				return issue
			}

			assetBuffer.WriteString(regex.ReplaceAllStringFunc(line, func(parsedLine string) string {
				return strings.TrimSpace(parsedLine)
			}))
		}

		issue = ioutil.WriteFile(fmt.Sprintf("public/%s/%s", directory, item.Name()), []byte(assetBuffer.String()), 0644)
		if issue != nil {
			return issue
		}

		assetBuffer.Reset()
	}

	return nil
}
