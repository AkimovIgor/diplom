<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?=$category['title'];?></li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <h1 class="text-center large-size-text mb-40 upper"><?=$category['title'];?></h1>
        <div class="text-center"><img style="width: 11%;" title="Расписание звонков" src="/images/zvonok.gif" alt="Zvonok"></div>
        <br>
        <div style="overflow-x: auto;">
            <table class="docs-table" cellspacing="0">
                <thead>
                    <tr>
                        <th>Урок</th>
                        <th>Начало</th>
                        <th>Окончание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 урок</td>
                        <td>08:00</td>
                        <td>08:45</td>
                    </tr>
                    <tr class="tbl-row">
                        <td colspan="3">Перемена 10 минут</td>
                    </tr>
                    <tr>
                        <td>2 урок</td>
                        <td>08:55</td>
                        <td>09:40</td>
                    </tr>
                    <tr class="tbl-row">
                        <td colspan="3">Перемена 20 минут</td>
                    </tr>
                    <tr>
                        <td>3 урок</td>
                        <td>10:00</td>
                        <td>10:45</td>
                    </tr>
                    <tr class="tbl-row">
                        <td colspan="3">Перемена 20 минут</td>
                    </tr>
                    <tr>
                        <td>4 урок</td>
                        <td>11:05</td>
                        <td>11:50</td>
                    </tr>
                    <tr class="tbl-row">
                        <td colspan="3">Перемена 10 минут</td>
                    </tr>
                    <tr>
                        <td>5 урок</td>
                        <td>12:00</td>
                        <td>12:45</td>
                    </tr>
                    <tr class="tbl-row">
                        <td colspan="3">Перемена 10 минут</td>
                    </tr>
                    <tr>
                        <td>6 урок</td>
                        <td>12:55</td>
                        <td>13:40</td>
                    </tr>
                    <tr class="tbl-row">
                        <td colspan="3">Перемена 10 минут</td>
                    </tr>
                    <tr>
                        <td>7 урок</td>
                        <td>13:50</td>
                        <td>14:35</td>
                    </tr>
                    <tr class="tbl-row">
                        <td colspan="3">Перемена 10 минут</td>
                    </tr>
                    <tr>
                        <td>8 урок</td>
                        <td>14:45</td>
                        <td>15:30</td>
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
        width: 60%;
        margin: 0 auto;
        border: 1px solid #222;
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
        padding: 0.7em;
        width: 33.33%;
        border: 1px solid #ccc;
        border-collapse: collapse;
    }
    .tbl-row{
        background: #ccc;
        text-align: center;
        color: #000;
    }
</style>