Здесь идёт как название шаблона то есть например для одной новости в контроллере на запуск шаблона будет такой запрос 
  $this->view->render('news/item/index'); это если по старому а ниже по новому стилю
  View::views('news::item::index'); и это работает везде то есть и внутри самого шаблона тоже например для подключения повторяющегося блока
  <?php View::views('blocks::header'); ?> например так 
