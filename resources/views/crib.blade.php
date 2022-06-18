@extends('layout')

@section('title', 'Шпаргалки')
@section('css')
    <link rel="stylesheet" href="{{asset('/css/crib.css')}}">
@endsection

@section('content')
<div class="container-fluid bg-white div-banner py-2">
        <h2 class="text-center">Шпаргалки</h2>
</div>
    <div class="container">
        <div class="row div-button justify-content-between" id="buttons">
            <button type="button" class="btn btn-success w-25 m-2 active">HTML</button>
            <button type="button" class="btn btn-success  w-25 m-2">Python</button>
            <button type="button" class="btn btn-success  w-25 m-2">Laravel</button>
        </div>
    </div>


<div class="container" id="content">

<!--HTML-->
        <div class="accordion div-show showed" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    СПЕЦИАЛЬНЫЕ СИМВОЛЫ
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Символ</th>
                            <th>Десятичный код</th>
                            <th>Описание</th>
                        </thead>
                        <tbody>
                            <tr >
                                <td>а&#769;</td>
                                <td><span>&</span>#769;</td>
                                <td style="max-width: 100%">Ударение, ставится после "ударной" буквы</td>
                            </tr>
                            <tr>
                                <td>&#169;</td>
                                <td><span>&</span>#169;</td>
                                <td>Копирайт</td>
                            </tr>
                            <tr>
                                <td>&#174;</td>
                                <td><span>&</span>#174;</td>
                                <td>Знак зарегистрированной торговой марки</td>
                            </tr>
                            <tr>
                                <td>&#167;</td>
                                <td><span>&</span>#167;</td>
                                <td>Параграф</td>
                            </tr>
                            <tr>
                                <td>&#176;</td>
                                <td><span>&</span>#176;</td>
                                <td>Градус</td>
                            </tr>
                            <tr>
                                <td>&#182;</td>
                                <td><span>&</span>#182;</td>
                                <td>Знак абзаца</td>
                            </tr>
                            <tr>
                                <td>&#960;</td>
                                <td><span>&</span>#960;</td>
                                <td>Пи (используйте Times New Roman)</td>
                            </tr>
                            <tr>
                                <td>&#181;</td>
                                <td><span>&</span>#181;</td>
                                <td>	Знак "микро"</td>
                            </tr>
                            <tr>
                                <td>&#8364;</td>
                                <td><span>&</span>#8364;</td>
                                <td>Евро</td>
                            </tr>
                            <tr>
                                <td>&#162;</td>
                                <td><span>&</span>#162;</td>
                                <td>	Цент</td>
                            </tr>
                            <tr>
                                <td>&#163;</td>
                                <td><span>&</span>#163;</td>
                                <td>Фунт</td>
                            </tr>
                            <tr>
                                <td>&#8381;</td>
                                <td><span>&</span>#8381;</td>
                                <td>Знак рубля</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    АТРИБУТЫ
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                   <table class="table table-spriped">
                        <thead>
                            <th>Атрибут</th>
                            <th>Описание, принимаемое значение</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>accesskey</td>
                                <td>Значение атрибута используется браузером в качестве руководства для создания сочетания клавиш,
                                     которое активирует или фокусирует элемент. Состоит из разделенного пробелами списка символов.
                                      Браузер в первую очередь выбирает те клавиши, которые существуют на раскладке клавиатуры.<br>
                                        Синтаксис: <strong>accesskey="A"
                                                    accesskey="N @ 1"</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>autofocus</td>
                                <td>Логический атрибут, указывающий, что элемент должен быть сфокусирован при загрузке страницы, частью которого он является. Не более одного элемента в документе или диалоговом окне может иметь атрибут<strong> autofocus</strong>. Если применить к нескольким элементам, то фокус получит первый из них.<br>
                                    Синтаксис: <strong>autofocus</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>class</td>
                                <td>Представляет собой разделенный пробелом список классов элемента с учетом регистра. Классы позволяют CSS и Javascript выбирать и получать доступ к элементам с помощью селекторов классов или функций, таких как метод <strong>DOM document.getElementsByClassName.</strong><br>
                                        Синтаксис: <strong>class="toc"</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>hidden</td>
                                <td>Указывает браузеру, что элемент должен быть скрыт.<br>
                                        Синтаксис: <strong>hidden</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>Определяет уникальный индефикатор элемента. Не должно содержть пробелов, в отличии от класса, эелементы содержать только одно значение id<br>
                                        Синтаксис: <strong>id="content"</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>title</td>
                                <td>Доп информация об элементе, всплывающая подсказка при наведении на эелемент<br>
                                        Синтаксис: <strong>title="Hypertext Transport Protocol"</strong>
                                </td>
                            </tr>
                            
                        </tbody>
                   </table>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    ТЕГИ
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <table class="table table-spriped">
                        <thead>
                            <th>Тег</th>
                            <th>Описание</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>h1 до h6</td>
                                <td>Заголовок, чем больше цифра, тем меньше размер и жирность текста по умолчанию</td>
                            </tr>
                            <tr>
                                <td>br</td>
                                <td>Разрыв<br> строки</td>
                            </tr>
                            <tr>
                                <td>b</td>
                                <td><b>Жирное начертание</b></td>
                            </tr>
                            <tr>
                                <td>strong</td>
                                <td><strong>важное жирное начертание</strong></td>
                            </tr>
                            <tr>
                                <td>i</td>
                                <td><i>Курсив</i></td>
                            </tr>

                            <tr>
                                <td>em</td>
                                <td><em>Курсив c особой важностью</em></td>
                            </tr>

                            <tr>
                                <td>u</td>
                                <td><u>Подчеркивает текст</u></td>
                            </tr>

                            <tr>
                                <td>s</td>
                                <td><s>Перечеркнутый текст</s></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

