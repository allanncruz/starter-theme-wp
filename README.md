# Starter Theme for WordPress
It is a Wordpress theme with pre-configured automation, using defined processing resources.

The interface has a structured with Bootstrap 4, in order to standardize the institutional production modes.

[Link demo](https://starterthemewp.allancruz.com.br/).


##### Global Dependencies

* NodeJS - (https://nodejs.org/en/)
* gulp - (https://gulpjs.com/)
* Sass install - (https://sass-lang.com/guide)

## Install Project
Open terminal and navigate to your localhost / directory


```
# Download CMS
curl -O https://wordpress.org/latest.zip

# Unzip CMS
unzip latest.zip

# Remove zipped file
rm latest.zip

# Rename unzipped folder
mv wordpress/name-of-your-project

# Navigate to the themes folder
cd name-of-your-project/wp-content/themes/

# Clone starter-theme-wp
git clone https://github.com/allanncruz/starter-theme-wp.git

# Access starter-theme-wp folder
cd starter-theme-wp

# Install dependencies
npm install

# Compile assets
gulp
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

##### Run in your Wordpress root folder:
```
# Permissions on files
sudo find . -type f -exec chmod 644 {} \;

# Permissions on directories
sudo find . -type d -exec chmod 755 {} \;
``` 

*Developed by Allan Cruz - (https://github.com/allanncruz)*
