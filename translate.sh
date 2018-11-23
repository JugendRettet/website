#!/usr/bin/env bash

in="$(</dev/stdin)"

TEXT="${in}"

# File containing translations.

translations_dir="$1"
common_dir="$2"

files="$( find "${translations_dir}"/ "${common_dir}"/ -type f -name "*.md" -o -path "*/.git/*" -prune )"

# sanitize a little first

while read file; do
  ./sanitize.awk "${file}" > "${file}".tmp
done <<<"${files}"

while read file; do
  . "${file}".tmp
  rm "${file}".tmp
done <<<"${files}"

declare NEW_TEXT

# special preprocessed snippets

NEW_TEXT="$(
  NEWEST_NEWS="$(
    echo
    echo
    echo "${archive_current}" | ./scripts/nth_occurrences.sh -s '####' -n 3 \
    | sed -e 's/\&/\\\\&/g'
  )"

  gawk -v m='<!--newest_news-->' -v n="${NEWEST_NEWS}" \
  '{gsub(m,n)}1' <<<"${TEXT}"
)"

TEXT="${NEW_TEXT}"


# All phrases that shall be replaced.
snippets="$( grep -o -E "_\(.+\)" <<<"${in}" | sed '/^[[:space:]]*$/d' )"

while read snippet; do
  if [ ! -z "${snippet}" ]; then
    # Get the name of the translated phrase in the translations file.
    translation_name="$( awk '{gsub(/^_\(|\)$/,"");print}' <<<"${snippet}" )"
    # Put translation into variable.
    translation_content="$( sed -e '1d; $d' -e 's/\&/\\\\&/g' <<<"${!translation_name}" )"
    # Replace current phrase with translation.
    NEW_TEXT="$(
      gawk -v n="_\\\("${translation_name}"\\\)" -v c="${translation_content}" \
      '{gsub(n,c)}1' <<<"${TEXT}"
    )"
    TEXT="${NEW_TEXT}"
  fi
done <<<"${snippets}"

echo "${TEXT}"

