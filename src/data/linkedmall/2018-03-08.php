<?php
return [ 'product' => [ 'name' => 'linkedmall', 'domain' => 'linkedmall.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'linkedmall', 'name' => '2018-03-08', 'apiStyle' => 'ROA', ], 'api' => [ 'NotifyByAliPay' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2018-03-08', 'showJsonItemName' => 'false', 'name' => 'NotifyByAliPay', 'parameterType' => 'Single', 'authType' => 'Anonymous', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'linkedmall', 'keepClientResourceOwnerId' => 'false', ], 'parameters' => NULL, 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'false', 'signKeyName' => '', 'resultType' => 'String', 'httpHost' => 'http://10.206.248.10', 'timeout' => '2000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'pattern' => '/notify/alipay/', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '1000', 'controlUnit' => 'Second', ], 'name' => 'NotifyByAliPay', ], ],];
