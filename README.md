# User Manager
## Descripción
Esta es una aplicación para gestinar usuarios



## Script de base de datos:



```sql
 

create database blog_database;

use blog_database;

 
CREATE USER 'blogUser'@'localhost' IDENTIFIED BY 'blogUser-2017';
GRANT ALL PRIVILEGES ON blog_database. * TO 'blogUser'@'localhost';


```
