#!/usr/local/bin/bash

in="$(</dev/stdin)"

TEXT="${in}"

# File containing translations.

translations_dir="$1"
common_dir="$2"

files="$( gfind "${translations_dir}"/ "${common_dir}"/ -type f -name "*.md" -not -path "*/.git/*" )"

# sanitize a little first

while read file; do
  ./sanitize.awk "${file}" > "${file}".tmp
done <<<"${files}"

while read file; do
  . "${file}".tmp
  rm "${file}".tmp
done <<<"${files}"

declare NEW_TEXT

# All phrases that shall be replaced.
snippets="$( grep -o -E "_\(.+\)" <<<"${in}" )"

while read snippet; do
  # Get the name of the translated phrase in the translations file.
  translation_name="$( gawk '{gsub(/^_\(|\)$/,"");print}' <<<"${snippet}" )"
  # Put translation into variable.
  translation_content="$( gsed -e '1d; $d' -e 's/\&/\\\\&/g' <<<"${!translation_name}" )"
  # Replace current phrase with translation.
  NEW_TEXT="$(
    gawk -v n="_\\\("${translation_name}"\\\)" -v c="${translation_content}" \
    '{gsub(n,c)}1' <<<"${TEXT}"
  )"
  TEXT="${NEW_TEXT}"
done <<<"${snippets}"

echo "${TEXT}"

