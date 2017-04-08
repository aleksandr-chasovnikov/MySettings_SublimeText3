Для начала краткий алгоритм действий (для тех кто в курсе, но не обладает феноменальной памятью):
1. Скачиваем (ссылка) 
2. Установка (Linux: sudo dpkg -i sublime-text_build.deb (имя файла может быть другим)).
	-> Галочка (да): "Add to explorer context menu".
3. Копируем код из (ссылка).
	-> Вставляем в View -> Show Console.
	-> Перегружаем редактор.
4. Ctrl+Shift+P -> Пишем "insta" -> Выбираем "Install Package"
5. Выбираем плагины (повторяем пункт 4):
	-> Emmet (в помощь верстальщикам). Тест плагина: ! -> Tab -> появится HTML-разметка
		-> Горячая клавиша на "reindent": Preferences -> Key Bindings-Default -> Ctrl+S (видим путь - создаем такой же файл)
		Windows:  { "key": ["alt+shift+f"], "command": "reindent"},
	-> AutoFileName (быстро прописывать пути)
	-> Gist (использование сниппетов на GitHub)
	-> Sass (предпроцессор)

Скачиваем сам Sublime Text 3 (жмём по ссылке) и начинаем установку.
Для Linux(Ubuntu): 
Вариант 1. В папке со скаченным файлом (через терминал) - 
sudo dpkg -i sublime-text_build.deb (имя файла может быть другим).
Вариант 2. Использовать следующие команды (скачивание и установка): 
sudo add-apt-repository ppa:webupd8team/sublime-text-3
sudo apt-get update && sudo apt-get install sublime-text-installer

В процессе установки ставим галочку на против пункта: "Add to explorer context menu
" (можно будет открывать файлы с помощью Sublime Text из контекстного меню проводника).
Добавляем поддержку плагинов Package Control https://packagecontrol.io/installation. На сайте копируем код на вкладке Sublime Text 3 и вставляем его в наш ST3 -> View -> Show Console -> Вставляем в строку. После установки перезагружаем Sublime.
Жмем Ctrl+Shift+P, набираем в появившейся строке

