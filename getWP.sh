#!/bin/bash

###
# Define
###
# This script will download, extract, and install the latest version of WordPress.

###
# Environment
###
# OSX, MAMP
# Database User / Pass: root/root

###
# USE
###
# ./getWP.sh sitenamehere


# Create working folder
mkdir /tmp/getWP
cd /tmp/getWP

##Download latest (stable) version of WordPress
curl -O http://wordpress.org/latest.tar.gz

## Uncompress
tar -xf latest.tar.gz
cd /tmp/getWP/wordpress/

## Edit wp-config
mv wp-config-sample.php wp-config.php
sed -i .bak "s/username_here/root/g" wp-config.php
sed -i .bak "s/password_here/root/g" wp-config.php
sed -i .bak "s/database_name_here/$1/g" wp-config.php

## Create Database
CMD="create database $1"
/Applications/MAMP/Library/bin/mysql --host=localhost -uroot -proot -e "$CMD"

## Move working folder to ~/Sites
mv /tmp/getWP/wordpress ~/Sites/$1

## Open Firefox
# open -a Firefox http://local