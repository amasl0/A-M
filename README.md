<h3>LAST UPDATE: 0.030</h3>
<h5><i>Комментарий: реструктуризация проекта согласно MVC паттерну (Model View Controller), что позволило реализовать back-end взаимодействие.</i></h5>
<h4>ADD:</h4>
<ul>
  <li>Базовые классы controller.php, model.php, route.php, view.php</li>
  <li>Контроллеры (controllers) и представления (views) соответственно:
      <ul>
        <li>404</li>
        <li>main</li>
        <li>search</li>
        <li>favorite</li>
        <li>store</li>
        <li>comics</li>
      </ul></li>
  <li>
     Переименовывание всех CSS файлов стандарта: style_example.css
  </li>
  <li>
     Реструктуризация библиотеки изображений для комиксов (вкл обложку, обои и саму галерею) в отдельный файл Library.
  </li>
  <li>
     Переход на новые стандарты именований:
     <ul>
       <li>контроллеры: <br>
         controller_example.php</li>
       <li>модели: <br>
         model_example.php</li>
       <li>представление: <br>
         example_view.php</li>
     </ul> 
  </li>
</ul>

<h4>DELETE:</h4>
<ul>
    <li>Структура проекта прежднего формата, вроде Pages, wwwroot и пр</li>
    <li>Удаление JS библиотек: jQuery, OwlCarousel, etc</li>
</ul>

Распространение исходного кода данного проекта будет считаться нарушением интеллектуальных авторских прав. 
Находясь на данной странице, вы соглашаетесь с условием просмотра данного репозитория.
