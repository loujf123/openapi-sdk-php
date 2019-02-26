<?php
return [ 'product' => [ 'name' => 'Ots', 'domain' => 'ots.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Ots', 'name' => '2016-06-20', ], 'api' => [ 'UpdateInstance' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'UpdateInstance', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Network' => [ 'name' => 'Network', 'tagName' => 'Network', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'UpdateInstance', ], 'UnbindInstance2Vpc' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'UnbindInstance2Vpc', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceVpcName' => [ 'name' => 'InstanceVpcName', 'tagName' => 'InstanceVpcName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegionNo' => [ 'name' => 'RegionNo', 'tagName' => 'RegionNo', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'UnbindInstance2Vpc', ], 'ListVpcInfoByVpc' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'ListVpcInfoByVpc', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VpcId' => [ 'name' => 'VpcId', 'tagName' => 'VpcId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListVpcInfoByVpc', ], 'ListVpcInfoByInstance' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'ListVpcInfoByInstance', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListVpcInfoByInstance', ], 'ListTags' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'ListTags', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'ListTags', ], 'ListInstance' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'ListInstance', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNum' => [ 'name' => 'PageNum', 'tagName' => 'PageNum', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'PageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListInstance', ], 'ListClusterType' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'ListClusterType', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListClusterType', ], 'InsertTags' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'InsertTags', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'InsertTags', ], 'InsertInstance' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'InsertInstance', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ClusterType' => [ 'name' => 'ClusterType', 'tagName' => 'ClusterType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Network' => [ 'name' => 'Network', 'tagName' => 'Network', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Description' => [ 'name' => 'Description', 'tagName' => 'Description', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'InsertInstance', ], 'GetInstance' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'GetInstance', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'GetInstance', ], 'DeleteTags' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'DeleteTags', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TagInfo' => [ 'name' => 'TagList', 'tagName' => 'TagInfo', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'indexName' => 'tagIndex', 'sequence' => 'true', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'DeleteTags', ], 'DeleteInstance' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'DeleteInstance', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'DeleteInstance', ], 'BindInstance2Vpc' => [ 'attributes' => [ 'version' => '2016-06-20', 'showJsonItemName' => 'true', 'name' => 'BindInstance2Vpc', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ots', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'access_key_id' => [ 'name' => 'AccessKeyId', 'tagName' => 'access_key_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VpcId' => [ 'name' => 'VpcId', 'tagName' => 'VpcId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VirtualSwitchId' => [ 'name' => 'VirtualSwitchId', 'tagName' => 'VirtualSwitchId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceName' => [ 'name' => 'InstanceName', 'tagName' => 'InstanceName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceVpcName' => [ 'name' => 'InstanceVpcName', 'tagName' => 'InstanceVpcName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegionNo' => [ 'name' => 'RegionNo', 'tagName' => 'RegionNo', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Network' => [ 'name' => 'Network', 'tagName' => 'Network', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://ocm.${RegionId}.ots.aliyun-inc.com', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'BindInstance2Vpc', ], ],];
