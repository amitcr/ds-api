<?php
namespace App\Core;

class CronExpression
{
    protected $expression;

    public function __construct($expression)
    {
        $this->expression = $expression;
    }

    public function isDue(\DateTime $date)
    {
        $parts = explode(' ', $this->expression);
        if (count($parts) !== 5) return false;

        [$min, $hour, $day, $month, $week] = $parts;

        return $this->match($date->format('i'), $min)
            && $this->match($date->format('G'), $hour)
            && $this->match($date->format('j'), $day)
            && $this->match($date->format('n'), $month)
            && $this->match($date->format('w'), $week);
    }

    protected function match($value, $expr)
    {
        if ($expr === '*') return true;
        if (strpos($expr, '*/') === 0) {
            $step = (int)substr($expr, 2);
            return $value % $step === 0;
        }
        return (int)$value === (int)$expr;
    }
}
