<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jon
 * Date: 16/10/13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace Jacker\PusherExtension\Listeners;


use Behat\Behat\Event\EventInterface;
use Behat\Gherkin\Node\StepNode;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class StepListener implements EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     *
     * @api
     */
    public static function getSubscribedEvents()
    {
        return array (
            'beforeStep' => 'doSomethingBeforeStep'
        );
    }

    public function doSomethingBeforeStep(EventInterface $event)
    {
        $this->stepMethod($event->getStep());
    }

    private function stepMethod(StepNode $step)
    {
        var_dump($step->getText());
    }
}
