/**
 * Created by HYPERPC on 22.04.2018.
 */

// VARiables

var popupClose = ".popup_close"; //закрытие окна
var overlay = ".overlay"; //класс оверлея общий
var projectAddBtn = ".project-add_btn"; //класс кнопки добавления проекта
var taskInfo = ".task-info"; //класс кнопки открытия окна редактирования задачи
var taskEdit = ".overlay__task-edit"; //класс попапа с формой редактирования задачи
var taskAddBtn = ".task-add_btn";
var taskAdd = ".overlay__task-add";


// POPUP togglers

// добавление нового проекта
$(projectAddBtn).click(function() {
   $(overlay).toggleClass('hidden');
});

$(popupClose).click(function() {
    $(overlay).addClass('hidden');
});
//скрытие по клику на оверлей почему то срабатывает и по клику на вложенные элементы, что бесит
//$(overlay).click(function() {
//    $(overlay).addClass('hidden');
//});

// Редактирование задачи
$(taskInfo).click(function() {
    $(taskEdit).toggleClass('hidden');
});
// Добавление новой задачи
$(taskAddBtn).click(function() {
    $(taskAdd).toggleClass('hidden');
});
// скрытие клика по оверлею должно добавиться из первой функции "добавление нового проекта"

// добавление модификатора active к кнопке меню
function menuActive(title) {
  if (title == 'Проекты') {
      var projectsBtn = document.getElementsByName('projects');
      $(projectsBtn).addClass('nav_button__active');
  }
    else if (title == 'Задачи') {
      var tasksBtn = document.getElementsByName('tasks');
      $(tasksBtn).addClass('nav_button__active');
  }
    else {
      console.log('Тайтл страницы не совпадает с кнопками главного меню');
  }
}

