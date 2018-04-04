---
title: "{{ replace .Name "-" " "  | title }}"
date: {{ .Date }}
---

<audio controls>
	<source src="{{{{ .Name }}.wav | relURL }}">
	Your browser does not support the audio element
</audio>