<?php
return [ 'product' => [ 'name' => 'CS', 'domain' => 'cs.aliyuncs.com,cs-anony.aliyuncs.com,cs-share.aliyuncs.com,cs-global.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'CS', 'name' => '2018-04-17', 'apiStyle' => 'RPC', ], 'api' => [ 'ClusterProduceNotify' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2018-04-17', 'showJsonItemName' => 'true', 'name' => 'ClusterProduceNotify', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'disable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'CS', 'keepClientResourceOwnerId' => 'false', ], 'parameters' => [ 'Parameter' => [ 'data' => [ 'name' => 'data', 'tagName' => 'data', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://provision.cs.aliyun-inc.com/clusters/produce', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '20', 'controlUnit' => 'Second', ], 'name' => 'ClusterProduceNotify', ], 'LogicalDeleteResources' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2018-04-17', 'showJsonItemName' => 'true', 'name' => 'LogicalDeleteResources', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'CS', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'Interrupt' => [ 'name' => 'Interrupt', 'tagName' => 'Interrupt', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Invoker' => [ 'name' => 'Invoker', 'tagName' => 'Invoker', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Pk' => [ 'name' => 'PK', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Bid' => [ 'name' => 'Bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Hid' => [ 'name' => 'Hid', 'tagName' => 'Hid', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TaskIdentifier' => [ 'name' => 'TaskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TaskExtraData' => [ 'name' => 'TaskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'GmtWakeup' => [ 'name' => 'GmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Country' => [ 'name' => 'Country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'false', 'signKeyName' => '', 'resultType' => 'Object', 'httpHost' => 'http://provision.cs.aliyun-inc.com/resources/logical_delete', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '1200', 'controlUnit' => 'Minute', ], 'name' => 'LogicalDeleteResources', ], 'PhysicalDeleteResources' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2018-04-17', 'showJsonItemName' => 'true', 'name' => 'PhysicalDeleteResources', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'CS', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'Interrupt' => [ 'name' => 'Interrupt', 'tagName' => 'Interrupt', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Invoker' => [ 'name' => 'Invoker', 'tagName' => 'Invoker', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Pk' => [ 'name' => 'PK', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Bid' => [ 'name' => 'Bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Hid' => [ 'name' => 'Hid', 'tagName' => 'Hid', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TaskIdentifier' => [ 'name' => 'TaskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TaskExtraData' => [ 'name' => 'TaskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'GmtWakeup' => [ 'name' => 'GmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Country' => [ 'name' => 'Country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'false', 'signKeyName' => '', 'resultType' => 'Object', 'httpHost' => 'http://provision.cs.aliyun-inc.com/resources/physical_delete', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '1200', 'controlUnit' => 'Minute', ], 'name' => 'PhysicalDeleteResources', ], 'CheckResources' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2018-04-17', 'showJsonItemName' => 'true', 'name' => 'CheckResources', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'CS', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'Interrupt' => [ 'name' => 'Interrupt', 'tagName' => 'Interrupt', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Invoker' => [ 'name' => 'Invoker', 'tagName' => 'Invoker', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Pk' => [ 'name' => 'PK', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Bid' => [ 'name' => 'Bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Hid' => [ 'name' => 'Hid', 'tagName' => 'Hid', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TaskIdentifier' => [ 'name' => 'TaskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TaskExtraData' => [ 'name' => 'TaskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'GmtWakeup' => [ 'name' => 'GmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Country' => [ 'name' => 'Country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'false', 'signKeyName' => '', 'resultType' => 'Object', 'httpHost' => 'http://provision.cs.aliyun-inc.com/resources/check', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '1200', 'controlUnit' => 'Minute', ], 'name' => 'CheckResources', ], ],];
