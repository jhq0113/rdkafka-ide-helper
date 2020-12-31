<?php
$brokers = '10.202.4.120:39092';
$topic   = 'browser_test_topic';
$max     = 1000;

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

