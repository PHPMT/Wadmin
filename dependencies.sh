#!/bin/bash
#Hello World in Shell script

echo "instalando dependencias do npm"
echo "                                                    "
echo "   ####      ###   ############   ####          ####"
echo "   #####     ###   ###      ###   #####        #####"
echo "   ######    ###   ###      ###   ######      ######"
echo "   ### ####  ###   ###      ###   ### ###    ### ###"
echo "   ###  #### ###   ############   ###   ### ###  ###"
echo "   ###   #######   ###            ###    #####   ###"
echo "   ###    ######   ###            ###            ###"
echo "   ###     #####   ###            ###            ###"
echo "              "
npm install

echo "              "
echo "              "
echo "instalando o bower "
echo "sudo npm install bower -g"
npm install bower -g
echo "               "
echo "               " 
echo "instalando dependencias do bower"
echo "bower install"
bower install 
echo "               "
echo "               "
echo "instalando dependencias do composer"
echo "sudo composer install"
composer install

