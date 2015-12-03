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
* Then, run ``` composer install ``` which will install all of the latest dependancies along with the ```vendor``` folder.

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
* Now you will need to find and edit the file ```httpd-vhosts.conf``` (on mac, this is found at```/Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf```). Add the following code below at the bottom of the file. Be sure to change ```DocumentRoot``` to the directory of htdocs. do the same for the following line. 

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

* Now we can add SSE's virtualhost by adding the following code below. Take note of ```ServerName```, this is the url used to access the project instead of ```http://localhost/path/to/sse/public```. Be sure to change the ```DocumentRoot``` to the public directory of SSE. Do the same for the following line.

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

Once you’ve saved your httpd.conf and httpd-vhosts.conf files, the next step is to edit your OS X hosts file so it knows how to handle your new ServerName. The hosts file is used by OS X to map hostnames to IP addresses. In this case we want to map your new ServerName to the IP address 127.0.0.1, which is your localhost.

* on a mac, Fire up a Terminal instance, and at the prompt type the following command:

```terminal 
sudo nano /etc/hosts
```

* Use your keyboard’s arrow keys to navigate to the bottom of the file and add your own mapping:

```terminal
127.0.0.1 sse.app
```

Save and close the file by pressing ```control+x```, type ```yes```, and press ```enter```.

* Restart Apache

#### What's Next
Navigate over to your browser and go to ```http://sse.app/``` and that's it.

