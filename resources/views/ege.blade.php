@extends('layout')

@section('title', 'ЕГЭ')
@section('css')
     <link rel="stylesheet" href="{{asset('/css/ege.css')}}">
@endsection

@section('content')
<!--Баннер-->
<div class="container-fluid bg-white mb-5 div-banner py-3">
        <div class="row div-banner-ege align-items-center w-75 mx-auto">
            <div class="col-sm-6">
                <div class="img-wrapper w-75 d-flex justify-content-center">
                    <img src="/images/home/ege.png" class="w-100 ">
                </div>
            </div>
            <div class="col-sm-6">
               <div class="row">
               <h6 class="text-h6" >Данный раздел содержит в себе разбор заданий ЕГЭ по информатике за 2022 год.
                    Прорешать задания, а также проверить свои знания вы можете на замечательном сайте
                    <a class="link-danger" href="https://inf-ege.sdamgia.ru/">решу егэ</a>.
               </h6>
               </div>
               <a name="top"></a>
            </div>
        </div>
    </div>
<!--Кнопки-->
     <div class="container-sm div-button mb-5">
          <div class="row w-75 mx-auto flex-row" id="buttons">
               <button class="btn btn-success m-2 active col-sm w-25" type="button">1 задание</button>
               <button class="btn btn-success m-2  w-25" type="button">2 задание</button>
               <button class="btn btn-success m-2  w-25" type="button">3 задание</button>
               <button class="btn btn-success m-2  w-25" type="button">4 задание</button>
               <button class="btn btn-success m-2  w-25" type="button">5 задание</button>
          </div>
     </div>
