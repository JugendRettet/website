#!/bin/sh

in=$1

sed -e 's/^[\t ]*</<!--mkd--></g' -e 's/>[\t ]*$/><!--mkd-->/g' "${in}" \
| ./translate.sh ./translations/"${TR_LANG}" ./translations/common \
| ./Markdown.pl \
| sed -e 's/<!--mkd-->//g'
