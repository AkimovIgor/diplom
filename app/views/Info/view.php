<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?=$category['title'];?></li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <h1 class="text-center large-size-text mb-40 upper">Наша школа</h1>
        <div class="text-center"><img title="Наша школа" src="<?=$info['img'];?>" alt="Наша школа"></div>
        <br>
        <p><b class="underline">Информация о школе:</b></p> 
        <br>
        <p>Адрес: ДНР, г. Донецк, Будённовский район, ул. Минская , д.6</p>
        <p>Телефон: <a href="tel:+380623405260"><?=$info['tel'];?></a></p>
        <p>E-mail: <a href="mailto:znz-145@mail.ru"><?=$info['f_email'];?></a></p>
        <p>Сайт: <a href="<?=$info['site'];?>"><?=$info['site'];?></a></p>
        <br>
        <p>Информация, вопросы, жалобы и предложения, касающиеся работы сайта, принимаются на E-mail <a href="mailto:admin@dnrschool-145.ru"><?=$info['s_email'];?></a></p>
        <br>
        <p><b class="underline">График работы школы:</b></p>
        <br>
        <p>8:00 – 17:00, обучение в школе проводится в 1 смену.</p>
        <br>
        <p><b class="underline">Органы управления образовательной организации:</b></p>
        <br>
        <p>
            <ul>
                <li>Министерство образования и науки Донецкой Народной Республики</li>
                <li>Управление образования администрации г. Донецка</li>
                <li>Отдел образования администрации Будённовского района г. Донецка</li>
            </ul>
        </p>
        <br>
        <p><b class="underline">Учредителем школы является:</b></p>
        <br>
        <p>
            <ul>
                <li>администрация города Донецка в лице Управления образования администрации г. Донецка</li>
            </ul>
        </p>
        <br>
        <p><b class="underline">Язык образования:</b></p>
        <br>
        <p>Государственный русский язык с изучением украинского и английского языка.</p>
        <br>
        <p><b class="underline">Формы обучения:</b></p>
        <br>
        <p>
            <ul>
                <li>дневная форма</li>
                <li>индивидуальная форма</li>
            </ul>
        </p>
        <br>
        <p><b class="underline">Нормативные сроки обучения:</b></p>
        <br>
        <p>
            <ul>
                <li>начальное общее образование – 1 – 4 классы, нормативный срок освоения – 4 года;</li>
                <li>основное общее образование – 5 – 9 классы, нормативный срок освоения – 5 лет;</li>
                <li>среднее общее образование – 10 – 11 классы нормативный срок освоения – 2 года.</li>
            </ul>
        </p>
        <br>
        <p><b class="underline">Численность обучающихся:</b></p>
        <br>
        <p>По состоянию на 01.09.2018 г.:</p>
        <p>количество учеников: <?=$info['count1'];?>.</p>
        <br>
        <p>По состоянию на 01.12.2018 – <?=$info['count2'];?> учеников.</p>
        <br>
        <p>По состоянию на 01.05.2019 – <?=$info['count3'];?> учеников.</p>
        <br>
        <p>Количество классов: <?=$info['classes'];?>. Параллельных классов нет.</p>
        <br>
        <p><b class="underline">Информация о предоставлении дополнительных платных образовательных услуг:</b></p>
        <br>
        <p>Дополнительные платные образовательные услуги не предоставляются.</p>
        <br>
        <p><b class="underline">Информация о наличии интерната:</b></p>
        <br>
        <p>Интернат, жилые помещения для иногородних обучающихся при школе отсутствуют.</p>
        <br>
        <p><b class="underline">Как к нам добраться:</b></p>
        <br>
        <div><?=$info['map'];?></div>
    </div>
</div>