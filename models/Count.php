<?php

namespace app\models;

/**
 * Class Count
 * @package app\models
 *
 * @property string $startInterval
 * @property string $endInterval
 */
class Count
{
    /**
     * @var string
     */
    public $startInterval;

    /**
     * @var string
     */
    public $endInterval;

    public function __construct($startInterval, $endInterval)
    {
        $this->startInterval = $startInterval;
        $this->endInterval = $endInterval;
    }

    public function LuckyTickets()
    {
        $result = 0;

        for ($i = $this->startInterval; $i <= $this->endInterval; $i++) {

            $i = str_pad($i, 6, "0", STR_PAD_LEFT);

            $half = array_chunk(str_split($i), 3);

            if (array_sum($half[0]) == array_sum($half[1])) {

                $result++;
            }
        }

        return $result ? $result : false;
    }
}
