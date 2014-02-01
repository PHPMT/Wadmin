echo ''
echo '    JACK MAKIYAMA    '
echo '    =============    '
echo ''

echo 'Download the composer.phar file, so the vendors can be installed from the distributed composer.json.'
if [ ! -f composer.phar ]
    then
        curl -s -O http://getcomposer.org/composer.phar
fi

echo 'Update composer.phar.'
php composer.phar self-update --quiet

echo 'Install the needed vendors for this application.'
php composer.phar install

echo 'Dump the optimized autoloader classmap for performance reasons.'
php composer.phar dump-autoload --optimize

echo 'Removed the composer.phar file.'
rm composer.phar

echo 'Install Bower dependencies.'
./node_modules/.bin/bower install
echo ''
echo 'Grunt init.'
./node_modules/.bin/grunt