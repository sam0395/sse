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
<p>After installing composer, the first thing your going to want to do is install SSE's dependancies. <br>
To do this, you must ``` cd ``` into the project's root directory.<br>
Then, run ``` composer install ``` which will install all of the latest dependancies.</p>

<p>Then add a virual host to XAMPP at the end of the file ``` httpd-vhosts.conf ``` (On mac, this is found under ``` /Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf ```)</p>

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
