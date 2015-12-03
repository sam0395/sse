SSE
======
Society of Sales Engineers content managment system

prerequisites
------
* Composer, which you can install from [getcomposer.com](getcomposer.com)
* XAMPP, with a bit of configuration

Installing
------
1. First run composer update in the project directory to install latest dependancies. 
2. Then add a virual host to XAMPP in the file ``` httpd-vhosts.conf ```

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
