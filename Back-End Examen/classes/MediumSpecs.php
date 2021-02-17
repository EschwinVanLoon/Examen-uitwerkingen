<?php
	interface MediumSpecs {
		public function getName() : string;
		public function getDiameter() : float;
		public function getImage() : string;
		/* edit 20201124 */
			public function getWikipedia() : string;
		/* ------------- */
		public function isAnalog() : bool;
		public function isDigital()	: bool;
		public function getCapacity() : string;
		public function presentSpecs() : string ;
	}
?>