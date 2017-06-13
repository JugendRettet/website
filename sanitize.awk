#!/usr/local/bin/gawk -f

!/(.*='|^')$/ {
  gsub(/'/,"'\\''")
}1
