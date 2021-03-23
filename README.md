# ✨ORM ✨
📌 ORM is a lib for you to build an Object-Relational Mapping, and to be able to use it in other projects.

## 🚀 Installation 🚀
📌 It's very simple you just need to have the **docker** and **docker-compose** installed.<br/>
With that installed just run the following command.

```shell
 $ docker-compose build
```
```shell
 $ docker-compose up -d
```
```shell
 $ docker-compose exec app
```

## 🚀 How does an ORM works 🚀
📌 Imagine that you need to abstract a layer of your project with Database, but you don't want to worry about the queries that will be made, this way you make use of an ORM, to make it easier to sentence commands, whether SQL or No-SQL.
  - **SQL** syntax:
```mysql
    SELECT $column1, $column2... FROM $table WHERE $expr IN $value 
```

  - **ORM** syntax:
```php
    $model = new Model();
    $values = $model->where('$exp', '$value');
```
