#!/usr/bin/env bash
PWD=$(pwd)
echo "Building site in ${PWD}"

hugo -d "${PWD}/upload" -b https://test.collegiumacademicum.de/

# Inline the Newsletters
for dir in ${PWD}/upload/newsletter/*_*; do
    [ -d "${dir}" ] || continue
    echo "node_${dir}"
    ./node_modules/.bin/juice --web-resources-images=false "${dir}/index.html" "${dir}/index.html"
done

# Beautify everything
# find "${PWD}/upload" -type f -name "*.html" -exec node_modules/.bin/html-beautify -s 2 --no-preserve-newlines -r {} \;
