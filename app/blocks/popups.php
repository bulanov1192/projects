<?php

if ($title == 'Проекты'){
    echo '
        <!--ADD PROJECT-->
        <div class="overlay hidden">
            <div class="popup-cont">
                <div class="popup clearfix" >
                    <div class="popup_header">
                        <h3 class="popup_name">Добавить проект</h3>
                        <a class="popup_close" href="#">×</a>
                    </div>
                    <div class="popup_body">
                        <form class="form form__project-add" action="app/php/formHandler.php" method="post">
                            <label for="inputProjectName" class="label">имя проекта</label>
                            <input type="text" id="inputProjectName" name="project-name" class="input input__name" maxlength="150">

                            <label for="inputProjectIndex" class="label">Индекс</label>
                            <input type="text" id="inputProjectIndex" name="project-index" class="input input__index" maxlength="3">

                            <input type="submit" class="form_submit" name="submit" value="Создать">
                        </form>
                    </div>
                </div>
            </div>
        </div>
';}
elseif ($title == 'Задачи') {
    echo '
    <!-- TASK EDIT POPUP -->
<div class="overlay overlay__task-edit hidden">
<div class="popup-cont popup-cont__task-edit">
<div class="popup popup__task-edit clearfix">
    <div class="popup_header popup_header__task-edit">
        <h3 class="popup_name popup_name__task-edit">Редактировать задачу</h3>
        <a class="popup_close popup_close__task-edit" href="#">×</a>
    </div>
    <div class="popup_body popup_body__task-edit">
        <form class="form form__task-edit" action="app/php/formHandler.php" method="post">
            <label for="inputTaskName" class="label">Имя задачи</label>
            <input type="text" id="inputTaskName" name="task-name" class="input input__name" maxlength="250">

            <label for="inputTaskStatus" class="label">Статус</label>
            <select class="form-select" name="task-status" id="inputTaskStatus">
                <option value="active">Активная</option>
                <option value="new">Новая</option>
                <option value="in-progress">В процессе</option>
            </select>

            <label for="inputTaskStatus" class="label">Статус</label>
            <select class="form-select" name="task-status" id="inputTaskStatus">
                <option value="active">Активная</option>
                <option value="new">Новая</option>
                <option value="in-progress">В процессе</option>
            </select>


            <label for="inputTaskType" class="label">Тип задачи</label>
            <select class="form-select" name="task-type" id="inputTaskType">
                <option value="improve">Улучшение</option>
                <option value="fix">Правка</option>
            </select>

            <label for="inputTaskDescription" class="label">Описание задачи</label>
            <textarea class="task-description_input" name="task-description" id="inputTaskDescription" cols="65" rows="5"></textarea>

            <input type="submit" class="form_submit" name="submit" value="Применить изменения">
        </form>
    </div>
</div>
</div>
</div>


<!-- TASK ADD POPUP -->
<div class="overlay overlay__task-add hidden">
    <div class="popup-cont popup-cont__task-add">
        <div class="popup popup__task-add clearfix">
            <div class="popup_header popup_header__task-add">
                <h3 class="popup_name popup_name__task-add">Новая задача</h3>
                <a class="popup_close popup_close__task-add" href="#">×</a>
            </div>
            <div class="popup_body popup_body__task-add">
                <form class="form form__task-add" action="app/php/formHandler.php" method="post">
                    <label for="inputTaskName" class="label">Имя задачи</label>
                    <input type="text" id="inputTaskName" name="task-name" class="input input__name" maxlength="250">

                    <label for="inputTaskStatus" class="label">Статус</label>
                    <select class="form-select" name="task-status" id="inputTaskStatus">
                        <option value="active">Активная</option>
                        <option value="new">Новая</option>
                        <option value="in-progress">В процессе</option>
                    </select>


                    <label for="inputTaskType" class="label">Тип задачи</label>
                    <select class="form-select" name="task-type" id="inputTaskType">
                        <option value="improve">Улучшение</option>
                        <option value="fix">Правка</option>
                    </select>

                    <label for="inputTaskDescription" class="label">Описание задачи</label>
                    <textarea class="task-description_input" name="task-description" id="inputTaskDescription" cols="65" rows="5"></textarea>

                    <input type="submit" class="form_submit" name="submit" value="Применить изменения">
                </form>
            </div>
        </div>
    </div>
</div>
    ';
};





