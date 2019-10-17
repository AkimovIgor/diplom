<!doctype html>
<html>
<head>
    <base href="/">
    <?=$this->getMeta();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/zvonok.gif" type="image/x-icon">
    <link rel="stylesheet" href="styles/font.css">
    <link rel="stylesheet" href="styles/fontawesome-free-5.8.2-web/css/all.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div id="main">
        <form class="search-form clearfix aside search" action="search" method="GET" autocomplete="off">
            <input type="text" class="typeahead" placeholder="Поиск по сайту" name="s">
            <button style="border: 0;" type="submit" class="search-submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="sidebar">
            <div class="btn_box">
                <div class="sidebar_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <?php new \app\widgets\menu\Menu([
                'tpl' => WWW . '/menu/menu.php',
            ]);?>
        </div>
        <div class="container">
            <header>
                <div class="clearfix top">
                    <div class="logo cols col-2"><a href="<?=PATH;?>"><img src="images/gerb_dpr.png" alt=""></a></div>
                    <div class="cols col-10">
                        <div class="title">
                            <p class="top_title">Муниципальное общеобразовательное учреждение</p>
                            <p class="bottom_title">«Школа №145 г.Донецка»</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="nav-sticky">
                <nav class="clearfix">
                    <div class="nav-block clearfix">
                        <div class="cols col-9">
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/menu.php',
                            ]);?>
                        </div>
                        <div class="cols col-3">
                            <form class="search-form clearfix" action="search" method="GET" autocomplete="off">
                                <input type="text" class="typeahead" id="typeahead" placeholder="Поиск по сайту" name="s">
                                <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            
            
            <div class="content clearfix">
                <section>
                    <div class="clearfix">
                        
                        <?= $content; ?>
                        <div class="cols col-4">
                            <div class="post-box aside hide search">
                                <form class="search-form clearfix" action="search" method="GET" autocomplete="off">
                                    <input type="text" class="typeahead" placeholder="Поиск по сайту" name="s">
                                    <button style="border: 0;" type="submit" class="search-submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="post-box aside">
                                <h3 class="aside-title">Адрес и контакты</h3>
                                <p class="aside-content">г. Донецк, Будённовский р-н, ул. Минская, д. 6</p>
                                <p class="aside-content"><b>Тел./факс:</b> <a href="tel:0623405260">(062) 340-52-60</a> </p>
                                <p class="aside-content"><b>E-mail:</b> <a href="mailto:znz-145@mail.ru">znz-145@mail.ru</a></p>
                                <p class="aside-content">Информация, вопросы, жалобы и предложения, касающиеся работы сайта, принимаются на</p>
                                <p class="aside-content last"><b>E-mail:</b> <a href="mailto:admin@dnrschool-145.ru">admin@dnrschool-145.ru</a></p>
                            </div>
                            <div class="post-box aside">
                                <h3 class="aside-title">Горячая линия</h3>
                                <p class="text-center"><img src="/images/liniya.jpg" alt="горячая линия" width="50%"></p>
                                <p>
                                    С целью оперативного решения вопросов, возникающих у участников 
                                    образовательных отношений, получения информации о деятельности 
                                    муниципальных образовательных учреждений города Донецка, возможных 
                                    нарушений прав участников образовательных отношений, управлением 
                                    образования администрации города Донецка открыт <b>телефон горячей 
                                    линии 071-373-63-70.</b> Звонки принимаются в рабочие дни с 8.00 до 
                                    17.00, в пятницу - с 8.00 до 16.00
                                </p>
                                <a class="phone" href="tel:0713736370">071-373-63-70</a>
                            </div>
                            <div class="post-box aside inp">
                                <?php if(empty($_SESSION['user'])): ?>
                                    <!-- <h3 class="aside-title">Вход</h3>
                                    <label>Логин: </label><input class="registr" type="text" name="login" maxlength="30">
                                    <label>Пароль: </label><input class="registr" type="password" name="password" maxlength="60">
                                    <label>Email: </label><input class="registr" type="email" name="email" maxlength="100">
                                    <label><input class="know" type="checkbox"> Запомнить меня</label>
                                    <input class="enter" type="submit" value="Войти">
                                    <div><a href="#">Забыли пароль?</a></div>
                                    <div><a href="user/signup">Регистрация</a></div> -->
                                    <h3 class="aside-title">Авторизация</h3>
                                    <ul class="user-acc text-center">
                                        <a href="user/signup">Регистрация</a> / 
                                        <a href="user/login">Вход</a>
                                    </ul>
                                <?php else: ?>
                                <h3 class="aside-title">Профиль</h3>
                                    <ul class="user-acc text-center">
                                        <a href="user/manage"><?=hsc($_SESSION['user']['name']);?></a> / 
                                        <a href="user/logout">Выход</a>
                                    </ul>
                                <?php endif; ?>
                                
                            </div>
                            <div class="post-box aside clearfix">
                                <h3 class="aside-title">Календарь</h3>
                                <div>
                                    <div class="calendar-box">
                                        <table class="calendar" border="0" cellspacing="0" cellpadding="1">
                                            <thead>
                                                <tr>
                                                    <td><b>‹</b></td>
                                                    <td colspan="5"></td>
                                                    <td><b>›</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Пн</td>
                                                    <td>Вт</td>
                                                    <td>Ср</td>
                                                    <td>Чт</td>
                                                    <td>Пт</td>
                                                    <td>Сб</td>
                                                    <td>Вс</td>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="post-box aside">
                                <h3 class="aside-title">Порядок приема в 1-й класс</h3>
                                <a class="doc" href="/menu/admission"><img src="images/priem.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer>
            <div class="footer-content clearfix">
                <div class="cols col-12">
                    <p>Муниципальное общеобразовательное учреждение "Школа № 145 города Донецка" &copy; <?= date('Y');?>.</p>
                    <p>Все права защищены. Разработчик: <a href="#">Акимов И.С.</a></p>
                    <p><a href="#">Политика конфиденциальности</a></p>
                </div>
            </div>
        </footer>
        <!-- MODAL WINDOW -->
        <div id="myModal" class="modal">
            
            <div class="modal-content clearfix">
                <span class="close">×</span>
                <div class="modal-header">
                    
                </div>
                <div class="modal-body">
                    <img id="modal-img" src="" alt="">
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
            
        </div>
        <script>
            var path = '<?=PATH;?>';
        </script>
        <script src="js/jquery-3.4.0.min.js"></script>
        <script src="js/typeahead.bundle.js"></script>
        <script src="js/main.js"></script>
        <script src="js/calendar.js"></script>
        <script>
            var modal = $('.modal');
            var img = $('#modal-img');

            $('.img-link').on('click', function(e){
                e.preventDefault();
                img.attr('src', $(this).attr('data-img'));
                modal.css('display', 'block');
                
            });
            $('.close').on('click', function(){
                modal.css('display', 'none');
            });

            // $('a').on('click', function(e){
            //     e.preventDefault();
            // });
        </script>
    </div>
    <span class="totop"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
</body>
</html>