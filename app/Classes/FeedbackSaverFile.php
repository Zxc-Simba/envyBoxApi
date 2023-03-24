<?php

namespace App\Classes;

class FeedbackSaverFile implements \App\Interfaces\FeedbackSaverInterface
{
    /**
     * Выполнить сохранение в файл
     *
     * @param $data
     * @return Void
     */
    public function save($data): Void
    {
        $filePath = 'feedback.txt';
        $data = serialize($data);
        file_put_contents($filePath, $data . "\n", FILE_APPEND);
    }
}
