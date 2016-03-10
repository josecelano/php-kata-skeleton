<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Kata\Sut;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    const EXIT_CODE_SUCCESS = 0;

    private $sut;
    private $output;
    private $exitCode;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->sut = null;
        $this->output = null;
        $this->exitCode = null;
    }

    /**
     * @Given I have a Sut class" with a phpunit test
     */
    public function iHaveASutClassWithAPhpunitTest()
    {
        $this->sut = new Sut();
    }

    /**
     * @When I run phpunit tests
     */
    public function iRunPhpunitTests()
    {
        exec('.\bin\phpunit', $result, $return_var);
        $this->output = $result;
        $this->exitCode = $return_var;
    }

    /**
     * @Then I should see all tests passing
     */
    public function iShouldSeeAllTestsPassing()
    {
        PHPUnit_Framework_Assert::assertEquals(self::EXIT_CODE_SUCCESS, $this->exitCode);
    }
}
