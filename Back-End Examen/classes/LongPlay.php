<?php
	class LongPlay extends Medium {
		public function __construct() {
			parent::__construct(
				'LP',
				12,
				/* edit 20201124 */
					'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Columbia7inch_001.jpg/260px-Columbia7inch_001.jpg',
				/* ------------- */
				'https://nl.wikipedia.org/wiki/Langspeelplaat',
				true,
				false,
				'30 minuten'
			);
		}
	}
?>