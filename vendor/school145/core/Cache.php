<?php

namespace school145;

class Cache
{
    use TSingletone;

    // Установка кэша
    public function set($key, $data, $seconds=3600)
    {
        if($seconds)
        {
            $content['data'] = $data;
            $content['end_time'] = time() + $seconds;
            if(file_put_contents(CACHE . '/' . md5($key) . '.txt', serialize($content)))
            {
                return true;
            }
        }
        return false;
    }
    // Получение кэша
    public function get($key)
    {
        $file = CACHE . '/' . md5($key) . '.txt';
        if(file_exists($file))
        {
            $content = unserialize(file_get_contents($file));
            if(time() <= $content['end_time'])
            {
                return $content['data'];
            }
            unlink($file);
        }
        return false;
    }
    // Удаление кэша
    public function delete($key)
    {
        $file = CACHE . '/' . md5($key) . '.txt';
        if(file_exists($file))
        {
            unlink($file);
        }
    }
}



?>