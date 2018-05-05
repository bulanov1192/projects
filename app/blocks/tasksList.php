<?php
$pid = htmlspecialchars(trim(mb_strtolower($_GET['pid'])));
if (!$pid) {
  $pid = 'all';
};

echo '
<!-- TASKS LIST -->
    <div class="list">
';
$items = getTasks();
rsort($items);
$item_id=1;
if (!$items) {
    echo '<span class="empty_list">Задач не добавлено. Нажмите <b>"+ добавить"</b>, чтобы создать задачу.</span>';
}
else {
    foreach ($items as $item):
        echo '
            <!-- TASK '.$item["id"].' -->
            <div class="item" pos="'.$item_id.'">
                <ul class="task-columns">
                    <li class="column task-column__drag">
                        <a href="#" class="task-drag_btn">
                            ☰
                        </a>
                    </li>
                    <li class="column task_column__index task-index">
                        '.$item["task_index"].'
                    </li>
                    <li class="column task-column__status">
                        <p class="task-status task-status__'.$item["status"].'" title="$task-status">'.$item["status"].'</p>
                    </li>
                    <li class="column task-column__name">
                        <span class="task-name">'.$item["task_name"].'</span>
                    </li>
                    <li class="column task-column__description">
                        <p class="task-description" title="'.$item["task_description"].'">
                            '.$item["task_description"].'
                        </p>
                    </li>
                    <li class="column task-column__more">
                        <a href="#" id="item2" class="tasks-btn task-info">Подробнее</a>
                    </li>
                </ul>
            </div>

            ';
        $item_id = $item_id + 1;
    endforeach;
}

echo '
    </div>
    <!-- ADD BUTTON -->
    <a href="#" class="btn task-add_btn clearfix">+ добавить</a>
</div>
';