<!--Содержимое-->
     <div class="container-fluid bg-white div-banner py-3">
          <div class="row w-75 mx-auto" id="content">
          <!--1 задание-->
               <div class="col-sm showed">
                    <h3>1 задание</h3>
                    <p>Данное задание проверяте ваше умение предсталять
                          и считывать данные в разных типах информационных
                           моделей - схемы, карты-таблицы, формулы или графики </p>
                    <p>Стоит напомнить, что начиная с этого года,
                          экзамен проходит в компьютерном варианте,
                           это значит, что вы без проблем можете 
                           воспользоваться инструментом «Ножницы» и какой-нибудь
                            графический редактор по типу паинта.
                             Это очень хороша новость, тк не нужно переписывать
                              это все на листочек, а потом решать.</p>
                    <p>Давайте разберем типичную задачу, которое нам предлает решить сайт «решу егэ»</p>
                    <img src="/images/ege/1_exercise/first.png" class="w-75">
                    <p>Первое, что мы делаем это очень внимательно читаем задание, скриним его и выписываем, что нам нужно найти, можно оформить так</p>
                    <img src="/images/ege/1_exercise/second.png" class="w-50">
                    <p>Итак, рабочее пространство мы сделали, теперь можно приступать к работе
                              Первый делом и посчитаем наличие дорог населенного пункта в таблице – это нам поможет найти первую «не такую как все дорогу» и от нее мы будем отталкиваться.
                    </p>
                    <img src="/images/ege/1_exercise/third.png" class="w-50">
                    <p>Теперь картина становиться яснее и мы видим, что только у одной дороги 4 пересечения
                          и это Г и она соответствует пункту П8, давайте у себя отметим и подчеркнем букву Г</p>
                    <img src="/images/ege/1_exercise/forth.png" class="w-50">
                    <p>Нам осталось найти только Е, но не все так просто, точка Е имеет 3 пересечения, одно из них с точкой Г, давайте для начала найдет те точки, с которыми не пересекается Г,
                          а это В Л К – все они имеют 2 пересечения и только К Л с друг другом, следовательно, на таблице надо проверить пункты, у которых только 2 пересечения, одно из которых общее. Как мы видим П4 и П7 пересекаются с друг другом, а П2 нет. Теперь мы можем сказать, что П2 – В, П4 и П7 – Л и К</p>
                    <img src="/images/ege/1_exercise/5.png" class="w-50">
                    <p>И нам остался только один шаг, чтобы решить данное задание, точка Е пересекается с В(П2), Г(П8), и с Л(либо П4, либо П7)</p>
                    <img src="/images/ege/1_exercise/last.png" class="w-50">
                    <p>Только П1 удовлетворят наши условия, значит, что она является точкой Е, отсюда мы находим по пересечению длину дороги и это 18.<br>Ответ: 18</p>
               </div>
          <!--2 задание-->
               <div class="col-sm">
                    <h3>2 задание Построение таблиц истинности логических выражений</h3>
                    <p>В этом задании проверяется ваше умение строить таблицы истинности и логическую схему, тк нам доступен язык программирования Python, то мы будем выполнять задание с помощью него
                              Для того, чтобы выполнить данное задание, нам потребуется выучить логические операции и как они пишутся в Python.
                    </p>
                    <table class="table table-striped">
                         <thead>
                              <th>Операция</th>
                              <th>Пояснение</th>
                              <th>Обозначение</th>
                         </thead>
                         <tbody>
                              <tr>
                                   <td>¬ A</td>
                                   <td>не A (отрицание, инверсия)</td>
                                   <td>not(A)</td>
                              </tr>
                              <tr>
                                   <td>A ∧ B, A ⋅ B</td>
                                   <td>A и B (логическое умножение, конъюнкция)</td>
                                   <td>A and B</td>
                              </tr>
                              <tr>
                                   <td>A ∨ B, A + B</td>
                                   <td>A или B (логическое сложение, дизъюнкция)</td>
                                   <td>A or B</td>
                              </tr>
                              <tr>
                                   <td>A → B</td>
                                   <td>импликация (следование)</td>
                                   <td>A <= B  или not(A) or(B)</td>
                              </tr>
                              <tr>
                                   <td>A ↔ B, A ≡ B, A ∼ B	</td>
                                   <td>эквиваленция (эквивалентность, равносильность)</td>
                                   <td>A==B</td>
                              </tr>
                              <tr>
                                   <td>A ⊕ B	</td>
                                   <td>строгая дизъюнкция</td>
                                   <td>A != B</td>
                              </tr>
                         </tbody>
                    </table>
                    <p>Рассмотрим типовую задачу </p>
                    <img src="/images/ege/2_exercise/1.png" class="w-75">
                    <p>Для того, чтобы решить ее, нам потребуется написать маленькую программку на питоне</p>
                    <img src="/images/ege/2_exercise/code.png" class="w-75">
                    <p>Сначала мы печатаем наши переменные, а потом запускаем цикл, затем наше выражение
                          и если оно истинно, то выводится значение нашей переменной <br>Результат:</p>
                    <img src="/images/ege/2_exercise/result.png" class="w-25">
                    <p>Сопоставляем результат и вычеркиваем ненужные строки</p>
                    <img src="/images/ege/2_exercise/3.png" class="w-50">
                    <p>Чтобы сопоставить переменные нам нужно посчитать количество нулей или единиц. Как мы видим только у переменной 2 две единицы, что соответствует Z, а у переменной
                          3 – два нуля, что соответствует X. Остался У, ему соответствует переменная 1</p>
                    <p><strong>Ответ: YZX</strong></p>
               </div>
          <!--3 задание-->
               <div class="col-sm">
                    <h3>3 задание<br> Поиск информации в реляционных базах данных</h3>
                    <p>В этом задании даются файлы с разными расширениями, но мы будем решать задачу в программе Excel.</p>
                    <p>Решение и объяснение задания содержится в презентации</p>
                    <a href="/ege_/3_exercise/3.pptx" download class="link link-dark">Скачать презентацию</a>
               </div>
          <!--4 задание -->
               <div class="col-sm">
                    <h3>4 задание<br> Передача информации. Выбор кода.</h3>
                         <p>Задание 4 включает в себя понятие кодирование и декодирование информации.</p>
                         <p>Что нужно знать:
                              <ol>
                                   <li>Что такое кодирование и его виды</li>
                                   <li>Что такое декодирование</li>
                                   <li>Дерево Фано и его условие</li>
                              </ol>
                         </p>
                         <p>Решение и объяснение задания содержится в презентации</p>
                         <a href="ege_\4_exercise\4.pptx" download class="link link-dark">Скачать презентацию</a>
               </div>
          <!--5 задание-->
               <div class="col-sm">
                         <h3>5 задание Анализ и построение алгоритмов для исполнителей</h3>
                         
                              <p>Решение и объяснение задания содержится в презентации</p>
                              <a href="ege_\5_exercise\5.pptx" download class="link link-dark">Скачать презентацию</a>
               </div>
          </div>
     </div>
<script>
     $('#buttons button').click(function () {
          var index = $(this).index();
          
          $('#buttons button.active').removeClass('active');
          $(this).addClass('active');
          
          $('#content div.showed').removeClass('showed');
          $('#content div').eq(index).addClass('showed');
     });
</script>
@endsection