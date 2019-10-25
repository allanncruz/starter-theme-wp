# Boilerplate Front-End Wp #

It is a ready structure with preconfigured automation, using already defined processing resources.

The interface has a Wordpress theme structured with Bootstrap 4, aiming to standardize the institutional production modes.

You need to download wordpress from https://br.wordpress.org/download/. Then clone this project in the "wordpress/wp-content/themes"

### Global Dependencies

* NodeJS - (https://nodejs.org/en/)
* gulp - (https://gulpjs.com/)
* Sass install - (https://sass-lang.com/guide)


### Install Dependencies
```
npm install
```
### Compile and activate watch
```
gulp
```

# Resolvendo problemas de permissão do Wordpress no localhost/

Edite o arquivo wp-config.php: vim wp-config.php

Insira a constante:
```
define('FS_METHOD', 'direct');
```

## Execute na pasta raíz do seu wordpress os comandos (pode selecionar as 3 linhas, colar e dar ENTER):
```
sudo chown www-data:www-data -R *  
sudo find . -type d -exec chmod 755 {} \;  
sudo find . -type f -exec chmod 644 {} \; 
``` 
A primeira linha dará permissão de dono para usuário e grupo www-data. A segunda linha vai dar permissão 755 para todas as pastas, e a terceira dará permissão 644 para todos os arquivos.

Jamais, em hipótese alguma dê permissão 777, mas isso você já sabe...



*Developed by Allan Cruz - (https://github.com/allanncruz)*