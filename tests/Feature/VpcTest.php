<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Vpc\Vpc;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Vpc\V20160428\DescribeRegions;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class VpcTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class VpcTest extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::vpc()
                                ->v20160428()
                                ->describeRegions()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Vpc::v20160428()
                       ->describeRegions()
                       ->connectTimeout(20)
                       ->timeout(25);

        self::assertInstanceOf(DescribeRegions::class, $request1);
        self::assertInstanceOf(DescribeRegions::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testVpc()
    {
        $result = AlibabaCloud::vpc()
                              ->v20160428()
                              ->describeRegions()
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
