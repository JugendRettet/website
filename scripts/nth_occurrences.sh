#!/usr/bin/env bash

set -eu

while getopts s:n: name; do
  case $name in
    s)  STRING="$OPTARG";;
    n)  NUM="$OPTARG";;
  esac
done

N_R=$(( ${NUM} + 1 ))

TEXT_IN="$(</dev/stdin)"

TEXT_DELIMITED="$(
  echo "${TEXT_IN}" \
  | sed "s/^"${STRING}"\ /"${STRING}"\ /g"
)"

function _cut {
  awk ' BEGIN { RS = "\f" }; NR=="'${NR}'" '
}

function _split {
  n=2
  until [[ ${n} -gt ${N_R} ]]; do
    NR=${n}
    echo "${TEXT_DELIMITED}" | _cut
    n=$(( ${n} + 1 ))
  done
}

_split

