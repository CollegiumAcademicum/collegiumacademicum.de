---
title: "{{ replace .Name "-" " "  | title }}"
date: {{ .Date }}
---

<audio controls>
	<source src="{{printf "%s%s%s" "/audio/" .Name ".mp3" | relURL }}">
	Your browser does not support the audio element
</audio>