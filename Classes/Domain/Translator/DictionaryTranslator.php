<?php
namespace Rattazonk\Spurl\Domain\Translator;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Frederik Vosberg <frederik.vosberg@rattazonk.de>, Rattazonk
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package spurl
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class DictionaryTranslator extends AbstractTranslator implements TranslatorInterface {
	public function decode() {
		$pathParts = $this->path->getNotProcessedPathParts();
		foreach ( $pathParts as $pathPart ) {
			$pathPartProcessed = FALSE;
			foreach ($this->settings['dict'] as $dictionary) {
				if ($pathPart == $dictionary['encoded']) {
					$this->addDecodedParams( $dictionary['decoded'] );
					$pathPartProcessed = TRUE;
				}
			}
			if ( $pathPartProcessed ) {
				$this->path->addProcessedPathPart( $pathPart );
			} else {
				break;
			}
		}
	}
}
?>