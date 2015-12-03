SSE
======
Society of Sales Engineers content managment system

Prerequisites
------
* Composer, which you can install from [getcomposer.com](getcomposer.com)
* XAMPP, with a bit of configuration

Installing
------

#### Composer
After installing composer, the first thing your going to want to do is install SSE's dependancies. <br>
* To do this,``` cd ``` into the project's root directory.<br>
* Then, run ``` composer install ``` which will install all of the latest dependancies.

#### XAMPP

In order to get SSE up and running, were going to have to setup virtualhosts. This will make it possible to change the directory from ``` sse/ ``` to ``` sse/public```. <br>

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
* Now you will need to find and edit the file ```httpd-vhosts.conf``` (on mac, this is found at```/Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf```). Scroll all the way to the bottom and add : 

```xml 
# localhost
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs"
    <Directory "/Applications/XAMPP/xamppfiles/htdocs">
        Options Indexes FollowSymLinks Includes execCGI
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
This step is necessary to ensure that http://localhost still points at XAMPP’s htdocs directory once we’ve created our custom VirtualHosts.

* Now we can add SSE's virtualhost by adding the following code below:

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
