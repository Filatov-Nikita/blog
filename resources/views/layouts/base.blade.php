<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
        <link href="{{url('css/styles.css')}}" rel="stylesheet">

    </head>
    <body>
        <div id = "wrapper">
            <header>
                @section('header')

                <div class="wrapper">
                    <a href=""><div class="logo"></div></a>
                    <div class="slogan">
                        <div class="title"><span class = "redWord">a</span>ntonov <span class = "redWord">n</span>ikita</div>
                        <div class="subtitle">Интересный блог о дизайне</div>
                    </div>
                    <div class="phone">8 800 800 80 80</div>
                </div>		


                @show 
            </header>
            <nav>
                @section('nav')

                <div class="wrapper">
                    <div class="menu_toggle">Меню</div>
                    <ul>
                        <li><a href="">Главная</a></li>
                        <li><a href="about.php">Об авторе</a></li>
                        <li><a href="map.php">Карта сайта</a></li>
                        <li><a href="#">Реклама</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>		
                </div>

                @show
            </nav>
            <section class="content">
                <div class="wrapper">
                    @section('sidebar')
                    <aside class="left"> 

                        <div class="col">

                            <span class="h3"><a href="index.php" style="text-decoration:underline; color:#d02828;">Новости</a></span>
                            <ul id="nav">		
                                <li><a href="addnews.php">Добавить</a></li>
                                <li><a href="edit1news.php">Редактировать</a></li>
                                <li><a href="deletenews.php">Удалить</a></li>

                            </ul>
                        </div>
                        <div class="col">
                            <a href="articles.php" style="text-decoration:none;color:#d02828;"><span class="h3">Статьи</span></a>
                            <ul id="nav">
                                <li><a href="add.php">Добавить</a></li>
                                <li><a href="edit1.php">Редактировать</a></li>
                                <li><a href="delete.php">Удалить</a></li>

                            </ul>
                        </div>
                    </aside>
                    @show

                    <main>
                        <hr> 
                        @section('content')
                        @yield('content', 'I`m content!')
                        @show
                        <hr>
                    </main>
                </div>
            </section>

            <footer>
                @include('block.footer')
            </footer>
        </div>
    </body>
</html>
