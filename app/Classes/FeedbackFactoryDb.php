<?php

namespace App\Classes;

use App\Interfaces\FeedbackSaverInterface;

class FeedbackFactoryDb extends FeedbackFactory
{
    /**
     * Фабричный метод
     *
     * @return FeedbackSaverInterface
     */
    public function getFeedbackSaver(): FeedbackSaverInterface
    {
        return new FeedbackSaverDb();
    }

}
