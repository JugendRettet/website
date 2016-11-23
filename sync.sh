#!/bin/sh

echo 'Syncing to server'
rsync -aPq --del dest/ ship@web1.jugendrettet.org:~/vwww/new.jugendrettet.org/
echo 'Done syncing.'
