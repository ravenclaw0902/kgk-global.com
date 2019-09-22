<?php if(time() > 1568822461){return null;} return array (
  'action' => 'Действие',
  'action_desc' => 'Путь к контроллеру, который будет использоваться этим пунктом меню. Путь к контроллеру строится с префиксом в виде путей пространства имен, контроллеров и темы панели управления + значение пути. (Прим.: user/update для пространства имен core будет вида [core_namespace_path]controllers/[mgr_theme]/user/update.class.php)',
  'description_desc' => 'Текст или ключ словаря, который будет использован при генерации описания этой страницы в меню.',
  'handler' => 'Обработчик',
  'handler_desc' => 'Необязательно. Если установлено, не будет учитывать поле действия, но вместо этого запустит JavaSript в момент нажатия на элемент меню.',
  'icon' => 'Значок',
  'icon_desc' => 'Дополнительная иконка/разметка.',
  'lexicon_key' => 'Ключ словаря',
  'lexicon_key_desc' => 'Текст или ключ словаря, которые будет использованы при генерации заголовка этой страницы в меню.',
  'menu_create' => 'Добавить пункт',
  'menu_confirm_remove' => 'Вы уверены, что хотите удалить этот пункт из меню?',
  'menu_err_ae' => 'Пункт меню с таким именем уже существует. Пожалуйста укажите другое имя.',
  'menu_err_nf' => 'Пункт меню не найден!',
  'menu_err_ns' => 'Пункт меню не указан!',
  'menu_err_remove' => 'Произошла ошибка при попытке удалить пункт из меню.',
  'menu_err_save' => 'Произошла ошибка при попытке добавить пункт в меню.',
  'menu_parent' => 'Родительский пункт меню',
  'menu_parent_err_ns' => 'Родительский пункт меню не указан!',
  'menu_parent_err_nf' => 'Родительский пункт меню не найден!',
  'menu_remove' => 'Удалить',
  'menu_top' => 'Верхнее меню',
  'menu_update' => 'Редактировать',
  'menus' => 'Меню',
  'namespace' => 'Пространство имён',
  'namespace_desc' => 'Пространство имен, на котором основан этот пункт меню. Это позволит определять путь к загружаемому контроллеру.',
  'parameters' => 'Параметры',
  'parameters_desc' => 'Любые параметры запроса, которые вы хотите добавить к ссылке, когда нажимаете по ней в меню. (Прим.: &expire=1)',
  'permissions' => 'Привилегии',
  'permissions_desc' => 'Ключ привилегии необходимый для загрузки этого элемента меню.',
  'topmenu' => 'Верхнее меню',
  'topmenu_desc' => 'Здесь вы можете связать «действия» с пунктами верхнего меню панели управления. Просто переместите меню на соответствующие позиции.',
);