#!/bin/sh

make
echo 'Copying other files'
cp -r extras_binaries/* extras/* extras/.htaccess src/js dest/
echo 'Done copying.'
