#!/bin/sh

TR_LANGS="de en"

TR_LANGS=$(tr ' ' "\n" <<<"${TR_LANGS}")
export TR_LANGS

mkdir dest.tmp.d
while read lang; do
  TR_LANG="${lang}"
  export TR_LANG
  . ./translations/"${lang}"/*
  TR_DESCRIPTION="${description}"
  TR_TITLE="${title}"
  export TR_DESCRIPTION
  export TR_TITLE
  make
  mv ./dest "${lang}"
  mv "${lang}" dest.tmp.d/
done <<<"${TR_LANGS}"
mv dest.tmp.d dest

echo 'Copying extra files'
cp -r extras/* extras/.htaccess src/js dest/
shopt -s nullglob dotglob
files=(extras_binaries/*)
if [ ${#files[@]} -gt 0 ]; then
  echo 'Also copying large extra files'
  cp -r extras_binaries/* dest/
fi
echo 'Done copying.'
