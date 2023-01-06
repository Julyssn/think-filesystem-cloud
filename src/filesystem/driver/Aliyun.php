<?php
declare (strict_types=1);

namespace think\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Driver;
use Xxtime\Flysystem\Aliyun\OssAdapter;

class Aliyun extends Driver
{
    protected function createAdapter(): AdapterInterface
    {
        return new OssAdapter([
            'accessId' => $this->config['accessId'],
            'accessSecret' => $this->config['accessSecret'],
            'bucket' => $this->config['bucket'],
            'endpoint' => $this->config['endpoint'],
        ]);
    }
}