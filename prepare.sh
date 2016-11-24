#!/bin/sh

if [ ! -f wswsh ]; then
  wget https://github.com/JugendRettet/wswsh/raw/master/wswsh
else
  echo 'wswsh already there.'
fi

if [ ! -f src/css/style.css ]; then
  mkdir -p src/css
  wget -O src/css/style.css https://github.com/JugendRettet/css/raw/master/style.css
else
  echo 'style.css already there.'
fi

if [ ! -f transalations/*.md ]; then
  git clone --bare --mirror git@github.com:JugendRettet/translations.git
else
  echo 'transalations/ already there.'
fi
