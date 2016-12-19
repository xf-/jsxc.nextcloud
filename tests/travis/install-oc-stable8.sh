#!/bin/bash -x
# install ocdev
# set up postgresql
createuser -U travis -s oc_autotest
# set up mysql
mysql -e 'create database oc_autotest;'
mysql -u root -e "CREATE USER 'oc_autotest'@'localhost';"
mysql -u root -e "grant all on oc_autotest.* to 'oc_autotest'@'localhost';"
# install owncloud
cd ..
git clone https://github.com/owncloud/core.git --recursive --depth 1 -b $BRANCH owncloud
cd owncloud
cp -r ../jsxc.chat/tests/travis/autoconfig-stable8-mysql.php config/autoconfig.php
php -f index.php
#enable njsxc
mv ../jsxc.chat apps/njsxc
php -f console.php app:enable njsxc

cd apps/njsxc

