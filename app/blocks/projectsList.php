<?php
echo '<!-- PROJECTS LIST -->
        <div class="list">';

$items = getProject(); //получение массива с проектами
rsort($items);
$item_id = 1;
foreach($items as $item): // цикл вывода проектов гле $item - один из массива $items
echo '
<!-- ITEM '.$item["id"].' -->
<div class="item" pos="'.$item_id.'"">
    <ul class="project-columns">
        <li class="column project_column__name"><a href="#" class="project__link">'.$item["project_name"].'</a></li>
        <li class="column project_column__index">'.$item["project_index"].'</li>
        <li class="column project_column__link">
            <a href="/tasks.php?tid='.$item["id"].'" id="item'.$item["id"].'" class="tasks-btn">Задачи</a>
        </li>
    </ul>
</div>
';
$item_id = $item_id+1;
endforeach;

echo '
        </div>
        <!-- ADD BUTTON -->
        <a href="#" class="btn project-add_btn clearfix">+ добавить</a>
    </div>';
