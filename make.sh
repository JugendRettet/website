#!/bin/sh

make
echo 'Copying other files'
cp -r images fonts graphics videos src/js .htaccess dest/
echo 'Done copying.'