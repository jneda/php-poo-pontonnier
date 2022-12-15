<?php

/**
 * Calculatrice peu performante
 */
class MyCalculator
{
  /**
   * nombre a
   *
   * @var float
   */
  private float $a;
  /**
   * nombre b
   *
   * @var float
   */
  private float $b;

  public function __construct(float $a, float $b)
  {
    $this->a = $a;
    $this->b = $b;
  }

  /**
   * addition des deux nombres
   *
   * @return float
   */
  public function add(): float
  {
    return $this->a + $this->b;
  }

  /**
   * multiplication des deux nombres
   *
   * @return float
   */
  public function multiply(): float
  {
    return $this->a * $this->b;
  }

  public function __toString()
  {
    return 'Calculette peu performante\n' .
      'Nombres disponibles : a = ' . $this->a .
      ' - b = ' . $this->b . '\n' .
      'Opérations disponibles : add - multiply';
  }
}