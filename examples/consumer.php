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
