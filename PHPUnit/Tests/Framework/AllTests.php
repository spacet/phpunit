<?php
/**
 * PHPUnit
 *
 * Copyright (c) 2002-2010, Sebastian Bergmann <sb@sebastian-bergmann.de>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   Testing
 * @package    PHPUnit
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2002-2010 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://www.phpunit.de/
 * @since      File available since Release 2.0.0
 */

require_once 'PHP/CodeCoverage/Filter.php';
PHP_CodeCoverage_Filter::getInstance()->addFileToBlacklist(__FILE__, 'TESTS');

require_once 'PHPUnit/Framework/TestSuite.php';
require_once 'PHPUnit/Extensions/PhptTestSuite.php';

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'AssertTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'ComparisonFailureTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'ConstraintTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'MockObjectTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'SuiteTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'TestCaseTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'TestFailureTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'TestImplementorTest.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'TestListenerTest.php';

/**
 *
 *
 * @category   Testing
 * @package    PHPUnit
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2002-2010 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://www.phpunit.de/
 * @since      Class available since Release 2.0.0
 */
class Framework_AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PHPUnit_Framework');

        $suite->addTestSuite('Framework_AssertTest');
        $suite->addTestSuite('Framework_ComparisonFailureTest');
        $suite->addTestSuite('Framework_ConstraintTest');
        $suite->addTestSuite('Framework_MockObjectTest');
        $suite->addTestSuite('Framework_SuiteTest');
        $suite->addTestSuite('Framework_TestCaseTest');
        $suite->addTestSuite('Framework_TestFailureTest');
        $suite->addTestSuite('Framework_TestImplementorTest');
        $suite->addTestSuite('Framework_TestListenerTest');
        $suite->addTest(new PHPUnit_Extensions_PhptTestSuite(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'MockObject'));

        return $suite;
    }
}
?>
