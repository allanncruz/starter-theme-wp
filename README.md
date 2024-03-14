# Starter Theme for WordPress
It is a Wordpress theme with pre-configured automation, using defined processing resources.

The interface has a structured with Bootstrap 4, in order to standardize the institutional production modes.

[Link demo](https://starterthemewp.allancruz.com.br/).


##### Global Dependencies

* NodeJS v17 - (https://nodejs.org/en/)
* webpack - (https://webpack.js.org//)
* Sass install - (https://sass-lang.com/guide)
* Yarn - (https://classic.yarnpkg.com/pt-BR/docs/install#debian-stable)

## Install Project
Open terminal and navigate to your localhost / directory



##### Download CMS]
```
curl -O https://wordpress.org/latest.zip
```
##### Unzip CMS
```
unzip latest.zip
```
##### Remove zipped file
```
rm latest.zip
```
##### Rename unzipped folder
```
mv wordpress/name-of-your-project
```
##### Navigate to the themes folder
```
cd name-of-your-project/wp-content/themes/
```
##### Clone starter-theme-wp
```
git clone https://github.com/allanncruz/starter-theme-wp.git
```
##### Access starter-theme-wp folder
```
cd starter-theme-wp
```
##### Install dependencies
```
yarn install
```
##### Compile assets
```
yarn start
```

## Configure database
1. Access the root folder of your Wordpress project. localhost/name-of-your-project
2. Duplicate the wp-config-sample.php file
3. Rename the copy to wp-config.php
4. Then open that file and enter the database information.


## Required plugins
*Advanced Custom Fields - (https://www.advancedcustomfields.com/)*

## Solving Wordpress permission issues on localhost/
  
Edit the wp-config.php file:

Enter the constant:
```
define('FS_METHOD', 'direct');
```

#### Run in your Wordpress root folder:
##### Permissions on files
``` 
sudo find . -type f -exec chmod 644 {} \;
``` 
##### Permissions on directories
``` 
sudo find . -type d -exec chmod 755 {} \;
``` 

### Robots.txt for WordPress

``` 
Sitemap: https://wordpress.com/sitemap.xml
User-agent: IRLbot
Crawl-delay: 3600

User-agent: *
Disallow: /next/

User-agent: *
Disallow: /mshots/v1/

# har har
User-agent: *
Disallow: /activate/

User-agent: *
Disallow: /public.api/

# MT refugees
User-agent: *
Disallow: /cgi-bin/

User-agent: *
Disallow: /wp-admin/
``` 

### Adding in .htaccess for force https

``` 
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
``` 

*Developed by Allan Cruz - (https://github.com/allanncruz)*
