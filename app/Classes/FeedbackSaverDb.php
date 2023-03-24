<?php

namespace App\Classes;

use App\Models\Feedback;

class FeedbackSaverDb implements \App\Interfaces\FeedbackSaverInterface
{
    /**
     * Выполнить сохранение в базу данных
     *
     * @param $data
     * @return Void
     */
    public function save($data): Void
    {
        Feedback::create($data);
    }
}
