<?php

namespace Hedronium\Kromo\Algo;

Class CombSort
{

	protected $input;

	public function sort($input, callable $comparator = null)
	{

		$length = count($input);
		$this->input = $input;

			if (!is_callable($comparator)) {

				$comparator = function (&$a, &$b) {
					 
					 if ($a == $b) {
					    return 0;
					  }

					  return $a < $b ? 1 : -1;
					};
			 }

		$gap = (int)($length / 1.3);
			
			while ( $gap > 1 ) {

					for ($i = 0; ($i + $gap) < $length; $i++ ) {

							if ($this->input[$i] > $this->input[$i+$gap]) {

									$temp = $this->input[$i];
									$this->input[$i] = $this->input[$i+$gap];
									$this->input[$i+$gap] = $temp;
							}

					}

				$gap = (int)($gap / 1.3);

			}

			return $this->input;

	}

}