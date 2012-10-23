#!/bin/bash

###
# Define
###
# This script will export a local site (database included) and copy it to the remote (staging, live, etc).

###
# Environment
###
# OSX, MAMP
# Database User / Pass: root/root

###
# USE
###
# ./export-compress-send.sh databasename sitefoldername


## Export the database
/Applications/MAMP/Library/bin/mysqldump -uroot -proot $1 > /tmp/$1.sql

## cd so as to eliminate directory structure in zip
cd ~/Sites
zip -rq /tmp/$2.zip $2/* -x *.git*

## Transfer to remote
cd ~/tmp
scp $1.sql $2.zip example.com:~/temp-uploads/ 

## Cleanup
rm $1.sql $2.zip