#!/bin/sh

echo 'Syncing to server'
rsync --exclude-from='.gitignore' -aPq --del dest/ ship@web1.jugendrettet.org:~/vwww/new.jugendrettet.org/
echo 'Done syncing.'
