<?php
	class Diskette extends Medium {
		public function __construct() {
			parent::__construct(
				'Diskette',
				3.5,
				/* edit 20201124 */
					'https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Back_of_floppy_disk_with_transparent_case.jpg/220px-Back_of_floppy_disk_with_transparent_case.jpg',
				/* ------------- */
				'https://nl.wikipedia.org/wiki/Diskette',
				false,
				true,
				'360 KB'
			);
		}
	}
?>