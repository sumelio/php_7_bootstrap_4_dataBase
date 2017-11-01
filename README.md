# User Manager
## Descripción
Esta es una aplicación para gestinar usuarios la cual permite realizar las siguientes operaciones:
1. Crear un usuario
2. Consultar los usuarios.
3. Actualizar un usuario.
4. Eliminar un usuario.





## Script de base de datos:



```sql
 

create database blog_database;

use blog_database;

 
CREATE USER 'blogUser'@'localhost' IDENTIFIED BY 'blog-User-2017';
GRANT ALL PRIVILEGES ON blog_database. * TO 'blogUser'@'localhost';

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
  
  


```
