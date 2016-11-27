<?php

namespace Strategy;

class Hand
{
    const GUU = 0;
    const CHO = 1;
    const PAA = 2;

    const WIN = 1;
    const LOOSE = -1;
    const EVEN = 0;

    /**
     * @var string[]
     */
    private $name = [self::GUU => 'Guu', self::CHO => 'Choki', self::PAA => 'Paa'];

    /**
     * @var Hand[]
     */
    public static $hand;

    /**
     * @var int
     */
    private $handValue;

    /**
     * Hand constructor.
     * @param int $handValue
     */
    private function __construct($handValue)
    {
        $this->handValue = self::validateHandValue($handValue);
    }

    /**
     * @param mixed $handValue
     * @return int
     */
    private static function validateHandValue($handValue)
    {
        if (!in_array($handValue, [self::GUU, self::CHO, self::PAA], true)) {
            throw new \InvalidArgumentException('Invalid hand value');
        }

        return $handValue;
    }

    /**
     * @param int $handValue
     * @return self
     */
    public static function getHand($handValue)
    {
        $handValue = self::validateHandValue($handValue);

        if (null === self::$hand) {
            self::$hand = [
                self::GUU => new self(self::GUU),
                self::CHO => new self(self::CHO),
                self::PAA => new self(self::PAA),
            ];
        }

        if (isset(self::$hand[$handValue])) {
            return self::$hand[$handValue];
        } else {
            throw new \InvalidArgumentException('Unknown hand value');
        }
    }

    /**
     * @param Hand $hand
     * @return bool
     */
    public function isStrongerThan(Hand $hand)
    {
        return self::WIN === $this->fight($hand);
    }

    /**
     * @param Hand $hand
     * @return bool
     */
    public function isWeakerThan(Hand $hand)
    {
        return self::LOOSE === $this->fight($hand);
    }

    /**
     * @param Hand $hand
     * @return int
     */
    private function fight(Hand $hand)
    {
        if ($this->handValue === $hand->handValue) {
            return self::EVEN;
        } elseif (($this->handValue + 1) % 3 == $hand->handValue) {
            return self::WIN;
        } else {
            return self::LOOSE;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (isset($this->name[$this->handValue])) {
            return $this->name[$this->handValue];
        } else {
            return '';
        }
    }
}