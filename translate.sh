#!/bin/sh

in="$(</dev/stdin)"

TEXT="${in}"

# File containing translations.

translations_dir=$1

files="$( find "${translations_dir}"/ -type f )"
while read file; do
  . "${file}"
done <<<"${files}"

declare NEW_TEXT

# All phrases that shall be replaced.
snippets="$( grep -o -E "_\(.+\)" <<<"${in}" )"

while read snippet; do
  # Get the name of the translated phrase in the translations file.
  translation_name="$( awk '{gsub(/^_\(|\)$/,"");print}' <<<"${snippet}" )"
  # Put translation into variable.
  translation_content="$( sed 's/\&/\\\\&/g' <<<"${!translation_name}" )"
  # Replace current phrase with translation.
  NEW_TEXT="$(
    gawk -v n="_\\\("${translation_name}"\\\)" -v c="${translation_content}" \
    '{gsub(n,c)}1' <<<"${TEXT}"
  )"
  TEXT="${NEW_TEXT}"
done <<<"${snippets}"

echo "${TEXT}"
