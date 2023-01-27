
# Basic PHP App

## Build Containers

```
docker-compose up --build
```

## Migrate Database
1. Go into the mysql cli and connect to your db. Enter password `local-password` when prompted.
```
docker-compose exec mysql-container mysql -h localhost -P 3306 -uroot -p
```

2. Run the following migration
```
DROP DATABASE IF EXISTS db;
CREATE DATABASE db;
USE db;
CREATE TABLE `name` (
   id INT AUTO_INCREMENT,
   first_name VARCHAR(30) NOT NULL,
   PRIMARY KEY (id)
);
