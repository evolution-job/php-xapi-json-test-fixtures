<?php

include __DIR__.'/vendor/autoload.php';

$status = 0;
$typeMap = ['StatementJsonFixtures::getStatementCollection' => 'array', 'UuidJsonFixtures::getGoodUuid' => 'string', 'UuidJsonFixtures::getBadUuid' => 'string'];

foreach (glob(__DIR__.'/src/*.php') as $path) {
    $filename = substr(basename($path), 0, -4);
    $className = 'XApi\Fixtures\Json\\'.$filename;

    foreach (get_class_methods($className) as $method) {
        $data = json_decode(call_user_func([$className, $method]), false);
        $readableMethodName = $filename.'::'.$method;

        $type = $typeMap[$readableMethodName] ?? 'object';

        if (gettype($data) !== $type) {
            file_put_contents('php://stderr', sprintf(
                'Expected %s::%s to return data of type "%s", but got "%s"'.PHP_EOL,
                $filename,
                $method,
                $type,
                gettype($data)
            ));
            $status = 1;
        }
    }
}

exit($status);
