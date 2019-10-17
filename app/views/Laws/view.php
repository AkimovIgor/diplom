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
                        <th>Название</th>
                        <th>Дата принятия</th>
                        <th>Номер постановления Совета Министров</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/docs/obr_1.pdf" target="_blank">Об образовании</a></td>
                        <td>19.06.2015</td>
                        <td>I-233П-НС</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/obr_2.pdf" target="_blank">Об обращениях граждан</a></td>
                        <td>20.02.2015</td>
                        <td>13-IHC</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/obr_3.pdf" target="_blank">О пожарной безопасности</a></td>
                        <td>30.09.2016</td>
                        <td>151-IHC</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/obr_4.pdf" target="_blank">О противодействии терроризму</a></td>
                        <td>15.05.2015</td>
                        <td>46-IHC</td>
                    </tr>
                    <tr>
                        <td><a href="/docs/obr_5.pdf" target="_blank">О противодействии экстремистской деятельности</a></td>
                        <td>29.05.2015</td>
                        <td>51-IHC</td>
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
        background: #777;
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