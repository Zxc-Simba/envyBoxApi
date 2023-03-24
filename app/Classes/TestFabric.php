<?php

namespace App\Classes;

use App\Classes\FeedbackFactory;

class TestFabric
{
    /**
     * Вызывает метод create на переданную фабрику.
     *
     * @param \App\Classes\FeedbackFactory $factory
     * @param $data
     * @return void
     */
    public function test(FeedbackFactory $factory, $data): Void
    {
        $factory->create($data);
    }

    /**
     * Вызвать созранение в бд и в файл
     *
     * @param $data
     * @return void
     */
    public function doTest($data): Void
    {
        $this->test(new FeedbackFactoryDb(), $data);
        $this->test(new FeedbackFactoryFile(), $data);
    }
}
