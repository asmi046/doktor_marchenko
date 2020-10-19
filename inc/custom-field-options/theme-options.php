<?php
if(!defined('ABSPATH')) {
    exit();
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make( 'theme_options', 'monte_theme_options', 'Настройки темы' )
    ->add_tab('Главная', array(
      Field::make( 'image', 'monte_logo', 'Логотип')
        ->set_width(30),
      Field::make( 'image', 'monte_header_bg_main', 'Баннер в шапке по умолчанию')
        ->set_width(30),
    ))
    ->add_tab('События',array(
      Field::make('complex', 'monte_events', 'Событие')
        ->add_fields(array(
		Field::make('image', 'image', 'Фото')
			->set_width(30),
		Field::make('text', 'date', 'Даты проведения мероприятия')
			->set_width(30),
		Field::make('text', 'title', 'Название мероприятия')
			->set_width(30),
		Field::make('rich_text', 'about', 'O мероприятии')
			->set_width(30),
		Field::make('text', 'link', 'Cсылка на страницу мероприятия')
			->set_width(30),
        ))
    ))
    ->add_tab('Квалификация',array(
      Field::make('complex', 'monte_qualification', 'Квалификация')
        ->add_fields(array(
          Field::make('textarea', 'monte_text', 'Квалификация'),
        ))
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'monte_phone', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_phone_2', __( 'Телефон для записи на прием' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_email_send_2', __( 'Email для отправки 2' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_qty', __( 'Количество оставшихся мест' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_insta', __( 'Ссылка инстаграм' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_vk', __( 'Ссылка ВК' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_telegram', __( 'Ссылка Телеграм' ) )
          ->set_width(50),
        Field::make( 'text', 'monte_whatsapp', __( 'Ссылка Whatsapp' ) )
          ->set_width(50),
    ) );
	
Container::make('post_meta', 'tur_setings', 'Настройки тура')
	->where( 'post_template', '=', 'page-belarus.php' )
	->or_where( 'post_template', '=', 'page-montenegro.php' )
	->add_fields(array(
		Field::make('image', 'header_bg', 'Фото')->set_width(50),
		Field::make('text', 'tur_data', 'Даты тура')->set_width(50),
		Field::make('text', 'tur_year', 'Год тура')->set_width(50),
		Field::make('text', 'tur_where', 'Где тур')->set_width(50),
		Field::make('text', 'live_tur', 'Ведущий мастер класса')->set_width(50),
		Field::make('rich_text', 'competention', 'Компетенции напротив фото')->set_width(100),
		Field::make('rich_text', 'competention2', 'Компетенции напротив фото #2')->set_width(100),
		Field::make('text', 'tur_countm_mest', 'Количество оставшихся мест')->set_width(50),
		Field::make('text', 'tur_countm_mest_iz', 'Количество мест всего')->set_width(50),
	));
	
Container::make('post_meta', 'tur_preim', 'Преимущества тура')
	->where( 'post_template', '=', 'page-belarus.php' )
	->or_where( 'post_template', '=', 'page-montenegro.php' )
	->add_fields(array(
		Field::make('text', 'p1_zag', 'Заголовок #1')->set_width(50),
		Field::make('text', 'p1_txt', 'Текст #1')->set_width(50),
		
		Field::make('text', 'p2_zag', 'Заголовок #2')->set_width(50),
		Field::make('text', 'p2_txt', 'Текст #2')->set_width(50),
		
		Field::make('text', 'p3_zag', 'Заголовок #3')->set_width(50),
		Field::make('text', 'p3_txt', 'Текст #3')->set_width(50),

	));
	
Container::make('post_meta', 'tur_programm', 'Программа тура ')
	->where( 'post_template', '=', 'page-belarus.php' )
	->or_where( 'post_template', '=', 'page-montenegro.php' )
	->add_fields(array(
		Field::make('text', 'tp_inst_lnk', 'Cсылка на программу в Instagramm')->set_width(100),
		
		Field::make('text', 'tp1_data', 'Дата #1')->set_width(100),
		Field::make('rich_text', 'tp1_prog', 'Программа #1')->set_width(100),
		
		Field::make('text', 'tp2_data', 'Дата #2')->set_width(100),
		Field::make('rich_text', 'tp2_prog', 'Программа #2')->set_width(100),
		
		Field::make('text', 'tp3_data', 'Дата #3')->set_width(100),
		Field::make('rich_text', 'tp3_prog', 'Программа #3')->set_width(100),
		
		Field::make('text', 'tp4_data', 'Дата #4')->set_width(100),
		Field::make('rich_text', 'tp4_prog', 'Программа #4')->set_width(100),
		
		Field::make('text', 'tp5_data', 'Дата #5')->set_width(100),
		Field::make('rich_text', 'tp5_prog', 'Программа #5')->set_width(100),
		
		Field::make('text', 'tp6_data', 'Дата #6')->set_width(100),
		Field::make('rich_text', 'tp6_prog', 'Программа #6')->set_width(100),
		
		Field::make('text', 'tp7_data', 'Дата #7')->set_width(100),
		Field::make('rich_text', 'tp7_prog', 'Программа #7')->set_width(100),
		
		Field::make('text', 'tp8_data', 'Дата #8')->set_width(100),
		Field::make('rich_text', 'tp8_prog', 'Программа #8')->set_width(100),
		
		Field::make('text', 'tp9_data', 'Дата #9')->set_width(100),
		Field::make('rich_text', 'tp9_prog', 'Программа #9')->set_width(100),

	));
	
Container::make('post_meta', 'tur_razm', 'Место проведения')
	->where( 'post_template', '=', 'page-belarus.php' )
	->or_where( 'post_template', '=', 'page-montenegro.php' )
	->add_fields(array(
		Field::make('text', 'hotel_name', 'Название отеля')->set_width(100),
		Field::make('rich_text', 'hotel_text_up', 'Текст вверху')->set_width(100),
		Field::make('text', 'hotel_pz', 'Подзаголовок')->set_width(100),
		Field::make('rich_text', 'hotel_text_down', 'Текст внизу')->set_width(100),
		
		Field::make( 'image', 'hotel_img_1', 'Картинка 1')->set_width(30),
		Field::make( 'image', 'hotel_img_2', 'Картинка 2')->set_width(30),
		Field::make( 'image', 'hotel_img_3', 'Картинка 3')->set_width(30),
		Field::make( 'image', 'hotel_img_4', 'Картинка 3')->set_width(30),
		Field::make( 'image', 'hotel_img_5', 'Картинка 3')->set_width(30),
		Field::make( 'image', 'hotel_img_6', 'Картинка 3')->set_width(30),
		Field::make( 'image', 'hotel_img_7', 'Картинка 3')->set_width(30),
		Field::make( 'image', 'hotel_img_8', 'Картинка 3')->set_width(30),
		Field::make( 'image', 'hotel_img_9', 'Картинка 3')->set_width(30),
		Field::make( 'image', 'hotel_img_10', 'Картинка 3')->set_width(30),

	));
	
Container::make('post_meta', 'tur_pacet', 'Пакеты участия в туре ')
	->where( 'post_template', '=', 'page-belarus.php' )
	->or_where( 'post_template', '=', 'page-montenegro.php' )
	->add_fields(array(
		Field::make('text', 'tpac1_data', 'Заголовок #1')->set_width(100),
		Field::make('text', 'tpac1_price', 'Цена #1')->set_width(100),
		Field::make('rich_text', 'tpac1_prog', 'Программа участия #1')->set_width(100),
		
		Field::make('text', 'tpac2_data', 'Заголовок #2')->set_width(100),
		Field::make('text', 'tpac2_price', 'Цена #2')->set_width(100),
		Field::make('rich_text', 'tpac2_prog', 'Программа участия #2')->set_width(100),
		
		Field::make('text', 'tpac3_data', 'Заголовок #3')->set_width(100),
		Field::make('text', 'tpac3_price', 'Цена #3')->set_width(100),
		Field::make('rich_text', 'tpac3_prog', 'Программа участия #3')->set_width(100),
		
	));
	
Container::make('post_meta', 'tur_otz', 'Отзывы о специалисте')
	->where( 'post_template', '=', 'page-belarus.php' )
	->or_where( 'post_template', '=', 'page-montenegro.php' )
	->add_fields(array(
		Field::make('text', 'otz1_name', 'Имя #1')->set_width(100),
		Field::make('rich_text', 'otz1_text', 'Отзыв #1')->set_width(100),
		
		Field::make('text', 'otz2_name', 'Имя #2')->set_width(100),
		Field::make('rich_text', 'otz2_text', 'Отзыв #2')->set_width(100),
		
		Field::make('text', 'otz3_name', 'Имя #3')->set_width(100),
		Field::make('rich_text', 'otz3_text', 'Отзыв #3')->set_width(100),
		
	));

Container::make('post_meta', 'page_standard', 'Доп поля')
	->where( 'post_template', '!=', 'page-belarus.php' )
	->or_where( 'post_template', '!=', 'page-montenegro.php' )
	->add_fields(array(
		Field::make('image', 'monte_header_bg', 'Баннер в шапке'),
	));