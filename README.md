# jugendrettet.org

Files to build jugendrettet.org.

## tldr

```
./prepare.sh
./make.sh
```
Website will be in dest/

## Description

We are using a custom version of [wswsh](https://github.com/Ypnose/wswsh) to build the pages.
The Markup interpreter in use is [Markdown](https://daringfireball.net/projects/markdown/)
and a custom script to replace translatable phrases (translate.sh).
They are piped together in mkd.sh.
You can get all necessary files (like wswsh) by running prepare.sh.

The translatable phrases are managed in a [separate git](https://github.com/JugendRettet/translations).

Files and directories that should not be touched by the interpreter are located in extras/ or
extras_binaries/ for files not meant for git.

After all is set you can build the website in a ready to deploy state by running make.sh.
It will be located in dest/.

## Dependencies

wswsh relies on *ksh. Here are instructions for [mksh](https://www.mirbsd.org/mksh.htm#build).
