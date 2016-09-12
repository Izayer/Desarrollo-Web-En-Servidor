#PHP

[w3schools](http://www.w3schools.com/php/)

[http://php.net/manual/](http://php.net/manual/)

http://www.codecademy.com/en/tracks/php

http://www.tutorialspoint.com/php/index.htm

http://www.phptherightway.com/

[PHP Cookbook](http://shop.oreilly.com/product/0636920029335.do)

https://github.com/zmwebdev/PHPcookbook-code-3ed

[Modern PHP](http://shop.oreilly.com/product/0636920033868.do)

https://github.com/codeguy/modern-php

http://wasil.org/sublime-text-3-perfect-php-development-set-up


###Servers

MAC 

[https://bitnami.com/stack/mamp](https://bitnami.com/stack/mamp)

Windows 

[http://www.wampserver.com/](http://www.wampserver.com/)

[https://www.apachefriends.org](https://www.apachefriends.org)

Portable: [http://www.usbwebserver.net/en/](http://www.usbwebserver.net/en/) 

# Install PHP

https://help.ubuntu.com/14.04/serverguide/php5.html

```
$ sudo apt-get install php5 libapache2-mod-php5
```
Create a workspace:
```
$ mkdir ~/workspace
$ sudo ln -s ~/workspace /var/www/html/workspace

http://localhost/workspace
```

## PHP

Start PHP server:

http://php.net/manual/en/features.commandline.webserver.php

```
$ php -S localhost:8000
$ php -S localhost:8000 -t foo/
You can make the web server accessible on port 8000 to any interface with:
$ php -S 0.0.0.0:8000
```
Access using:
```
http://localhost:8000/filename.php
```

With Apache:
```
http://localhost/.../.../filename.php
```

logs in Apache:
```
$ tail -f /var/log/apache2/error.log
```
php.ini:
```
/etc/php5/apache2/php.ini
```
###HTTP request

curl, postman, ...

https://github.com/zmwebdev/node-express-examples/blob/47eb84a915c932e0e3719466eca03d4a99d6d885/README.md#http-request

##IDE

SublimeText:

http://wasil.org/sublime-text-3-perfect-php-development-set-up


http://www.aptana.com/

https://www.jetbrains.com/phpstorm/

https://c9.io/

##Errors

http://www.phptherightway.com/#error_reporting

## Xdebug
####With Aptana:

http://php.tutorialhorizon.com/how-to-debug-php-in-aptana-studio-for-linux-part-1/

####With c9.io:

https://github.com/c9/c9.ide.run.debug.xdebug

https://c9.io/blog/debug-your-php-code-with-xdebug-and-cloud9/

- Open the script you want to debug, for example index.php
- Set at least one breakpoint
- Choose Run > Run With > PHP (built-in web server)

####With SublimeText:

http://stackoverflow.com/questions/5504152/is-it-possible-to-use-xdebug-on-ubuntu

http://askubuntu.com/questions/503751/configure-xdebug-ubuntu-14-04

http://www.youtube.com/watch?v=Zk87LSbxLtw

https://github.com/martomo/SublimeTextXdebug

http://www.sitepoint.com/debugging-xdebug-sublime-text-3/

Install:

In sublimeText:
```
https://packagecontrol.io/packages/Xdebug%20Client
```
In linux:
```
$ sudo apt-get install php5-xdebug
```
you should change your /etc/php5/apache2/conf.d/20-xdebug.ini and add this line:
```
  zend_extension=/path/to/your/xdebug.so 
  xdebug.remote_enable = 1
```
then
```
$ sudo service apache2 restart
```
Install xdebug in sublimetext using package manager

in sublime text, project -> save project as, and save in the root. Add this:

```
{
  "folders":
  [
    {
    "follow_symlinks": true,
    "path": "/home/../workspace"
    }
  ],
  "settings": {
      "xdebug": {
          "url": "http://localhost/.../"
      }
  }
}
```
Use chrome addon: Xdebug helper

## Other

###HHVM
HHVM is an open-source virtual machine designed for executing programs written in Hack and PHP:

http://hhvm.com/

###phpbrew
phpbrew builds and installs multiple version php(s) in your $HOME directory.

https://github.com/phpbrew/phpbrew
