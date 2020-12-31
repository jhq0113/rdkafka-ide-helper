<?php
namespace RdKafka;

/**
 * This class holds configuration for consumers and producers
 * @link https://arnaud.le-blanc.net/php-rdkafka-doc/phpdoc/class.rdkafka-conf.html
 * @package RdKafka
 * @datetime 2020/12/31 3:04 下午
 * @author   roach
 * @email    jhq0113@163.com
 */
class Conf
{
    /**
     * Dump the configuration
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.dump.html
     * @datetime 2020/12/31 3:13 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function dump()
    {

    }

    /**
     * Set configuration
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.set.html
     * @param string $name
     * @param string $value
     * @datetime 2020/12/31 3:14 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function set($name, $value)
    {

    }

    /**
     * Set consume callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setconsumecb.html
     * @param callable $callback
     * @datetime 2020/12/31 3:14 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setConsumeCb(callable $callback)
    {

    }

    /**
     * Set default topic configuration
     * @deprecated
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setdefaulttopicconf.html
     * @param RdKafka\TopicConf $topic_conf
     * @datetime 2020/12/31 3:15 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setDefaultTopicConf(RdKafka\TopicConf $topic_conf )
    {

    }

    /**
     * Set delivery report callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setdrmsgcb.html
     * @param callable $callback
     * @datetime 2020/12/31 3:17 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setDrMsgCb(callable $callback)
    {

    }

    /**
     * Set error callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.seterrorcb.html
     * @param callable $callback
     * @datetime 2020/12/31 3:20 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setErrorCb(callable $callback)
    {

    }

    /**
     * Set offset commit callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setoffsetcommitcb.html
     * @param callable $callback
     * @datetime 2020/12/31 3:21 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setOffsetCommitCb(callable $callback)
    {

    }

    /**
     * Set rebalance callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setrebalancecb.html
     * @param callable $callback
     * @datetime 2020/12/31 3:21 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setRebalanceCb(callable $callback)
    {

    }

    /**
     * Sets the statistics report callback
     * @link https://arnaud-lb.github.io/php-rdkafka/phpdoc/rdkafka-conf.setstatscb.html
     * @param callable $callback
     * @datetime 2020/12/31 3:22 下午
     * @author   roach
     * @email    jhq0113@163.com
     */
    public function setStatsCb(callable $callback)
    {

    }

}