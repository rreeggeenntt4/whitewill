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

