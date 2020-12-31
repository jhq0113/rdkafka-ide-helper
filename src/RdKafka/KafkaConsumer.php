<?php
namespace RdKafka;

/**
 * This is the High-level KafkaConsumer with support for automatic partition assignment/revocation (requires Kafka >= 0.9).
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka-kafkaconsumer.html
 * @package RdKafka
 * @datetime 2020/12/31 4:29 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class KafkaConsumer
{
    /**
     * KafkaConsumer constructor.
     *
     * The conf object must have group.id set to the consumer group to join.
     *
     * @example.
     * $conf = new RdKafka\Conf();
     * $conf->set("group.id", "myGroupID");
     *
     * $kafkaConsumer = new RdKafka\KafkaConsumer($conf);
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-consumertopic.consume.html
     * @param RdKafka\Conf $conf
     */
    public function __construct(RdKafka\Conf $conf)
    {

    }

    /**
     * Update the assignment set
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-kafkaconsumer.assign.html
     * @param array $topic_partitions
     * @datetime 2020/12/31 4:32 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function assign($topic_partitions = [])
    {

    }

    /**
     * Commit offsets
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-kafkaconsumer.commit.html
     * @param mixed $message_or_offsets
     * @datetime 2020/12/31 4:34 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function commit($message_or_offsets = null)
    {

    }

    /**
     * Commit offsets asynchronously
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-kafkaconsumer.commitasync.html
     * @param string $message_or_offsets
     * @datetime 2020/12/31 4:35 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function commitAsync($message_or_offsets = null)
    {

    }

    /**
     * Consume message and triggers callbacks
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.consume.html
     * @param integer $timeout_ms
     * @return Rdkafka\Message
     * @datetime 2020/12/31 4:35 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function consume($timeout_ms)
    {

    }

    /**
     * Returns the current partition assignment
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.getassignment.html
     * @throws RdKafka\Exception
     * @return array
     * @datetime 2020/12/31 4:38 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getAssignment()
    {

    }

    /**
     * Returns the commited offsets
     * @example
     * $conf = new RdKafka\Conf();
     * $conf->set("group.id", "myGroupID");
     *
     * $kafkaConsumer = new RdKafka\KafkaConsumer($conf);
     * $topicPartition = new TopicPartition('myTopic', 0);
     * $timeoutMs = 10000000;

     * $topicPartitionsWithOffsets = $consumer->getCommittedOffsets([$topicPartition], $timeoutMs));
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-kafkaconsumer.getcommittedoffsets.html
     * @param array   $topics
     * @param integer $timeout_ms
     * @return array
     * @datetime 2020/12/31 4:40 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getCommitedOffsets($topics , $timeout_ms )
    {

    }

    /**
     * Request Metadata from broker
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-kafkaconsumer.getmetadata.html
     * @param bool $all_topics
     * @param RdKafka\KafkaConsumerTopic|null $only_topic
     * @param int $timeout_ms
     * @return array
     * @datetime 2020/12/31 4:43 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getMetadata($all_topics, RdKafka\KafkaConsumerTopic $only_topic = null, $timeout_ms)
    {

    }

    /**
     * Return the current subscription
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-kafkaconsumer.getsubscription.html
     * @return array
     * @datetime 2020/12/31 4:44 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function getSubscription()
    {

    }

    /**
     * Update the subscription set
     * @example
     * $kafkaConsumer->subscribe([
     *    "logs",
     *    "^myPfx[0-9]_.*",
     * ]);
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-kafkaconsumer.subscribe.html
     * @param array $topics
     * @datetime 2020/12/31 4:45 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function subscribe(array $topics)
    {

    }


    /**
     * Unsubscribe from the current subscription set
     * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/rdkafka-kafkaconsumer.unsubscribe.html
     * @throws RdKafka\Exception
     * @datetime 2020/12/31 4:29 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function unsubscribe()
    {

    }
}