<?php

namespace Hedronium\Kromo\Algo;

Class SelectionSort {


	protected $input;

	public function sort($input , callable $comparator = null) {

		$this->input = $input;
		$output 	 = [];
		$max    	 = 2147483647;
		$length 	 = count($this->input) - 1;

		if (!is_callable($comparator)) {

			$comparator = function ($a , $b){
				return $b - $a;
			};
		}

		for ($i = 0; $i <= $length; $i++) {
			
			$temp = $this->input[0];

			for ( $j = 0; $j <= $length; $j++ ) {

				if ($temp >= $this->input[$j]) {

					$temp = $this->input[$j];
					$place = $j;

				}

			}

			$output[] = $this->input[$place];
			$this->input[$place] = $max;

		}

		return $this->input = $output;

	}

}