# rdkafka-ide-helper

> 最好用的rdkafka ide helper

## producer example

```php
<?php
$brokers = 'yourbrokers';
$topic   = 'yourtopic';
$max     = 10000;

$config = new \RdKafka\Conf();
$producer = new \RdKafka\Producer($config);
$producer->addBrokers($brokers);
$topic = $producer->newTopic($topic);

for ($index = 0; $index < $max; $index++) {
    $topic->produce(RD_KAFKA_PARTITION_UA,
        RD_KAFKA_MSG_F_BLOCK,
        json_encode([
            'userId'    => mt_rand(1, 1000),
            'status'    => mt_rand(0, 2),
            'datetime'  => date('Y-m-d H:i:s'),
            'microtime' => microtime(true),
        ], JSON_UNESCAPED_UNICODE)
    );
    $producer->poll(0);
}

for ($flushRetries = 0; $flushRetries < $max; $flushRetries++) {
    $result = $producer->flush(10000);
    if (RD_KAFKA_RESP_ERR_NO_ERROR === $result) {
        break;
    }
}

if (RD_KAFKA_RESP_ERR_NO_ERROR !== $result) {
    throw new \RuntimeException('Was unable to flush, messages might be lost!');
}
```

## consumer example

```php
<?php
$brokers = 'yourbrokers';
$topic   = 'yourtopic';
$groupId = 'your_group_id';

$conf = new RdKafka\Conf();
$conf->set("group.id", $groupId);
$conf->set("metadata.broker.list", $brokers);
//earliest
//当各分区下有已提交的offset时，从提交的offset开始消费；无提交的offset时，从头开始消费
//latest
//当各分区下有已提交的offset时，从提交的offset开始消费；无提交的offset时，消费新产生的该分区下的数据
//none
//topic各分区都存在已提交的offset时，从offset后开始消费
$conf->set('auto.offset.reset', 'earliest');
$conf->setRebalanceCb(function (RdKafka\KafkaConsumer $kafka, $err, array $partitions = null) {
    switch ($err) {
        case RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS:
            $kafka->assign($partitions);
            break;
        case RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS:
            $kafka->assign(NULL);
            break;
        default:
            throw new \Exception($err);
    }
});

$consumer = new RdKafka\KafkaConsumer($conf);
$consumer->subscribe([
    $topic
]);

while (true) {
    $message = $consumer->consume(120*1000);
    switch ($message->err) {
        case RD_KAFKA_RESP_ERR_NO_ERROR:
            echo $message->payload.PHP_EOL;
            break;
        case RD_KAFKA_RESP_ERR__PARTITION_EOF:
            echo "No more messages; will wait for more\n";
            break;
        case RD_KAFKA_RESP_ERR__TIMED_OUT:
            echo "Timed out\n";
            break;
        default:
            throw new \Exception($message->errstr(), $message->err);
    }
}

```