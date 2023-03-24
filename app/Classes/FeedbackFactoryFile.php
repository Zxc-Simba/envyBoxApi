<?php

namespace App\Classes;

use App\Interfaces\FeedbackSaverInterface;

class FeedbackFactoryFile extends FeedbackFactory
{
    /**
     * Фабричный метод
     *
     * @return FeedbackSaverInterface
     */
    public function getFeedbackSaver(): FeedbackSaverInterface
    {
        return new FeedbackSaverFile();
    }
}
