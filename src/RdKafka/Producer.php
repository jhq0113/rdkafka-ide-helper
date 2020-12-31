<?php
namespace RdKafka;

/**
 * rdkafka >= 0.9.1
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka-producer.html
 * @package RdKafka
 * @datetime 2020/12/31 3:24 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Producer extends RdKafka
{
    /**
     * Create a new topic instance
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka.newtopic.html
     * @param string $topic_name
     * @param TopicConf|null $topic_conf
     * @return ProducerTopic
     * @datetime 2020/12/31 5:27 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function newTopic($topic_name, TopicConf $topic_conf = null)
    {

    }

    /**
     * Begin a transaction
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-producer.begintransaction.html
     * @datetime 2020/12/31 3:24 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function beginTransaction()
    {

    }

    /**
     * Abort current transaction
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-producer.aborttransaction.html
     * @param integer $timeout_ms
     * @datetime 2020/12/31 3:25 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function abortTransaction ($timeout_ms)
    {

    }

    /**
     * Commit current transaction
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-producer.committransaction.html
     * @param integer $timeout_ms
     * @datetime 2020/12/31 3:26 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function commitTransaction ($timeout_ms)
    {

    }

    /**
     * Initialize transactions
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-producer.inittransactions.html
     * @param integer $timeout_ms
     * @datetime 2020/12/31 3:27 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function initTransactions ($timeout_ms )
    {

    }
}