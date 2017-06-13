#!/usr/local/bin/bash

in=$1

gsed -e 's/^[\t ]*</<!--mkd--></g' -e 's/>[\t ]*$/><!--mkd-->/g' "${in}" \
| ./translate.sh ./translations/"${TR_LANG}" ./translations/common \
| ./Markdown.pl \
| gsed -e 's/<!--mkd-->//g'
