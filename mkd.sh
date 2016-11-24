#!/bin/sh

in=$1

sed -e 's/^[\t ]*</<!--mkd--></g' -e 's/>[\t ]*$/><!--mkd-->/g' "${in}" \
| ./translate.sh ./translations/de_DE \
| ./Markdown.pl \
| sed -e 's/<!--mkd-->//g'
