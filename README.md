# jugendrettet.org

Files to build jugendrettet.org.

## tldr

```
git clone git@github.com:JugendRettet/website.git
cd website
./prepare.sh
./make.sh
```
Website will be in dest/

## Description

We are using a custom version of [wswsh](https://github.com/Ypnose/wswsh) to build the pages.
The Markup interpreter in use is [Markdown](https://daringfireball.net/projects/markdown/) in a slightly customized version
and a custom script to replace translatable phrases (translate.sh).
They are piped together in `mkd.sh`.
You can get all necessary files (like wswsh) by running `prepare.sh`.

The translatable phrases are managed in a [separate git](https://github.com/JugendRettet/translations).

Files and directories that should not be touched by the interpreter are located in extras/.

Other files not meant for git or too big to copy them back and forth can be placed directly in the
webroot. By including them in .gitignore and using it in rsync as `--exclude-from='.gitignore'` they
won't be deleted.
If you still want them copied into dest/ by `make.sh` you can put them inside extras_binaries/.

After all is set you can build the website in a ready to deploy state by running `make.sh`.
It will be located in dest/.

## Dependencies

* wswsh relies on *ksh. Here are instructions for [mksh](https://www.mirbsd.org/mksh.htm#build).
* there might be some GNU-isms I could'nt get rid of yet.
