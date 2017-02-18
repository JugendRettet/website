#!/usr/bin/awk -f

!/^'$|[a-zA-Z]='$/ {
  gsub(/'/,"'\\''")
}1