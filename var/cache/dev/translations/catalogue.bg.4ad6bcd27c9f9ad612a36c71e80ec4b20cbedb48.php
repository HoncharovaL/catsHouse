<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bg', array (
  'validators' => 
  array (
    'This value should be false.' => 'Стойността трябва да бъде лъжа (false).',
    'This value should be true.' => 'Стойността трябва да бъде истина (true).',
    'This value should be of type {{ type }}.' => 'Стойността трябва да бъде от тип {{ type }}.',
    'This value should be blank.' => 'Стойността трябва да бъде празна.',
    'The value you selected is not a valid choice.' => 'Избраната стойност е невалидна.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Трябва да изберете поне {{ limit }} опция.|Трябва да изберете поне {{ limit }} опции.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Трябва да изберете най-много {{ limit }} опция.|Трябва да изберете най-много {{ limit }} опции.',
    'One or more of the given values is invalid.' => 'Една или повече от зададените стойности е невалидна.',
    'This field was not expected.' => 'Това поле не се е очаквало.',
    'This field is missing.' => 'Това поле липсва.',
    'This value is not a valid date.' => 'Стойността не е валидна дата (date).',
    'This value is not a valid datetime.' => 'Стойността не е валидна дата (datetime).',
    'This value is not a valid email address.' => 'Стойността не е валиден email адрес.',
    'The file could not be found.' => 'Файлът не беше открит.',
    'The file is not readable.' => 'Файлът не може да бъде прочетен.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файлът е твърде голям ({{ size }} {{ suffix }}). Максималният размер е {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Майм типа на файла е невалиден ({{ type }}). Разрешени майм типове са {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Стойността трябва да бъде {{ limit }} или по-малко.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Стойността е твърде дълга. Трябва да съдържа най-много {{ limit }} символ.|Стойността е твърде дълга. Трябва да съдържа най-много {{ limit }} символа.',
    'This value should be {{ limit }} or more.' => 'Стойността трябва да бъде {{ limit }} или повече.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Стойността е твърде кратка. Трябва да съдържа поне {{ limit }} символ.|Стойността е твърде кратка. Трябва да съдържа поне {{ limit }} символа.',
    'This value should not be blank.' => 'Стойността не трябва да бъде празна.',
    'This value should not be null.' => 'Стойността не трябва да бъде null.',
    'This value should be null.' => 'Стойността трябва да бъде null.',
    'This value is not valid.' => 'Стойността не е валидна.',
    'This value is not a valid time.' => 'Стойността не е валидно време (time).',
    'This value is not a valid URL.' => 'Стойността не е валиден URL.',
    'The two values should be equal.' => 'Двете стойности трябва да бъдат равни.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файлът е твърде голям. Разрешеният максимален размер е {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файлът е твърде голям.',
    'The file could not be uploaded.' => 'Файлът не може да бъде качен.',
    'This value should be a valid number.' => 'Стойността трябва да бъде валиден номер.',
    'This file is not a valid image.' => 'Файлът не е валидно изображение.',
    'This is not a valid IP address.' => 'Това не е валиден IP адрес.',
    'This value is not a valid language.' => 'Стойността не е валиден език.',
    'This value is not a valid locale.' => 'Стойността не е валидна локализация.',
    'This value is not a valid country.' => 'Стойността не е валидна държава.',
    'This value is already used.' => 'Стойността вече е в употреба.',
    'The size of the image could not be detected.' => 'Размера на изображението не може да бъде определен.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Изображението е твърде широко ({{ width }}px). Широчината трябва да бъде максимум {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Изображението е с твърде малка широчина ({{ width }}px). Широчината трябва да бъде минимум {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Изображението е с твърде голяма височина ({{ height }}px). Височината трябва да бъде максимум {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Изображението е с твърде малка височина ({{ height }}px). Височина трябва да бъде минимум {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Стойността трябва да бъде текущата потребителска парола.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Стойността трябва да бъде точно {{ limit }} символ.|Стойността трябва да бъде точно {{ limit }} символа.',
    'The file was only partially uploaded.' => 'Файлът е качен частично.',
    'No file was uploaded.' => 'Файлът не беше качен.',
    'No temporary folder was configured in php.ini.' => 'Не е посочена директория за временни файлове в php.ini.',
    'Cannot write temporary file to disk.' => 'Не може да запише временен файл на диска.',
    'A PHP extension caused the upload to fail.' => 'PHP разширение предизвика прекъсване на качването.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Колекцията трябва да съдържа поне {{ limit }} елемент.|Колекцията трябва да съдържа поне {{ limit }} елемента.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Колекцията трябва да съдържа най-много {{ limit }} елемент.|Колекцията трябва да съдържа най-много {{ limit }} елемента.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Колекцията трябва да съдържа точно {{ limit }} елемент.|Колекцията трябва да съдържа точно {{ limit }} елемента.',
    'Invalid card number.' => 'Невалиден номер на картата.',
    'Unsupported card type or invalid card number.' => 'Неподдържан тип карта или невалиден номер на картата.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Невалиден Международен номер на банкова сметка (IBAN).',
    'This value is not a valid ISBN-10.' => 'Невалиден ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Невалиден ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Невалидна стойност както за ISBN-10, така и за ISBN-13 .',
    'This value is not a valid ISSN.' => 'Невалиден Международен стандартен сериен номер (ISSN).',
    'This value is not a valid currency.' => 'Невалидна валута.',
    'This value should be equal to {{ compared_value }}.' => 'Стойността трябва да бъде равна на {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Стойността трябва да бъде по-голяма от {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Стойността трябва да бъде по-голяма или равна на {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Стойността трябва да бъде идентична с {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Стойността трябва да бъде по-малка {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Стойността трябва да бъде по-малка или равна на {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Стойността не трябва да бъде равна на {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Стойността не трябва да бъде идентична с {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Изображението е с твърде голяма пропорция ({{ ratio }}). Максималната пропорция трябва да е {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Изображението е с твърде малка пропорция ({{ ratio }}). Минималната пропорция трябва да е {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображението е квадрат ({{ width }}x{{ height }}px). Такива изображения не са разрешени.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображението е с пейзажна ориентация ({{ width }}x{{ height }}px). Изображения с такава ориентация не са разрешени.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображението е с портретна ориентация ({{ width }}x{{ height }}px). Изображения с такава ориентация не са разрешени.',
    'An empty file is not allowed.' => 'Празни файлове не са разрешени.',
    'The host could not be resolved.' => 'Хостът е недостъпен.',
    'This value does not match the expected {{ charset }} charset.' => 'Стойността не съвпада с {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Невалиден бизнес идентификационен код (BIC).',
    'This form should not contain extra fields.' => 'Тази форма не трябва да съдържа допълнителни полета.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Каченият файл е твърде голям. Моля, опитайте да качите по-малък файл.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Невалиден CSRF токен. Моля, опитайте да изпратите формата отново.',
    'fos_user.username.already_used' => 'Потребителското име е заето.',
    'fos_user.username.blank' => 'Моля въведете потребителско име.',
    'fos_user.username.short' => 'Потребителското име е прекалено късо.',
    'fos_user.username.long' => 'Потребителското име е прекалено дълго.',
    'fos_user.email.already_used' => 'E-mail адреса е зает.',
    'fos_user.email.blank' => 'Моля въведете E-mail адрес.',
    'fos_user.email.short' => 'E-mail адреса е прекалено къс.',
    'fos_user.email.long' => 'E-mail адреса е прекалено дълъг.',
    'fos_user.email.invalid' => 'E-mail адреса е невалиден.',
    'fos_user.password.blank' => 'Моля въведете парола.',
    'fos_user.password.short' => 'Паролата е прекалено къса.',
    'fos_user.new_password.blank' => 'Моля въведете нова парола.',
    'fos_user.new_password.short' => 'Новата парола е прекалено къса.',
    'fos_user.current_password.invalid' => 'Въведената парола е невалидна.',
    'fos_user.group.blank' => 'Моля въведете име.',
    'fos_user.group.short' => 'Името е прекалено късо.',
    'fos_user.group.long' => 'Името е прекалено дълго.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Грешка при автентикация.',
    'Authentication credentials could not be found.' => 'Удостоверението за автентикация не е открито.',
    'Authentication request could not be processed due to a system problem.' => 'Заявката за автентикация не може да бъде обработената поради системна грешка.',
    'Invalid credentials.' => 'Невалидно удостоверение за автентикация.',
    'Cookie has already been used by someone else.' => 'Това cookie вече се ползва от някой друг.',
    'Not privileged to request the resource.' => 'Нямате права за достъп до този ресурс.',
    'Invalid CSRF token.' => 'Невалиден CSRF токен.',
    'Digest nonce has expired.' => 'Digest nonce е изтекъл.',
    'No authentication provider found to support the authentication token.' => 'Не е открит провайдър, който да поддържа този токен за автентикация.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесията не е достъпна, или времето за достъп е изтекло, или кукитата не са разрешени.',
    'No token could be found.' => 'Токена не е открит.',
    'Username could not be found.' => 'Потребителското име не е открито.',
    'Account has expired.' => 'Акаунта е изтекъл.',
    'Credentials have expired.' => 'Удостоверението за автентикация е изтекло.',
    'Account is disabled.' => 'Акаунта е деактивиран.',
    'Account is locked.' => 'Акаунта е заключен.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Обнови група',
    'group.show.name' => 'Име на групата',
    'group.new.submit' => 'Нова група',
    'group.flash.updated' => 'Групата беше обновена успешно.',
    'group.flash.created' => 'Групата беше създадена успешно.',
    'group.flash.deleted' => 'Групата беше изтрита успешно.',
    'security.login.username' => 'Потребителско име',
    'security.login.password' => 'Парола',
    'security.login.remember_me' => 'Запомни ме',
    'security.login.submit' => 'Вход',
    'profile.show.username' => 'Потребителско име',
    'profile.show.email' => 'Имейл',
    'profile.edit.submit' => 'Промени',
    'profile.flash.updated' => 'Профилът беше успешно променен.',
    'change_password.submit' => 'Промени паролата',
    'change_password.flash.success' => 'Паролата беше успешно променена.',
    'registration.check_email' => 'Изпратихме писмо до %email%. То съдържа линк за активиране, който трябва да отворите, за да се активира профилът Ви.
',
    'registration.confirmed' => 'Честито, %username%, акаунтът е успешно активиран.',
    'registration.back' => 'Обратно към предишната страница.',
    'registration.submit' => 'Регистрация',
    'registration.flash.user_created' => 'Потребителят беше успешно създаден.',
    'registration.email.subject' => 'Добре дошли, %username%!',
    'registration.email.message' => 'Здравейте, %username%!

За да активирате своя профил, моля отворете %confirmationUrl%

Това е еднократен линк за валидиране на акаунта Ви. 

Поздрави,
от екипа.
',
    'resetting.check_email' => 'Изпратихме писмо с линк за активация на посочения имейл адрес: %email%.
Забележка: Заявка за нова парола може да направите в рамките на %tokenLifetime% час(а).

Ако не откривате писмото проверете в папка СПАМ или опитайте отново.
',
    'resetting.request.username' => 'Потребителско име или имейл',
    'resetting.request.submit' => 'Промени паролата',
    'resetting.reset.submit' => 'Промени паролата',
    'resetting.flash.success' => 'Паролата беше успешно променена.',
    'resetting.email.subject' => 'Забравена парола',
    'resetting.email.message' => 'Здравейте, %username%!

За да промените своята парола, моля отворете %confirmationUrl%

Поздрави,
от екипа.
',
    'layout.logout' => 'Изход',
    'layout.login' => 'Вход',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Влязъл като %username%',
    'form.group_name' => 'Име на група',
    'form.username' => 'Потребителско име',
    'form.email' => 'Имейл',
    'form.current_password' => 'Текуща парола',
    'form.password' => 'Парола',
    'form.password_confirmation' => 'Парола (отново)',
    'form.new_password' => 'Нова парола',
    'form.new_password_confirmation' => 'Нова парола (отново)',
  ),
));

