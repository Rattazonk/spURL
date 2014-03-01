<?php
namespace Rattazonk\Spurl\Tests;

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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Rattazonk\Spurl\Domain\Model\Path.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage spURL
 *
 * @author Frederik Vosberg <frederik.vosberg@rattazonk.de>
 */
class AbstractTranslatorTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Rattazonk\Spurl\Domain\Translator\AbstractTranslator
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = $this->getMockForAbstractClass('\Rattazonk\Spurl\Domain\Translator\AbstractTranslator');
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getSetSettings() {
		$this->assertSame([], $this->fixture->getSettings(), 'The settings should initially be empty. ');
		$this->fixture->setSettings(['foo' => 'bar']);
		$this->assertSame(['foo' => 'bar'], $this->fixture->getSettings());
	}

	/**
	 * @test
	 */
	public function setGetPath() {
		$this->assertSame(NULL, $this->fixture->getPath(), 'The settings should initially be NULL. ');
		$path = $this->objectManager->get('\Rattazonk\Spurl\Domain\Model\Path');
		$this->fixture->setPath($path);
		$this->assertSame($path, $this->fixture->getPath());
	}
}
?>