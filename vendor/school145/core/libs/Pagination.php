<?php

namespace school145\libs;

// Класс пагинации
class Pagination
{
    public $current_page; // текущаяя страница
    public $perpage; // количество записей на одной странице
    public $total; // общее количество записей
    public $count_pages; // общее количество страниц
    public $uri;
    public $links = [
        'back' => '',       // ссылка НАЗАД
        'forward' => '',    // ссылка ВПЕРЕД
        'startpage' => '',  // ссылка В НАЧАЛО
        'endpage' => '',    // ссылка В КОНЕЦ
        'page2left' => '',  // вторая страница слева
        'page1left' => '',  // первая страница слева
        'page2right' => '', // вторая страница справа
        'page1right' => '', // первая страница справа
    ];

    public function __construct($page, $perpage, $total)
    {
        $this->perpage = $perpage;
        $this->total = $total;
        $this->count_pages = $this->getCountPages();
        $this->current_page = $this->getCurrentPage($page);
        $this->uri = $this->getParams();
    }

    public function getHtml()
    {
        $back = null;       // ссылка НАЗАД
        $forward = null;    // ссылка ВПЕРЕД
        $startpage = null;  // ссылка В НАЧАЛО
        $endpage = null;    // ссылка В КОНЕЦ
        $page2left = null;  // вторая страница слева
        $page1left = null;  // первая страница слева
        $page2right = null; // вторая страница справа
        $page1right = null; // первая страница справа

        if($this->current_page > 1)
        {
            $back = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->current_page - 1) . "'>&lt;</a></li>";
        }
        if($this->current_page < $this->count_pages)
        {
            $forward = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->current_page + 1) . "'>&gt;</a></li>";
        }
        if($this->current_page > 3)
        {
            $startpage = "<li><a class='nav-link' href='{$this->uri}page=1'>&laquo;</a></li>";
        }
        if($this->current_page < ($this->count_pages - 2))
        {
            $endpage = "<li><a class='nav-link' href='{$this->uri}page={$this->count_pages}'>&raquo;</a></li>";
        }
        if($this->current_page - 2 > 0)
        {
            $page2left = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->current_page - 2) . "'>".($this->current_page - 2)."</a></li>";
        }
        if($this->current_page - 1 > 0)
        {
            $page1left = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->current_page - 1) . "'>".($this->current_page - 1)."</a></li>";
        }
        if($this->current_page + 1 <= $this->count_pages)
        {
            $page1right = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->current_page + 1) . "'>".($this->current_page + 1)."</a></li>";
        }
        if($this->current_page + 2 <= $this->count_pages)
        {
            $page2right = "<li><a class='nav-link' href='{$this->uri}page=" . ($this->current_page + 2) . "'>".($this->current_page + 2)."</a></li>";
        }

        return '<ul class="pagination">' . $startpage.$back.$page2left.$page1left.'<li class="active"><a>'.$this->current_page.'</a></li>'.$page1right.$page2right.$forward.$endpage . '</ul>';
    }

    public function __toString()
    {
        return $this->getHtml();
    }

    // Получение общего количества страниц
    public function getCountPages()
    {
        return ceil($this->total / $this->perpage) ?: 1;
    }

    // Получение текущей страницы
    public function getCurrentPage($page)
    {
        if(!$page || $page < 1) $page = 1;
        if($page > $this->count_pages) $page = $this->count_pages;
        return $page;
    }

    public function getStart()
    {
        return ($this->current_page - 1) * $this->perpage;
    }

    // Получение URI
    public function getParams()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $uri = $url[0] . '?';
        if(isset($url[1]) && $url != '')
        {
            $params = explode('&', $url[1]);
            foreach ($params as $param) {
                if(!preg_match("#page=#", $param))
                {
                    $uri .= "{$param}&amp;";
                }
            }
        }
        return urldecode($uri);
    }





}