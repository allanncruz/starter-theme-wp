# Boilerplate Front-End Wp #
It is a ready-made structure with pre-configured automation, using defined processing resources.

The interface has a Wordpress theme structured with Bootstrap 4, in order to standardize institutional production modes.

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
mv wordpress/ name-of-your-project

# Navigate to the themes folder
cd name-of-your-project/wp-content/themes/

# Clone boilerplate-front-end-wp
git clone https://github.com/allanncruz/boilerplate-front-end-wp.git

# Access boilerplate-front-end-wp folder
cd boilerplate-front-end-wp

# Install dependencies
npm install

# Compile assets
gulp
```

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

## Modelo contact form 7
```
<div class="row">

    <div class="col-md-12">
        <label>
            Digite seu nome:
            [text* nome ]
        </label>
    </div>

    <div class="col-md-12">
        <label>
            E-mail:
            [email* email ]
        </label>
    </div>

    <div class="col-md-12">
        <label>
            Telefone:
            [text telefone ]
        </label>
    </div>

    <div class="col-md-12">
                  <label>
		    Deixe sua mensagem
		    [textarea mensagem]
                 </label>

[submit "Enviar"] 
		</div>

</div>
<label>
</label>
```
*Developed by Allan Cruz - (https://github.com/allanncruz)*
