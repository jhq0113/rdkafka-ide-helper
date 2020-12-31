<?php
namespace RdKafka;

/**
 * The Metadata class represents broker information. Metadata instances are returned by RdKafka::getMetadata() and RdKafka\KafkaConsumer::getMetadata().
 * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/class.rdkafka-metadata.html
 * @package RdKafka
 * @datetime 2020/12/31 3:58 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Metadata
{
    /**
     * Get broker list
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata.getbrokers.html
     * @return  RdKafka\Metadata\Collection
     * @datetime 2020/12/31 3:59 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getBrokers()
    {

    }

    /**
     * Get the broker id originating this metadata
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata.getorigbrokerid.html
     * @return  integer
     * @datetime 2020/12/31 4:00 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getOrigBrokerId()
    {

    }

    /**
     * Get the broker name originating this metadata
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-metadata.getorigbrokername.html
     * @return string
     * @datetime 2020/12/31 4:02 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getOrigBrokerName()
    {

    }

    /**
     * Get the topic list
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-metadata.gettopics.html
     * @return RdKafka\Metadata\Collection
     * @datetime 2020/12/31 4:01 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getTopics()
    {

    }
}