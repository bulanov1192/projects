<?php
echo '
<!-- TASKS LIST -->
    <div class="list">

        <!-- TASK 2 -->
        <div class="item" id="item-2">
            <ul class="task-columns">
                <li class="column task-column__drag">
                    <a href="#" class="task-drag_btn">
                        ☰
                    </a>
                </li>
                <li class="column task_column__index task-index">
                    PRG-2
                </li>
                <li class="column task-column__status">
                    <p class="task-status task-status__new" title="$task-status">new</p>
                </li>
                <li class="column task-column__name">
                    <span class="task-name">Задача 2</span>
                </li>
                <li class="column task-column__description">
                    <p class="task-description" title="$description">
                        небольшая часть описания, скрываемая при достижении края колонки скриптом
                        (при наведниии появляется полное описание)
                    </p>
                </li>
                <li class="column task-column__more">
                    <a href="#" id="item2" class="tasks-btn task-info">Подробнее</a>
                </li>
            </ul>
        </div>

        <div class="item" id="item-1">
            <!-- TASK 1 -->
            <ul class="task-columns">
                <li class="column task-column__drag">
                    <a href="#" class="task-drag_btn">
                        ☰
                    </a>
                </li>
                <li class="column task_column__index task-index">
                    PRG-2
                </li>
                <li class="column task-column__status">
                    <!-- заскриптовать скрытие при недостатке пространства -->
                    <p class="task-status task-status__active" title="$task-status">active</p>
                </li>
                <li class="column task-column__name">
                    <span class="task-name">Задача 1</span>
                </li>
                <li class="column task-column__description">
                    <!-- заскриптовать скрытие при недостатке пространства -->
                    <p class="task-description" title="$description">
                        небольшая часть описания, скрываемая при достижении края колонки скриптом
                        (при наведниии появляется полное описание)
                    </p>
                </li>
                <li class="column task-column__more">
                    <a href="#" id="item2" class="tasks-btn task-info">Подробнее</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ADD BUTTON -->
    <a href="#" class="btn task-add_btn clearfix">+ добавить</a>
</div>
';
