<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?=$category['title'];?></li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <h1 class="text-center large-size-text mb-40 upper"><?=$category['title'];?></h1>
        <br>
        <p class="text-center"><b>Программы для общеобразовательных организаций.</b></p>
        <br>
        <p class="text-center"><b>Более подробную информацию по Программам можно получить, нажав соответствующую надпись.</b></p>
        <br>
        <div style="overflow-x: auto;">
            <table class="docs-table" cellspacing="0">
                <tbody>
                    <tr>
                        <td>
                            <h3>Математика</h3>
                            <p>1-4 классы</p>
                            <p>Программа для общеобразовательных организаций</p>
                        </td>
                        <td>
                            <p><a class="tbl-btn" href="/docs/PR_1-4-MATEMATIKA.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Скачать программу</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Русский язык</h3>
                            <p>1-4 классы</p>
                            <p>Программа для общеобразовательных организаций (2017)</p>
                        </td>
                        <td>
                            <p><a class="tbl-btn" href="/docs/MAKET_pr_1-4_rus-yaz_2017.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Скачать программу</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Английский язык</h3>
                            <p>1-4 классы</p>
                            <p>Программа для общеобразовательных организаций с углубленным изучением иностранных языков (2017)</p>
                        </td>
                        <td>
                            <p><a class="tbl-btn" href="/docs/Maket_PR_1-4_angl_ugl_2017.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Скачать программу</a></p>
                        </td>
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
        border: 1px solid #000;
        border-collapse: collapse;
    }
    .docs-table tr{
        text-align: center;
    }
    a.tbl-btn{
        color: #fff;
        padding: 0.3em 1em;
        background: #23b3ec;
        position: relative;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 0 3px 0 #0c78a2;
    }
    a.tbl-btn:hover{
        top: 3px;
        box-shadow: none;
    }
    .docs-table th, .docs-table td{
        padding: 1em 1em;
        border: 1px solid #000;
        border-collapse: collapse;
    }
    .docs-table tr td:first-child{
        text-align: left;
    }
</style>