$catalogueRu = new MessageCatalogue('ru', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значение должно быть ложным.',
    'This value should be true.' => 'Значение должно быть истинным.',
    'This value should be of type {{ type }}.' => 'Тип значения должен быть {{ type }}.',
    'This value should be blank.' => 'Значение должно быть пустым.',
    'The value you selected is not a valid choice.' => 'Выбранное Вами значение недопустимо.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы должны выбрать хотя бы {{ limit }} вариант.|Вы должны выбрать хотя бы {{ limit }} варианта.|Вы должны выбрать хотя бы {{ limit }} вариантов.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы должны выбрать не более чем {{ limit }} вариант.|Вы должны выбрать не более чем {{ limit }} варианта.|Вы должны выбрать не более чем {{ limit }} вариантов.',
    'One or more of the given values is invalid.' => 'Одно или несколько заданных значений недопустимо.',
    'This field was not expected.' => 'Это поле не ожидалось.',
    'This field is missing.' => 'Это поле отсутствует.',
    'This value is not a valid date.' => 'Значение не является правильной датой.',
    'This value is not a valid datetime.' => 'Значение даты и времени недопустимо.',
    'This value is not a valid email address.' => 'Значение адреса электронной почты недопустимо.',
    'The file could not be found.' => 'Файл не может быть найден.',
    'The file is not readable.' => 'Файл не может быть прочитан.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой ({{ size }} {{ suffix }}). Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файла недопустим ({{ type }}). Допустимы MIME-типы файлов {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значение должно быть {{ limit }} или меньше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значение слишком длинное. Должно быть равно {{ limit }} символу или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.',
    'This value should be {{ limit }} or more.' => 'Значение должно быть {{ limit }} или больше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значение слишком короткое. Должно быть равно {{ limit }} символу или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.',
    'This value should not be blank.' => 'Значение не должно быть пустым.',
    'This value should not be null.' => 'Значение не должно быть null.',
    'This value should be null.' => 'Значение должно быть null.',
    'This value is not valid.' => 'Значение недопустимо.',
    'This value is not a valid time.' => 'Значение времени недопустимо.',
    'This value is not a valid URL.' => 'Значение не является допустимым URL.',
    'The two values should be equal.' => 'Оба значения должны быть одинаковыми.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой. Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл слишком большой.',
    'The file could not be uploaded.' => 'Файл не может быть загружен.',
    'This value should be a valid number.' => 'Значение должно быть числом.',
    'This value is not a valid country.' => 'Значение не является допустимой страной.',
    'This file is not a valid image.' => 'Файл не является допустимым форматом изображения.',
    'This is not a valid IP address.' => 'Значение не является допустимым IP адресом.',
    'This value is not a valid language.' => 'Значение не является допустимым языком.',
    'This value is not a valid locale.' => 'Значение не является допустимой локалью.',
    'This value is already used.' => 'Это значение уже используется.',
    'The size of the image could not be detected.' => 'Не удалось определить размер изображения.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина изображения слишком велика ({{ width }}px). Максимально допустимая ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина изображения слишком мала ({{ width }}px). Минимально допустимая ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Высота изображения слишком велика ({{ height }}px). Максимально допустимая высота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Высота изображения слишком мала ({{ height }}px). Минимально допустимая высота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значение должно быть текущим паролем пользователя.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значение должно быть равно {{ limit }} символу.|Значение должно быть равно {{ limit }} символам.|Значение должно быть равно {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл был загружен только частично.',
    'No file was uploaded.' => 'Файл не был загружен.',
    'No temporary folder was configured in php.ini.' => 'Не настроена временная директория в php.ini.',
    'Cannot write temporary file to disk.' => 'Невозможно записать временный файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Расширение PHP вызвало ошибку при загрузке.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Эта коллекция должна содержать {{ limit }} элемент или больше.|Эта коллекция должна содержать {{ limit }} элемента или больше.|Эта коллекция должна содержать {{ limit }} элементов или больше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Эта коллекция должна содержать {{ limit }} элемент или меньше.|Эта коллекция должна содержать {{ limit }} элемента или меньше.|Эта коллекция должна содержать {{ limit }} элементов или меньше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Эта коллекция должна содержать ровно {{ limit }} элемент.|Эта коллекция должна содержать ровно {{ limit }} элемента.|Эта коллекция должна содержать ровно {{ limit }} элементов.',
    'Invalid card number.' => 'Неверный номер карты.',
    'Unsupported card type or invalid card number.' => 'Неподдерживаемый тип или неверный номер карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Значение не является допустимым международным номером банковского счета (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значение имеет неверный формат ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значение имеет неверный формат ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значение не соответствует форматам ISBN-10 и ISBN-13.',
    'This value is not a valid ISSN.' => 'Значение не соответствует формату ISSN.',
    'This value is not a valid currency.' => 'Некорректный формат валюты.',
    'This value should be equal to {{ compared_value }}.' => 'Значение должно быть равно {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значение должно быть больше чем {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значение должно быть больше или равно {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значение должно быть меньше чем {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значение должно быть меньше или равно {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значение не должно быть равно {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение не должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Соотношение сторон изображения слишком велико ({{ ratio }}). Максимальное соотношение сторон {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Соотношение сторон изображения слишком мало ({{ ratio }}). Минимальное соотношение сторон {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображение квадратное ({{ width }}x{{ height }}px). Квадратные изображения не разрешены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображение в альбомной ориентации ({{ width }}x{{ height }}px). Изображения в альбомной ориентации не разрешены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображение в портретной ориентации ({{ width }}x{{ height }}px). Изображения в портретной ориентации не разрешены.',
    'An empty file is not allowed.' => 'Пустые файлы не разрешены.',
    'The host could not be resolved.' => 'Имя хоста не может быть разрешено.',
    'This value does not match the expected {{ charset }} charset.' => 'Значение не совпадает с ожидаемой {{ charset }} кодировкой.',
    'This form should not contain extra fields.' => 'Эта форма не должна содержать дополнительных полей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы.',
    'fos_user.username.already_used' => 'Логин уже используется.',
    'fos_user.username.blank' => 'Пожалуйста, укажите логин.',
    'fos_user.username.short' => 'Логин слишком короткий.',
    'fos_user.username.long' => 'Логин слишком длинный.',
    'fos_user.email.already_used' => 'Email уже используется.',
    'fos_user.email.blank' => 'Пожалуйста, укажите Ваш email.',
    'fos_user.email.short' => 'Email слишком короткий.',
    'fos_user.email.long' => 'Email слишком длинный.',
    'fos_user.email.invalid' => 'Email в неправильном формате.',
    'fos_user.password.blank' => 'Пожалуйста, укажите пароль.',
    'fos_user.password.short' => 'Пароль слишком короткий.',
    'fos_user.password.mismatch' => 'Введенные пароли не совпадают.',
    'fos_user.new_password.blank' => 'Пожалуйста, укажите новый пароль.',
    'fos_user.new_password.short' => 'Новый пароль слишком короткий.',
    'fos_user.current_password.invalid' => 'Вы неправильно ввели Ваш текущий пароль.',
    'fos_user.group.blank' => 'Пожалуйста, укажите название группы.',
    'fos_user.group.short' => 'Название группы слишком короткое.',
    'fos_user.group.long' => 'Название группы слишком длинное.',
    'fos_group.name.already_used' => 'Имя уже используется.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ошибка аутентификации.',
    'Authentication credentials could not be found.' => 'Аутентификационные данные не найдены.',
    'Authentication request could not be processed due to a system problem.' => 'Запрос аутентификации не может быть обработан в связи с проблемой в системе.',
    'Invalid credentials.' => 'Недействительные аутентификационные данные.',
    'Cookie has already been used by someone else.' => 'Cookie уже был использован кем-то другим.',
    'Not privileged to request the resource.' => 'Отсутствуют права на запрос этого ресурса.',
    'Invalid CSRF token.' => 'Недействительный токен CSRF.',
    'Digest nonce has expired.' => 'Время действия одноразового ключа дайджеста истекло.',
    'No authentication provider found to support the authentication token.' => 'Не найден провайдер аутентификации, поддерживающий токен аутентификации.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сессия не найдена, ее время истекло, либо cookies не включены.',
    'No token could be found.' => 'Токен не найден.',
    'Username could not be found.' => 'Имя пользователя не найдено.',
    'Account has expired.' => 'Время действия учетной записи истекло.',
    'Credentials have expired.' => 'Время действия аутентификационных данных истекло.',
    'Account is disabled.' => 'Учетная запись отключена.',
    'Account is locked.' => 'Учетная запись заблокирована.',
  ),
  'messages' => 
  array (
    'total.partners' => 'Партнеры',
    'total.name' => 'Название',
    'total.name_en' => 'Название (EN)',
    'total.admin_panel' => 'Админ панель',
    'total.question_about.services' => 'Вопросы о услугах',
    'total.question_about.dogs' => 'Вопросы о собаках',
    'total.subject' => 'Тема:',
    'total.photos' => 'Фотографии',
    'total.videos' => 'Видео',
    'total.log_in' => 'Вход',
    'total.questions' => 'Вопросы',
    'total.askquestion' => 'Задать вопрос',
    'total.add_photo' => 'Добавить фото',
    'total.add_video' => 'Добавить видео',
    'total.add_title' => 'Добавить титул',
    'total.add_vaccination' => 'Добавить прививку',
    'total.add_dog' => 'Добавить собаку',
    'total.main_info' => 'Главное',
    'total.action' => 'Действия',
    'total.show' => 'Подробнее',
    'total.edit' => 'Изменить',
    'total.create' => 'Создать',
    'total.delete' => 'Удалить',
    'total.back' => 'Назад',
    'total.comments' => 'Комментарии',
    'total.save' => 'Сохранить',
    'total.send' => 'Отправить',
    'total.date' => 'Дата',
    'total.mother' => 'Мать',
    'total.father' => 'Отец',
    'total.dogs' => 'Собаки',
    'total.reviews' => 'Отзывы:',
    'total.caption' => 'Заголовок',
    'total.news' => 'Новость',
    'total.type' => 'Категория',
    'total.exhibition' => 'Выставки',
    'total.advice' => 'Советы',
    'total.other' => 'Другое',
    'total.male' => 'Кобель',
    'total.female' => 'Сука',
    'total.forsale' => 'Ищу хозяина',
    'total.select_file' => 'Выберите файл',
    'total.uah' => 'грн.',
    'user.name' => 'Имя пользователя',
    'user.phone' => 'Телефон',
    'user.comment' => 'Комментарий',
    'user.email' => 'Email',
    'dogs.ourdogs' => 'Наши собаки',
    'dogs.title' => 'Титул',
    'dogs.title_en' => 'Титул (EN)',
    'dogs.vaccination' => 'Прививка',
    'dogs.vaccination_en' => 'Прививка (En)',
    'dogs.about.bdate' => 'Дата рождения',
    'dogs.about.name' => 'Имя',
    'dogs.about.nameen' => 'Имя (En)',
    'dogs.about.age' => '{0} %month% м.|]1,Inf[ %year% г.',
    'dogs.about.age_with_years' => '%year% г. %month% м.',
    'dogs.about.age_without_years' => '%month% м.',
    'dogs.about.soldout' => 'Продан',
    'dogs.about.forsale' => 'Ищу хозяина',
    'dogs.about.birthday' => 'Дата рождения',
    'dogs.about.titles' => 'Титулы',
    'dogs.about.vaccinations' => 'Прививки',
    'dogs.about.dogage' => 'Возвраст',
    'dogs.about.quality' => 'Качество',
    'dogs.about.sex' => 'Пол',
    'dogs.about.state' => 'Статус',
    'dogs.about.quality_Show' => 'Для выставок',
    'dogs.about.quality_Breed' => 'Для разведения',
    'dogs.about.quality_Pet' => 'Домашний питомец',
    'dogs.about.description' => 'Описание',
    'dogs.about.descriptionen' => 'Описание (En)',
    'dogs.about.photo' => 'Фото',
    'dogs.about.photoFile' => 'Фото',
    'dogs.about.litters' => 'Помет',
    'dogs.about.otherphotos' => 'Другие фото',
    'dogs.about.videos' => 'Видео',
    'dogs.about.dogsPhotos' => 'Другие фото',
    'dogs.about.dogTitles' => 'Титулы',
    'dogs.about.dogVaccinations' => 'Прививки',
    'nursery.list.about' => 'О питомнике',
    'nursery.list.name' => 'Питомник:',
    'nursery.list.photo' => 'Фотография',
    'nursery.list.bdate' => 'Дата основания',
    'nursery.list.owner' => 'Владелец:',
    'nursery.list.adress' => 'Адрес',
    'nursery.list.phone' => 'Телефон',
    'nursery.list.cellphone' => 'Мобильный телефон',
    'nursery.list.email' => 'E-mail',
    'nursery.list.site' => 'Сайт',
    'nursery.list.nursery' => 'Список питомников',
    'main.title' => 'Главная',
    'main.block.partners' => 'Наши друзья',
    'main.block.news' => 'Новости',
    'main.block.about_breed' => 'О породе',
    'main.dogs.take' => 'Заведи',
    'main.dogs.for_you' => 'себе',
    'main.dogs.tailed' => 'хвостатое',
    'main.dogs.zabava' => 'счастье',
    'main.about_breed.description' => 'Цвергшнауцер или карликовый шнауцер занимает почетное 7-е место в списке самых популярных собак во всем мире. Такая популярность объясняется отличной характеристикой и простотой содержания. Ведь цверга можно содержать даже в самой маленькой квартире. Это очень миниатюрная служебная порода с весом не более 7 кг.',
    'header.link.main' => 'Главная',
    'header.link.our_dogs' => 'Собаки',
    'header.link.litters' => 'Пометы',
    'header.link.advices' => 'Советы',
    'header.link.exhibitions' => 'Выставки',
    'header.link.services' => 'Услуги',
    'header.link.gallery' => 'Галерея',
    'header.link.reviews' => 'Отзывы',
    'header.link.login' => 'Вход',
    'header.link.logout' => 'Выход',
    'services.list.services' => 'Услуга',
    'services.list.description' => 'Описание',
    'services.list.price' => 'Цена',
    'reviews.text.comment_author' => '<strong>%name%</strong> написала:',
    'reviews.text.pay_attention' => 'Обратите внимание!',
    'reviews.text.comment_disclaimer' => '<p>Все комментарии проходят тщательную модерацию. К публикации не допускаются: </p><p> - комментарии рекламного характера </p><p> - комментарии содержащие оскорбления </p><p> - комментарии без указания контактных данных</p>',
    'reviews.nursery.conact_us_via' => 'Вы можете связаться со мной по',
    'reviews.nursery.conact_us_via_phones' => 'телефонам:',
    'reviews.nursery.conact_us_via_email' => 'эл. почте:',
    'reviews.label.name' => 'Ваше имя',
    'reviews.label.email' => 'Ваш e-mail',
    'reviews.label.comment' => 'Комментарий',
    'reviews.label.phone' => 'Телефон',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Обновить группу',
    'group.show.name' => 'Название группы',
    'group.new.submit' => 'Создать группу',
    'group.flash.updated' => 'Группа обновлена.',
    'group.flash.created' => 'Группа создана.',
    'group.flash.deleted' => 'Группа удалена.',
    'security.login.username' => 'Имя пользователя',
    'security.login.password' => 'Пароль',
    'security.login.remember_me' => 'Запомнить меня',
    'security.login.submit' => 'Войти',
    'profile.show.username' => 'Имя пользователя',
    'profile.show.email' => 'Электронная почта',
    'profile.edit.submit' => 'Обновить',
    'profile.flash.updated' => 'Профиль пользователя обновлен.',
    'change_password.submit' => 'Изменить пароль',
    'change_password.flash.success' => 'Пароль изменен.',
    'registration.check_email' => 'Письмо отправлено на адрес %email%. В нём содержится ссылка, по которой вы можете подтвердить свою регистрацию.',
    'registration.confirmed' => 'Поздравляем %username%, ваш аккаунт подтвержден.',
    'registration.back' => 'Вернуться на предыдущую страницу.',
    'registration.submit' => 'Зарегистрироваться',
    'registration.flash.user_created' => 'Пользователь успешно создан.',
    'registration.email.subject' => 'Добро пожаловать, %username%!',
    'registration.email.message' => 'Приветствуем, %username%!

Для подтверждения вашей регистрации, пройдите по ссылке %confirmationUrl%

Эта ссылка может быть использована только единожды для подтверждения вашей учетной записи.

С наилучшими пожеланиями,
команда сайта.
',
    'resetting.check_email' => 'Письмо отправлено. Оно содержит ссылку, при переходе по которой ваш пароль будет сброшен.
Заметьте, вы сможете запросить новый пароль только через %tokenLifetime% часов.

Если вы не получили письмо, проверьте папку Спам или попробуйте снова.
',
    'resetting.request.username' => 'Имя пользователя или электронная почта',
    'resetting.request.submit' => 'Сбросить пароль',
    'resetting.reset.submit' => 'Изменить пароль',
    'resetting.flash.success' => 'Пароль успешно сброшен.',
    'resetting.email.subject' => 'Сброс пароля',
    'resetting.email.message' => 'Приветствуем, %username%!

Для сброса пароля, пожалуйста, пройдите по ссылке %confirmationUrl%

С наилучшими пожеланиями,
команда сайта.
',
    'layout.logout' => 'Выход',
    'layout.login' => 'Вход',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Вы вошли как %username%',
    'form.group_name' => 'Название группы',
    'form.username' => 'Имя пользователя',
    'form.email' => 'Электронная почта',
    'form.current_password' => 'Текущий пароль',
    'form.password' => 'Пароль',
    'form.password_confirmation' => 'Подтвердите пароль',
    'form.new_password' => 'Новый пароль',
    'form.new_password_confirmation' => 'Подтвердите пароль',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Скачать',
    'form.label.delete' => 'Удалить?',
  ),
));
$catalogue->addFallbackCatalogue($catalogueRu);

return $catalogue;
