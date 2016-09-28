<?php

namespace Dbb;

class RiddleGenerator
{
    /**
     * @var array
     */
    protected $alphabet = [];

    /**
     * @var array
     */
    protected $shuffledIndices = [];

    public function __construct()
    {
        $this->setAlphabet(range('A', 'Z'));
    }

    public function run()
    {
        phpinfo();
    }

    /**
     * @param array $alphabet
     * @return $this
     */
    public function setAlphabet(array $alphabet)
    {
        $this->alphabet = $alphabet;
        $this->shuffleIndices();
        return $this;
    }

    protected function shuffleIndices()
    {
        $this->shuffledIndices = range(1, count($this->alphabet));
    }
}
