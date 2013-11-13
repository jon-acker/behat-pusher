<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\MinkExtension\Context\RawMinkContext;
use Jacker\PusherExtension\Pusher;
use Jacker\PusherExtension\PusherAwareInterface;

/**
 * Features context.
 */
class FeatureContext extends MinkContext implements PusherAwareInterface
{
    /**
     * @When /^I do something$/
     */
    public function iDoSomething()
    {
      //d  var_dump('doing something ...');
    }

    /**
     * @Then /^something will happen$/
     */
    public function somethingWillHappen()
    {
       // var_dump('something happens ...');
    }

    public function setPusher(Pusher $pusher)
    {

    }

}
