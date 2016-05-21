<?php
	class Coffee {

		private $empty = false;

		public function __construct()
		{
		}

		public function isEmpty()
		{
			return $this->empty;
		}

		public function refill()
		{
			$this->empty = false;
		}

		public function drink()
		{
			$this->empty = true;
			return true;
		}

	}