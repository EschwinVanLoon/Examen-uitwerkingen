<?php
	class Medium implements MediumSpecs {
		
		protected $name = null;
		protected $diameter = null;
		protected $image = null;
		/* edit 20201124 */
			protected $wikipedia = null;
		/* ------------- */
		protected $analog = null;
		protected $digital = null;
		protected $capacity = null;
		
		protected function __construct(
			string $name,
			float $diameter,
			string $image,
			/* edit 20201124 */
				string $wikipedia,
			/* ------------- */
			bool $analog,
			bool $digital,
			string $capacity
		) {
			$this->name = $name;
			$this->diameter = $diameter;
			$this->image = $image;
			/* edit 20201124 */
				$this->wikipedia = $wikipedia;
			/* ------------- */				
			$this->analog = $analog;
			$this->digital = $digital;
			$this->capacity = $capacity;
		}		
		public function getName() : string {
			return $this->name;
		}
		public function getDiameter() : float {
			return $this->diameter;			
		}
		public function getImage() : string {
			return $this->image;
		}
		/* edit 20201124 */
			public function getWikipedia() : string {
				return $this->wikipedia;
			}
		/* ------------- */
		public function isAnalog() : bool {
			return $this->analog;
		}
		public function isDigital() : bool {
			return $this->digital;
		}
		public function getCapacity() : string {
			return $this->capacity;
		}
		public function presentSpecs() : string {
			$analog = null;
			if ($this->isAnalog()) {$analog = '&check;';} else {$analog = '&cross;';}
			
			$digital = null;
			if ($this->isDigital()) {$digital = '&check;';} else {$digital = '&cross;';}
			
			$html = '<div class="inline">
						<h2 class="oo">de '.$this->getName().'</h2>';
					/* edit 20201124 */
			$html .=	'<p class="oo">(<a href="'.$this->getWikipedia().'" target="_blank">wikipedia</a>)</p>
					 </div>
					 <div class="flex oo">
						<img id="'.$this->getName().'" class="oo" src="'.$this->getImage().'">';
					 /* ------------- */						
			$html .=	'<table class="oo">
							<tr>
								<th>opslagruimte</th>
								<th>diameter</th>
								<th>analoog</th>
								<th>digitaal</th>
							</tr>
							<tr>
								<td>'.$this->getCapacity().'</td>
								<td>'.$this->getDiameter().'"</td>
								<td>'.$analog.'</td>
								<td>'.$digital.'</td>
							</tr>
						</table>';
					 /* edit 20201124 */
			$html .= '</div>';
					 /* ------------- */						
			return $html;
		}
	}
?>