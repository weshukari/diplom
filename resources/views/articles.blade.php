@extends('layout')

@section('title', 'Статьи')
@section('css')
    <link rel="stylesheet" href="{{asset('/css/articles.css')}}">
@endsection

@section('content')
    <div class="container-fluid bg-white div-banner py-2">
        <h2 class="text-center">Статьи</h2>
    </div>
<!--Кнопки-->
    <div class="container">
        <div class="row div-button justify-content-between" id="buttons">
            <button type="button" class="btn btn-success w-25 m-2 active">HTML</button>
            <button type="button" class="btn btn-success  w-25 m-2">Python</button>
        </div>
    </div>

<!--Статьи-->
<div id="content">
    <!--HTML-->
        <div class="container-fluid div-banner py-4 bg-white showed">
            <div class="row justify-content-center w-75 mx-auto">
                <div class="col-sm-5 img-wrapper mb-4">
                    <img src="/images/articles/html.svg" class="w-100">
                </div>
                <div class="accordion  mb-4" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button html" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Что такое HTML и его описание
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                            <p><b>HTML</b> (от английского <b>HyperText Markup Language</b>) — это язык гипертекстовой разметки страницы. Он используется для того, чтобы дать браузеру понять, как нужно отображать загруженный сайт.</p>
                                <h4>Особенности HTML:</h4>
                                <ol>
                                    <li>Изначально перечень команд оформления текстов включал всего 18 элементов, 11 из которых используются даже в последних релизах.</li>
                                    <li>Основная задача языка заключалась в воспроизведении контента без искажений независимо от технического оснащения устройства.</li>
                                    <li>Современные версии HTML стали более зависимыми от платформы из-за появления тегов для мультимедийного и графического оформления.</li>
                                </ol>
                                <h4>Основные элементы HTML:</h4>
                                <ol>
                                    <li>Форматирование текста – выделение курсивом, жирным шрифтом, подчеркивание, размер кегля, нумерованные/маркированные списки.</li>
                                    <li>Текстовые блоки – заголовки уровней H1-H6, абзацы, перенос на новую строку.</li>
                                    <li>Таблицы – любое количество строк, столбцов, фиксированная высота, ширина, заголовки.</li>
                                    <li>Вставка объектов – изображения, звуковые, текстовые, видеофайлы и т.д.</li>
                                    <li>Гиперссылки – на файл изображения, прайс-листа, страницу, на которую ссылается пункт меню или анкор в тексте. Есть атрибуты открытия документа в текущем или новом окне.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed html" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Среды разработки
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <h4>Что такое HTML-редактор?</h4>
                                <p>HTML-редактор – это программа, в которой пишут «основание» для сайтов. Технически эту роль может выполнять любой текстовый редактор, даже «Блокнот».
                                    Но лучше доверить эту задачу приложению, специально созданному для работы с кодом.
                                </p>
                                <h4>На что обращают внимание при выборе HTML-редакторов</h4>
                                <p>При выборе текстовых и визуальных HTML-компиляторов стоит обратить внимание на наличие базовых функций:
                                    <ol>
                                        <li>Подсветка синтаксиса</li>
                                        <li>Автозавершение кода</li>
                                        <li>Проверка на наличие ошибок</li>
                                        <li>Поиск</li>
                                    </ol>
                                </p>
                                <h4>Популярные текстовые редакторы</h4>
                                    <ol>
                                        <li>Atom</li>
                                        <li>VS Code</li>
                                        <li>Sublime Text</li>
                                        <li>Notepad++</li>
                                        <li>CodeRunner</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button html collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Является ли HTML языком программирования
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <p>Нет. Такие языки используются для написания программ и веб-приложений, в них есть условия, функции, переменные,
                                    операторы и так далее. В HTML есть только теги, которые помогают браузеру правильно отобразить содержимое сайта.
                                </p>
                                <p>При этом во многих источниках говорится, что HTML все-таки относится к языкам программирования.
                                    Часть из них сомнительные, но встречаются и вполне авторитетные</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <!--Python-->
        <div class="container-fluid div-banner py-4 bg-white">
            <div class="row justify-content-center w-75 mx-auto" >
                <div class="col-sm-5 img-wraper mb-4">
                    <img src="/images/articles/python.svg" class="w-100">
                </div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button python" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Что такое python и его описание
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <h4>Python это</h4>
                                <p>Это язык программирования общего назначения,
                                    который широко применяется в различных областях: от создания
                                    банальных веб-страниц до систем управления роверами на других планетах.
                                </p>
                                <h4>Он:</h4>
                                <ol>
                                    <li>Интерпретируемый.</li>
                                    <li>Объектно-ориентированный.</li>
                                    <li>Со строгой динамической типизацией.</li>
                                </ol>
                                <h4>А для чего нужен?</h4>
                                <p>Из самых популярных отраслей — Data Science, автоматизация и веб-разработка.
                                     Вот области, в которых используется Python:</p>
                                <ol>
                                    <li>веб-разработка;</li>
                                    <li>машинное обучение;</li>
                                    <li>проекты с искусственным интеллектом, нейросети;</li>
                                    <li>Data Science, аналитика;</li>
                                    <li>некоторые игры.</li>
                                </ol>
                                <h4>Плюсы и минусы Python</h4>
                                <h5>Плюсы</h5>
                                <ul>
                                    <li>Хорошо подходит для новичков.</li>
                                    <li>Простой минималистичный синтаксис: код легко писать, читать и поддерживать.</li>
                                    <li>Большая стандартная библиотека и много дополнительных библиотек.</li>
                                    <li>Большой выбор фреймворков.</li>
                                    <li>Поддерживает объектно-ориентированное программирование и другие парадигмы.</li>
                                    <li>Кроссплатформенность и поддержка почти всех современных систем.</li>
                                </ul>
                                <h5>Минусы</h5>
                                <ul>
                                    <li>Низкая скорость.</li>
                                    <li>Плохо подходит для разработки мобильных приложений.</li>
                                    <li>Из-за динамической типизации выше вероятность ошибки при запуске, нужно больше тестов.</li>
                                    <li>Не подходит для работы с памятью на низком уровне.</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button python collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Среды разработки
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <ol>
                                <li>Python Tutor</li>
                                <li>IDLE</li>
                                <li>VS Code</li>
                                <li>Atom</li>
                                <li>PyCharm</li>
                                <li>Vim</li>
                                <li>Pythonista</li>
                            </ol>
                        </div>
                        </div>
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
          $('#content .container-fluid').eq(index).addClass('showed');
    })
</script>
@endsection