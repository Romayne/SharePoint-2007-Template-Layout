<?php
	require_once("PHPUnit/Framework/TestCase.php");
	
	set_include_path(get_include_path() . PATH_SEPARATOR . "../");
	
	require("application/models/Default/Functions.class.php");
	
	/**
	 * Functions test case.
	 */
	class FunctionsTest extends PHPUnit_Framework_TestCase
	{
		/**
		 * @var Functions
		 */
		private $Functions;
		
		/**
		 * Prepares the environment before running a test.
		 */
		protected function setUp()
		{
			$this->Functions = new Functions();
			
			parent::setUp();
		}
		
		/**
		 * Cleans up the environment after running a test.
		 */
		protected function tearDown()
		{
			$this->Functions = null;
			
			parent::tearDown();
		}
		
		/**
		 * Constructs the test case.
		 */
		public function __construct()
		{
			
		}
		
		/**
		 * Tests FunctionsTest::breadcrumbs()
		 */
		public function testEmptyBreadcrumbs()
		{
			// TODO Auto-generated FunctionsTest->testEmptyBreadcrumbs()
			//$this->markTestIncomplete("testEmptyBreadcrumbs test not implemented");
			
			$result = $this->Functions->breadcrumbs();
			
			$this->assertEquals(false, $result);
		}
		
		/**
		 * Tests FunctionsTest::breadcrumbs()
		 */
		public function testNotEmptyBreadcrumbs()
		{
			// TODO Auto-generated FunctionsTest->testNotEmptyBreadcrumbs()
			//$this->markTestIncomplete("testNotEmptyBreadcrumbs test not implemented");
			
			$viewBreadcrumbs = array("foo" => "bar", "" => "foo bar");
			
			$result = $this->Functions->breadcrumbs($viewBreadcrumbs);
			
			$this->assertEquals(true, $result);
		}
	} /*end of class FunctionsTest*/