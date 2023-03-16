--------------------------------------
<p>Выполнить:</p>
<p>
8) К примеру в базе данных MySQL у нас есть таблицы posts и post_ext_attributes, с типичными столбцами. Таблицы имеют связь posts.id=post_ext_attributes.post_id.
</p>
<p>
Для извлечения данных используется фреймворк Laravel, и для каждой таблицы может использоваться модель Laravel.
</p>
<p>
Задача состоит в том, чтобы получить последние 100 записей из таблицы posts вместе с дополнительными полями в post_ext_attributes.
</p>
<p>
Как это лучше сделать? Напишите код. Если не знаете Laravel, то напишете запрос на языке SQL;
</p>

--------------------------------------
<p>Выполнение:</p>

         composer create-project laravel/laravel whitewill
	     php artisan make:model Post -m
	     php artisan make:model PostExtAttribute -m

         php artisan migrate
         php artisan make:controller PostsController

Сам запроc

         public function index()
         {
           $posts = Post::latest()->limit(100)->get();
           return view('index', ['posts' => $posts]);
         }

База данных распологается в корне /whitewill.sql

Вывод объявлений:

<p align="center"><img src="https://raw.githubusercontent.com/rreeggeenntt4/whitewill/master/public/media/img.png" width="400" alt="Laravel Logo"></p>

--------------------------------------
<p>Выполнить:</p>
<p>
9) В коде JavaScript есть цикл for, внутри которого вложен вызов setTimeout.
</p>
<p>
При каждой итерации локальная переменная i, объявленная с помощью оператора var, увеличивается на единицу,
</p>
<p>
а в анонимной функции которую вызывает setTimeout есть вывод той переменной i в консоль. Изначально переменная i имеет значение 0.
</p>
<p>
Какие цифры отобразятся в консоли при 10 итерациях цикла?
</p>

--------------------------------------
<p>Выполнение:</p>

     https://github.com/rreeggeenntt4/whitewill/blob/master/public/js/custom.js


<p align="center"><img src="https://raw.githubusercontent.com/rreeggeenntt4/whitewill/master/public/media/console.png" width="400" alt="Laravel Logo"></p>

--------------------------------------
<p>Выполнить:</p>
<p>
Напишите на JavaScript асинхронный цикл, который выведет в консоль по порядку цифры от 1 до 10, а после 10 выведет цифры от 9 до 0.
</p>
<p>
Вместо операторов цикла (таких как: for, foreach, while и другие) используейте функции setTimeout или setInterval;
</p>


--------------------------------------
<p>Выполнение:</p>

custom.js 

     https://github.com/rreeggeenntt4/whitewill/blob/master/public/js/custom.js


<p align="center"><img src="https://raw.githubusercontent.com/rreeggeenntt4/whitewill/master/public/media/console.png" width="400" alt="Laravel Logo"></p>