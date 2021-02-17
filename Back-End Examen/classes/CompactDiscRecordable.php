<?php
	class CompactDiscRecordable extends Medium {
		public function __construct() {
			parent::__construct(
				'CD-r',
				4.7,
				/* edit 20201124 */
					'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Cd2.png/260px-Cd2.png',
				/* ------------- */
				'https://nl.wikipedia.org/wiki/Compact_disc',
				false,
				true,
				'700 MB'
			);
		}
	}
?>