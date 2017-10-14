# group-project-1.1
# e-commerce-site

to import the database :

go to phpmyadmin(login as root) >> new databse(named ecommerce) >> import >> chose file(Database/ecommerce.sql) >> Go 

create Mysql for our ecommerce sit by running sql statment as root `CREATE USER 'ecommerce'@'localhost' PASSWORD EXPIRE NEVER;`
and run `GRANT ALL PRIVILEGES ON ecommerce.* TO 'ecommerce'@'localhost' WITH GRANT OPTION;`


[bootstrap theme](https://bootswatch.com/darkly/)


// Documentation
documentation at /docs/

to generate documentation
run `php phpDocumentor.phar -f . -t docs/api` on root directory 
