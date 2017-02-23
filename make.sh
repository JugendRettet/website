#!/bin/sh

TR_LANGS="de en"

TR_LANGS=$(tr ' ' "\n" <<<"${TR_LANGS}")
export TR_LANGS

mkdir dest.tmp.d
while read lingua; do
  TR_LANG="${lingua}"
  export TR_LANG
  . ./translations/"${TR_LANG}"/home.md
  TR_DESCRIPTION="${description}"
  TR_TITLE="${title}"
  export TR_DESCRIPTION
  export TR_TITLE
  echo "Handling language ${TR_LANG}"
  make
  mv ./dest "${TR_LANG}"
  mv "${TR_LANG}" dest.tmp.d/
done <<<"${TR_LANGS}"
mv dest.tmp.d dest

echo 'Copying extra files'
cp -r extras/* extras/.htaccess dest/
shopt -s nullglob dotglob
files=(extras_binaries/*)
if [ ${#files[@]} -gt 0 ]; then
  echo 'Also copying large extra files'
  cp -r extras_binaries/* dest/
fi
echo 'Done copying.'

# Vars passed along by git-publish
if [ ! -z "${WWW_DIR}" ] && [ ! -z "${URL}" ]; then
  rsync -nqaP --del --exclude-from='.gitignore' dest/ "${WWW_DIR}"/"${URL}"/
  printf "%s\n" 'Synced.'
else
  printf "%s\n" 'Vars for sync not given.'
fi
