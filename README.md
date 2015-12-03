SSE
======
Society of Sales Engineers content managment system

prerequisites
------
* Composer, which you can install from [getcomposer.com](getcomposer.com)
* XAMPP, with a bit of configuration

Installing
------

#### Composer
* After installing composer, the first thing your going to want to do is install SSE's dependancies. <br>
To do this,``` cd ``` into the project's root directory.<br>
Then, run ``` composer install ``` which will install all of the latest dependancies.

#### Xampp

* In order to get SSE up and running, were going to have to setup virtualhosts. This will make it possible to change the directory from ``` sse/ ``` to ``` sse/public```. <br>

* The first thing you’ll need to do is open the file ```httpd.conf``` (on mac, this is found at``` /Applications/XAMPP/xamppfiles/etc/httpd.conf ```). Look for the following lines:<br>

```xml
# Virtual hosts
#Include /Applications/XAMPP/etc/extra/httpd-vhosts.conf
```

* Uncomment the second line by removing the hash (#), so that Apache loads your custom VirtualHosts configuration file:<br>

```xml
# Virtual hosts
Include /Applications/XAMPP/etc/extra/httpd-vhosts.conf
```

```xml
# SSE host
<VirtualHost *:80>
    ServerName sse.app
    DocumentRoot "/path/to/your/site/public/"
    <Directory "/path/to/your/site/public/">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
4. Be sure to also add 
