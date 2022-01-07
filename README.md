# Описание
<details>
	<summary><b>Описание работы приложения</b></summary>
	- В админке в центральном меню покупатели выбираем отдел</br>
	- На странице будет добавление, редактирование отделов</br>
	- Есть массовые действия</br>
	- При создании отдела есть обязательное поле</br>
	- Дату нельзя менять</br>
	- Руководителя можно выбрать только 1</br>
	- Выбор нескольких сотрудников</br>
	- На витрине кнопка отделы переводит на страницу с отделами</br>
	- Есть изображение отдела, имя руководителя, название(все является ссылками на деталку) и пагинация</br>
	- В деталке отдела есть изображение, описание, пользователи, сортировка и пагинация</br>
</details>
<details>
	<summary><b>Системные требования</b></summary>
    - ОС  Ubuntu 21.10
    - Версия php 7.1
    - mariadb
    - cs-cart 4.14.1
</details>

<details>
	<summary><b>Как развернуть проект</b></summary>
    - Скачать магазин из ветки разработки
    - Прописать свои настройки в config.local.php (Database connection options: </br>
    	$config['db_host'] = 'localhost';</br>
	$config['db_name'] = 'cs_cartul';</br>
	$config['db_user'] = 'vladimir';</br>
	$config['db_password'] = '3vglzly';</br>
	$config['database_backend'] = 'mysqli';</br>
	Database tables prefix:</br>
	$config['table_prefix'] = 'cscart_';)</br>
    - Почта admin@example.com пароль admin
    - Сохранить магазин в папке локального сервера<br>
    - в папке var/backups лежит backup базы данных, ее нужно импортировать в свою чистую базу cs-cart<br>
    - в паке var/database лежат sql с изменениями cs_cartul.sql ффайл со всей структурой и 4 только с добавленными изменениями
    - в папке images/department картинки логотипов<br>
    - в папке app/controllers/backend/departments.php(файл с контроллером)<br>
	 который подключает шаблоны<br>
	в папке design/backend/templates/views/departments/ manage_departaments(шаблон со списком
	отделов)и update_department(шаблон с добавлением и редактированием отдела)<br>
    -  design/backend/templates/views/departments/components/departments_search_form.tpl поиск сайтбар	
    - в папке app/schemas/menu/menu.php добавлена вкладка отделы в центральное <br>
	меню покупатели<br>
    - design/themes/responsive/templates/views/departments лежат шаблоны витрины </br>
    - app/controllers/frontend/departments.php лежит контроллер витрины </br>
    - app/functions/fn.departments.php функции для контроллеров </br>
    - app/schemas/context_menu/departments.php  меню для массового редактирования </br>
    - init.php подключение функции </br>
</details>
<details>
	<summary><b>Как запустить авто тест</b></summary>
	- в папке var/tools/autotests/ установлен Codeception с тестами</br>
	- var/tools/autotests/tests/acceptance/FirstCest.php сам тест </br>
	- var/tools/autotests/tests/acceptance.suite.yml тут нужно прописать свой адрес магазина</br>
	- в консоли зайти в папку var/tools/autotests/ и запустить команду php vendor/bin/codecept run --steps</br>
</details>
<details>
	<summary><b>Тест-кейсы</b></summary>
	Тесты:</br>
***
    Тест 1
    Предусловие:
    1. Есть тестовый магазин с установленной модификацией
    2. Тестовый пользователь администратор, есть логин и пароль

    1. Заходим на страницу администратора
    2. Ввести  логин и пароль
    3. В центральном меню выбрать "покупатели"
    4. В открывшемся меню выбрать "отделы"
    5. Нажать на кнопку "Добавить отдел(+)"
    6. Открывается страница создания
    7. Ввести  название отдела
    8. Ввести описание отдела
    9. Выбрать статус
    10. Нажать на кнопку "добавить пользователя"
    11. Выбрать пользователя
    12. Нажать "выбрать"
    13. Нажать на кнопку "добавить сотрудников"
    14. Выбрать пользователей
    15. Нажать "добавить пользователей и закрыть"
    16. Нажать на кнопку "создать"
    17. Проверить создание отдела

    Ожидаемый результат: Отдел создан и отображается в списке отделов.
***
    Тест 2
    Предусловие:
    1. Есть тестовый магазин с установленной модификацией
    2. Тестовый пользователь администратор, есть логин и пароль

    1. Зайти на страницу администратора
    2. Ввести логин и пароль
    3. В центральном меню выбрать "покупатели"
    4. В открывшемся меню выбрать "отделы"
    5. Выбрать отдел
    6. Нажать на шестиренку
    7. Нажать"удалить"
    8. Проверить удаление отдела

    Ожидаемый результат: Отдел удален и не отображается в списке отделов.
***
    Тест 3
    Предусловие:
    1. Есть тестовый магазин с установленной модификацией

    1. Зайти на страницу товаров
    2. В меню на ветрине нажать "Отделы"
    3. Проверить, что тестовые отделы доступны на странице
    4. Нажать на название отдела
    5. Проверить, что страница тестовых отделов доступна и открывается без ошибок
    6. Проверить, ято добавленные пользователи отображаются на странице отделов

    Ожидаемый результат: Добавленные пользователи отображаются на странице отделов. Страница отделов
    открывается без ошибок
***
</details>

<details>
	 <summary><b>Баг-репорты</b></summary>
	Баги:
	
    Баг отображения:
    Шаги воспроизведения:
    1. Заходим в административную часть магазина
    2. Заходим в отделы
    3. Заходим на создание отдела
    4. Добавляем руководителя
    5. Нажимаем на "добавить сотрудников"
    6. Выбираем сотрудников
    7. Нажимаем "выбрать и закрыть"
    
    Фактический результат: пользователи появились, а email не отображается
    Ожидаемый результат: пользователи появились отображаются имя и email
	
***

    Баг верстки:
    Шаги воспроизведения:
    1. Заходим в административную часть магазина
    2. Заходим в отделы
    3. Нажимаем на "имя"
    
    Фактический результат: не произошла сортировка
    Ожидаемый результат: отделы отсортировались
	
***

    Баг в бэкенде:
    Шаги воспроизведения:
    1. Заходим в административную часть
    2. Создаем отдел не прикрепляя пользователей
    3. Создаем другой отдел с руководителем и пользователями
    4. Заходим на витрину
    5. Заходим в отделы
    6. Нажимаем на созданный отел без пользователей
    
    Фактический результат: у отдела отображаются все пользователи добавленные в другие отделы
    Ожидаемый результат: пользователей нет
	
***
</details>
