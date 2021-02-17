<?php
	class BluRay extends Medium {
		public function __construct() {
			parent::__construct(
				'Blu Ray',
				4.7,
				/* edit 20201124 */
					'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Blu-ray_disc2.png/200px-Blu-ray_disc2.png',
				/* ------------- */
				'https://nl.wikipedia.org/wiki/Blu-ray',
				false,
				true,
				'25 GB'
			);
		}
	}
?>