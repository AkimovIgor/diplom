<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?=$category['title'];?></li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <h1 class="text-center large-size-text mb-40 upper"><?=$category['title'];?></h1>
        <div style="overflow-x: auto;">
            <table class="docs-table" cellspacing="0">
                <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Дата приказа</th>
                        <th>Номер приказа</th>
                        <th>Дата регистрации в минюсте</th>
                        <th>Номер регистрации в минюсте</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/docs/prikaz_1.pdf" target="_blank">Об утверждении Типового положения об общеобразовательном учреждении Министерства образования и науки Донецкой Народной Республики”</a></td>
                        <td>25.03.2015</td>
                        <td>86</td>
                        <td>16.04.2015</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/prikaz_2.pdf" target="_blank">Об утверждении Порядка организации питания детей в организациях, осуществляющих образовательную деятельность, оздоровление и отдых в Донецкой Народной Республике</a></td>
                        <td>07.12.2017</td>
                        <td>1335/2203</td>
                        <td>08.12.2017</td>
                        <td>2380</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/prikaz_3.pdf" target="_blank">Об утверждении Порядка приема граждан на обучение по образовательным программам начального общего, основного общего и среднего общего образования”</a></td>
                        <td>17.07.2015</td>
                        <td>323</td>
                        <td>14.08.2015</td>
                        <td>364</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/prikaz_4.pdf" target="_blank">Об утверждении Государственного образовательного стандарта начального общего образования</a></td>
                        <td>25.07.2018</td>
                        <td>665</td>
                        <td>03.08.2018</td>
                        <td>2721</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/prikaz_5.pdf" target="_blank">Об утверждении Государственного образовательного стандарта основного общего образования</a></td>
                        <td>30.07.2018</td>
                        <td>678</td>
                        <td>03.08.2018</td>
                        <td>2722</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/prikaz_6.pdf" target="_blank">Об утверждении Государственного образовательного стандарта среднего общего образования</a></td>
                        <td>30.07.2018</td>
                        <td>678</td>
                        <td>03.08.2018</td>
                        <td>2723</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/prikaz_7.pdf" target="_blank">Об утверждении Инструкции о проведении текущего контроля знаний и промежуточной аттестации обучающихся в образовательных организациях, реализующих общеобразовательные учебные программы начального общего, основного общего, среднего общего образования.</a></td>
                        <td>03.08.2015</td>
                        <td>358</td>
                        <td>18.08.2015</td>
                        <td>379</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/prikaz_8.pdf" target="_blank">Об утверждении Правил приема граждан на обучение по образовательным программам начального общего, основного общего и среднего общего образования</a></td>
                        <td>21.07.2015</td>
                        <td>333</td>
                        <td>14.08.2015</td>
                        <td>365</td>
                    </tr>
                </tbody>
                
                
            </table>
        </div>
    </div>
</div>
<style>
    .cols.col-4{
        display: none !important;
    }
    .docs-table{
        width: 100%;
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    .docs-table thead{
        background: #1182af;
        color: #fff;
    }
    .docs-table tr{
        text-align: center;
    }
    .docs-table th, .docs-table td{
        padding: 1em;
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    .docs-table tr td:first-child{
        text-align: left;
    }
</style>