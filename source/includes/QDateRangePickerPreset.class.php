/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	/*
	 * @property-read string $Preset
	 * @property-read string $DefaultLabel
	 */
	class QDateRangePickerPreset extends QBaseClass {
		private $strPreset;
		private $strDefaultLabel;

		private function  __construct($strPreset, $strDefaultLabel) {
			$this->strPreset = $strPreset;
			$this->strDefaultLabel = $strDefaultLabel;
		}

		public static function SpecificDate() {
			static $preset = null;
			if (null === $preset) {
				$preset = new QDateRangePickerPreset('specificDate', QApplication::Translate('Sepcific Date'));
			}
			return $preset;
		}
		public static function AllDatesBefore() {
			static $preset = null;
			if (null === $preset) {
				$preset = new QDateRangePickerPreset('allDatesBefore', QApplication::Translate('All Dates Before'));
			}
			return $preset;
		}
		public static function AllDatesAfter() {
			static $preset = null;
			if (null === $preset) {
				$preset = new QDateRangePickerPreset('allDatesAfter', QApplication::Translate('All Dates After'));
			}
			return $preset;
		}
		public static function DateRange() {
			static $preset = null;
			if (null === $preset) {
				$preset = new QDateRangePickerPreset('dateRange', QApplication::Translate('Date Range'));
			}
			return $preset;
		}

		public function __get($strName) {
			switch ($strName) {
				case "Preset" : return $this->strPreset;
				case "DefaultLabel" : return $this->strDefaultLabel;
				default :
					try {
						return parent::__get($strName);
					}
					catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
