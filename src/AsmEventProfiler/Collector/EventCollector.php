<?php
namespace AsmEventProfiler\Collector;

use Zend\Mvc\MvcEvent,
    ZendDeveloperTools\Collector;

/**
 * Event Data Collector.
 *
 * @category   Zend
 * @package    ZendDeveloperTools
 * @subpackage Collector
 */
class EventCollector extends Collector\EventCollector
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'asmeventcollector';
    }

    /**
     * @inheritdoc
     */
    public function getPriority()
    {
        return 100;
    }

    /**
     * @inheritdoc
     */
    public function collect(MvcEvent $mvcEvent)
    {
        //@todo implement
    }
}