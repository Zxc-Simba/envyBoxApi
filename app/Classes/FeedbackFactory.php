<?php

namespace App\Classes;

use App\Interfaces\FeedbackSaverInterface;

abstract class FeedbackFactory
{
    /**
     * Фабричный метод
     *
     * @return FeedbackSaverInterface
     */
    abstract public function getFeedbackSaver(): FeedbackSaverInterface;

    /**
     * Выполнить сохранение.
     *
     * @param $data
     * @return void
     */
    public function create($data): Void
    {
        $saver = $this->getFeedbackSaver();
        $saver->save($data);
    }
}
