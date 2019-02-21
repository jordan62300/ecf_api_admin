# ECF-API

## DESCRIPTION*

* Fictional project that aims to validate an ecf during training (PopSchool Lens).
* Creating an API with symfony.
* Creating an ADMIN with easyadmin

### PREREQUIS/REQUIREMENTS* Symfony 4.2.3

* PHP 7.3 & dépendencies (curl & zip)
* composer

### INSTALLATION

* Git clone https://github.com/jordan62300/ecf-api-admin.git
* Open a terminal in the cloned folder
* type the command

 
```composer install``` 

* type the command

 
```php bin/console doctrine:database:create``` 

* type the command

```php bin/console make:migration```

* type the command

```php bin/console doctrine:migration:migrate```