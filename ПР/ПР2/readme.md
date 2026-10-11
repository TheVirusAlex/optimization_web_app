
# Установка приложения MVC


Системные требования:
- php 8.1
- mysql 8.0 или mariaDB-10.8
- Apache_2.4-php 8.0

1. **Скачайте или клонируйте папку MVC
   
2. **Содержимое папки MVC залейте на сервер. Если у вас локальный openServer то в папку localhost
   
3. **Создайте базу данных, содержащую столбцы id(INT AI), title(varchar), content(text), created_at(TIMESPAMP) так же можно использовать уже готовый код:
```php
CREATE DATABASE mvc_demo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; 

USE mvc_demo; 

CREATE TABLE articles ( 

    id INT AUTO_INCREMENT PRIMARY KEY, 

    title VARCHAR(255) NOT NULL, 

    content TEXT NOT NULL, 

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 

); 

INSERT INTO articles (title, content) VALUES 

('Первая статья', 'Это содержимое первой статьи про MVC.'), 

('Вторая статья', 'Здесь мы разбираем контроллеры.'), 

('Третья статья', 'А тут — про представления.');
```
   
4. **После того как база данных будет создана настройте данные для подключения в файле config/db.php
   
5. **Запустите сервер
   
6. **Перейдите на страницу index.php приложения, по адресу вашего сервера. Или localhost:port если у вас локальный openserver
   
#### Готово!
