<?php
	class CassetteTape extends Medium {
		public function __construct() {
			parent::__construct(
				'Muziekcassette',
				5.1,
				/* edit 20201124 */
					'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Compactcassette.jpg/220px-Compactcassette.jpg',
				/* ------------- */
				'https://nl.wikipedia.org/wiki/Muziekcassette',
				true,
				false,
				'60 minuten'
			);
		}
	}
?>