<!--Python-->
            <div class="accordion div-show" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    ФАЙЛЫ
                                </button>
                            </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                               <p>Открыть файл<br> <code class="">f = open('text.txt', 'r')</code></p>
                               <ul>
                                    <li>1 аргумент - имя файла</li>
                                    <li>2 аргумент - режим открытия (их можно объединять)</li>
                                    <li>3 аргумент - кодировка, нужен только в текстовом файле</li>
                               </ul>
                    
                               <h3>Режимы открытия файла</h3>
                               <table class="table table-spriped">
                                    <thead>
                                        <th>Режим</th>
                                        <th>Обозначение</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>'r'</td>
                                            <td>открытие на чтение (является значением по умолчанию).</td>
                                        </tr>
                                        <tr>
                                            <td>'w'</td>
                                            <td>открытие на запись, содержимое файла удаляется, если файла не существует, создается новый.</td>
                                        </tr>
                                        <tr>
                                            <td>'x'</td>
                                            <td>открытие на запись, если файла не существует, иначе исключение.</td>
                                        </tr>
                                        <tr>
                                            <td>'a'</td>
                                            <td>открытие на дозапись, информация добавляется в конец файла.</td>
                                        </tr>
                                        <tr>
                                            <td>'b'</td>
                                            <td>открытие в двоичном режиме.</td>
                                        </tr>
                                        <tr>
                                            <td>'t'</td>
                                            <td>открытие в текстовом режиме (является значением по умолчанию).</td>
                                        </tr>
                                        <tr>
                                            <td>'+'</td>
                                            <td>открытие на чтение и запись</td>
                                        </tr>
                                    </tbody>
                               </table>
                                <div class="">
                                        <h4>Чтение из файла</h4>
                                    <p>Метод read() читает весь файл целиком<br>
                                            <code>f = open('text.txt')<br>
                                                    >>>f.read(1)<br>
                                                    'H'<br>
                                                    >>>f.read()<br>
                                                    'ello world!\nThe end.\n\n' </code></p>
                                    <p>Прочитать файл построчно с помощью цикла for<br>
                                            <code>
                                            >>> f = open('text.txt')<br>
                                            >>> for line in f:<br>
                                            ...     line<br>
                                            ...<br>
                                            'Hello world!\n'<br>
                                            '\n'<br>
                                            'The end.\n'<br>
                                            '\n'<br>
                                            </code></p>
                                </div>
                                <div class="">
                                    <h4>Запись в файл</h4>
                                    <p>Открыть запись в файл<br>
                                        <code>f = open('text.txt', 'w')</code></p>
                                    <p>Запись в файл осуществляется с помощью метода write<br>
                                            <code>for index in l:<br>
                                                  . . . f.write(index + '\n') </code></p>
                                    <p>После окончания работы  с файлом его <strong>обязательно нужно закрыть</strong><br>
                                        <code>f.close()</code></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    СЛОВАРИ
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <p>Создать словари</p>
                                    <ul>
                                        <li>С помощью литерала:<br>
                                            <code>d = {}</code></li>
                                        <li>с помощью функции dict:<br>
                                            <code>d = dict(short='dict', long='dictionary')</code></li>
                                        <li>с помощью метода fromkeys<br>
                                            <code></code></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    ЦИКЛЫ
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <h5>while</h5>
                                    <code>>>> i = 5 <br>
                                          >>> while i< 15:
                                            . . . print(i)
                                            . . . i = i + 2<br>
                                        5<br>
                                        7<br>
                                        9<br>
                                        11<br>
                                        13<br></code>
                                        <h5>for</h5>
                                        <code>
                                            >>>for i in 'hello world':<br>
                                            . . .   print(i * 2, end="")<br>
                                            hheelllloo wwoorrlldd
                                        </code>
                                        <h5>Оператор continue</h5>
                                        <p>Оператор continue начинает следующий проход цикла, минуя оставшееся тело цикла (for или while)</p>
                                        <code>
                                        >>> for i in 'hello world':<br>
                                        ...     if i == 'o':<br>
                                        ...         continue<br>
                                        ...     print(i * 2, end='')<br>
                                        ...<br>
                                        hheellll  wwrrlldd
                                        </code>
                                        <h5>Оператор break</h5>
                                        <p>Оператор break досрочно прерывает цикл.</p>
                                        <code>>>> for i in 'hello world':<br>
                                                ...     if i == 'o':<br>
                                                ...         break<br>
                                                ...     print(i * 2, end='')<br>
                                                hheellll</code>
                                        <h5>else</h5>
                                        <p>Слово else, примененное в цикле for или while, проверяет, был ли произведен выход из цикла инструкцией break, или же "естественным" образом. Блок инструкций внутри else выполнится
                                             только в том случае, если выход из цикла произошел без помощи break.</p>
                                        <code>>>> for i in 'hello world':<br>
                                                ...     if i == 'a':<br>
                                                ...         break<br>
                                                ... else:<br>
                                                ...     print('Буквы a в строке нет')<br>
                                                Буквы a в строке нет</code>
                                </div>
                            </div>
                    </div>
            </div>

<!--Laravel-->
        <div class="accordion div-show" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    КОНСОЛЬ Artisan
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                   <table class="table table-spriped">
                        <thead>
                            <th>Команда</th>
                            <th>Описание</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>php artisan list</td>
                                <td>Просмотр доступных команд</td>
                            </tr>
                            <tr>
                                <td>php artisan make:controller NameController</td>
                                <td>создать контроллер</td>
                            </tr>
                            <tr>
                                <td>php artisan make:controller NameController --resource --model==NameModel</td>
                                <td>создать ресурсный контроллер с привязанной моделью</td>
                            </tr>
                            <tr>
                                <td>php artisan make:model NameModel</td>
                                <td>создать модель. Чтобы выполнить одновременную миграцию  добавьте после название модели -m</td>
                            </tr>
                            <tr>
                                <td>php artisan make:migration create_flights_table</td>
                                <td>создание миграций</td>
                            </tr>
                            <tr>
                                <td>php artisan migrate</td>
                                <td>запуск миграций</td>
                            </tr>
                            <tr>
                                <td>php artisan migrate:rollback</td>
                                <td>откат миграции, чтобы откатить определенное количество миграция добавьте --step=5, где 5 - количество последних миграций </td>
                            </tr>
                        </tbody>
                   </table>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    ФУНКЦИИ
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                   <h4>Массивы</h4>
                   <table class="table table-spriped">
                        <thead>
                            <th>Функция</th>
                            <th>Пример</th>
                            <th>Значение</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>array_add</td>
                                <td><code>
                                    $array = array_add(['name' => 'Desk'], 'price', 100);<br>
                                    // ['name' => 'Desk', 'price' => 100]
                                </code></td>
                                <td>
                                    Добавить указанную пару ключ/значение в массив, если она там ещё не существует.
                                </td>
                            </tr>
                            <tr>
                                <td>array_collapse</td>
                                <td><code>
                                    $array = array_collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);<br>
                                    // [1, 2, 3, 4, 5, 6, 7, 8, 9]
                                </code></td>
                                <td>
                                    Функция array_collapse() (Laravel 5.1+) собирает массив массивов в единый массив
                                </td>
                            </tr>
                            <tr>
                                <td>array_divide</td>
                                <td><code>
                                    list($keys, $values) = array_divide(['name' => 'Desk']);<br>
                                    // $keys: ['name']<br>
                                    // $values: ['Desk']<br>
                                </code></td>
                                <td>
                                Вернуть два массива — один с ключами, другой со значениями оригинального массива.
                                </td>
                            </tr>
                            <tr>
                                <td>array_dot</td>
                                <td><code>
                                    array = array_dot(['foo' => ['bar' => 'baz']]);<br>
                                    // ['foo.bar' => 'baz'];
                                </code></td>
                                <td>
                                делать многоуровневый массив плоским, объединяя вложенные массивы с помощью точки в именах.
                                </td>
                            </tr>
                        </tbody>
                   </table>
                   <h4>Пути</h4>
                   <table class="table table-spriped">
                        <thead>
                            <th>Функция</th>
                            <th>Пример</th>
                            <th>Описание</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>app_path</td>
                                <td>
                                    <code>
                                    $path = app_path();<br>
                                        $path = app_path('Http/Controllers/Controller.php');
                                    </code>
                                </td>
                                <td>
                                    Получить полный путь к папке app.
                                    Также вы можете использовать функцию app_path() для получения полного пути к указанному файлу относительно каталога приложения
                                </td>
                            </tr>
                            <tr>
                                <td>base_path</td>
                                <td>
                                    <code>
                                        $path = base_path();<br>
                                        $path = base_path('vendor/bin');
                                    </code>
                                </td>
                                <td>
                                    Получить полный путь к корневой папке приложения. Также вы можете использовать функцию base_path() для получения полного пути к указанному файлу относительно корня проекта
                                </td>
                            </tr>
                            <tr>
                                <td>config_path</td>
                                <td>
                                    <code>
                                        $path = config_path();
                                    </code>
                                </td>
                                <td>
                                Получить полный путь к папке config
                                </td>
                            </tr>
                            <tr>
                                <td>elixir</td>
                                <td>
                                    <code>
                                        elixir($file);
                                    </code>
                                </td>
                                <td>
                                    Функция elixir() получает путь к файлу Elixir в системе контроля версий
                                </td>
                            </tr>
                            <tr>
                                <td>public_path</td>
                                <td>
                                    <code>
                                        $path = public_path();
                                    </code>
                                </td>
                                <td>
                                    Получить полный путь к папке public
                                </td>
                            </tr>
                            
                        </tbody>
                   </table>
                   
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    ОТНОШЕНИЯ
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                <h4>Отношения</h4>
                   <table class="table table-striped">
                        <thead>
                            <th>Тип</th>
                            <th>Пример</th>
                            <th>Описание</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Один к одному</td>
                                <td>
                                    <code>
                                        /**<br>
                                        * Получить запись с номером телефона пользователя.<br>
                                        */<br>
                                        public function phone()<br>
                                        {<br>
                                            return $this->hasOne('App\Phone');<br>
                                        }<br>
                                    </code>
                                </td>
                                <td>
                                    К примеру, модель User может иметь один Phone. Чтобы определить такое отношение, мы помещаем метод phone() в модель User. Метод phone() должен вызвать метод hasOne() и вернуть его результат
                                </td>
                            </tr>
                            <tr>
                                <td>Один ко многим</td>
                                <td>
                                    <code>
                                    /**<br>
                                        * Получить комментарии статьи блога.<br>
                                        */<br>
                                        public function comments()<br>
                                        {<br>
                                            return $this->hasMany('App\Comment');<br>
                                        }
                                    </code>
                                </td>
                                <td>
                                    Отношение «один ко многим» используется для определения отношений, где одна модель владеет некоторым количеством других моделей. Примером отношения «один ко многим» является статья в блоге, которая имеет «много» комментариев.
                                </td>
                            </tr>
                            <tr>
                                <td>Многие ко многим</td>
                                <td>
                                    <code>
                                    /**<br>
                                        * Роли, принадлежащие пользователю.<br>
                                        */
                                        public function roles()<br>
                                        {<br>
                                            return $this->belongsToMany('App\Role');<br>
                                        }<br>
                                    </code>
                                </td>
                                <td>Отношения типа «многие ко многим» сложнее отношений hasOne() и hasMany(). Примером может служить пользователь, имеющий много ролей, где роли также относятся ко многим пользователям. Например, несколько пользователей могут иметь роль «Admin». Нужны три таблицы для этой связи: users, roles и role_user. Имя таблицы role_user получается из упорядоченных по алфавиту имён связанных моделей, она должна иметь поля user_id и role_id.</td>
                            </tr>
                        </tbody>
                   </table>
                </div>
                </div>
            </div>
        </div>
</div>





<script>
    $('#buttons button').click(function() {
        let index = $(this).index();

        $('#buttons button.active').removeClass('active');
          $(this).addClass('active');
          
          $('#content div.showed').removeClass('showed');
          $('#content div.div-show').eq(index).addClass('showed');
    })
</script>
@endsection