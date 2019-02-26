<?php
return [ 'product' => [ 'name' => 'Cms', 'domain' => 'metrics.aliyuncs.com,metrics.[RegionId].aliyuncs.com,metrics-share.aliyuncs.com,metrics-share.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Cms', 'name' => '2017-08-25', ], 'api' => [ 'UpdateEventTriggerDesc' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-08-25', 'showJsonItemName' => 'true', 'name' => 'UpdateEventTriggerDesc', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'callby_cms_owner' => [ 'name' => 'callby_cms_owner', 'tagName' => 'callby_cms_owner', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Uuid' => [ 'name' => 'uuid', 'tagName' => 'Uuid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ShowName' => [ 'name' => 'showName', 'tagName' => 'ShowName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Detail' => [ 'name' => 'detail', 'tagName' => 'Detail', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://pre.cms.aliyun.com/eventFlow/updateTriggerDesc', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'UpdateEventTriggerDesc', ], 'SetEventTrigger' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-08-25', 'showJsonItemName' => 'true', 'name' => 'SetEventTrigger', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'callby_cms_owner' => [ 'name' => 'callby_cms_owner', 'tagName' => 'callby_cms_owner', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'eventProduct' => [ 'name' => 'eventProduct', 'tagName' => 'eventProduct', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Uuid' => [ 'name' => 'uuid', 'tagName' => 'Uuid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'EventName' => [ 'name' => 'eventName', 'tagName' => 'EventName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ShowName' => [ 'name' => 'showName', 'tagName' => 'ShowName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Detail' => [ 'name' => 'detail', 'tagName' => 'Detail', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'appGroupId' => [ 'name' => 'appGroupId', 'tagName' => 'appGroupId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'appGroupName' => [ 'name' => 'appGroupName', 'tagName' => 'appGroupName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ConditionJson' => [ 'name' => 'conditionJson', 'tagName' => 'ConditionJson', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MatchJson' => [ 'name' => 'matchJson', 'tagName' => 'MatchJson', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TargetListJson' => [ 'name' => 'targetListJson', 'tagName' => 'TargetListJson', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://pre.cms.aliyun.com/eventFlow/setTrigger', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'SetEventTrigger', ], 'ListEventTrigger' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-08-25', 'showJsonItemName' => 'true', 'name' => 'ListEventTrigger', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'callby_cms_owner' => [ 'name' => 'callby_cms_owner', 'tagName' => 'callby_cms_owner', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Offset' => [ 'name' => 'offset', 'tagName' => 'Offset', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Length' => [ 'name' => 'length', 'tagName' => 'Length', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://pre.cms.aliyun.com/eventFlow/listTrigger', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'ListEventTrigger', ], 'GetEventTrigger' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-08-25', 'showJsonItemName' => 'true', 'name' => 'GetEventTrigger', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'callby_cms_owner' => [ 'name' => 'callby_cms_owner', 'tagName' => 'callby_cms_owner', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Uuid' => [ 'name' => 'uuid', 'tagName' => 'Uuid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://pre.cms.aliyun.com/eventFlow/getTrigger', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'GetEventTrigger', ], 'DeleteEventTrigger' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-08-25', 'showJsonItemName' => 'true', 'name' => 'DeleteEventTrigger', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'callby_cms_owner' => [ 'name' => 'callby_cms_owner', 'tagName' => 'callby_cms_owner', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Uuid' => [ 'name' => 'uuid', 'tagName' => 'Uuid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://pre.cms.aliyun.com/eventFlow/deleteTrigger', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'DeleteEventTrigger', ], 'ChangeEventTriggerStatus' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-08-25', 'showJsonItemName' => 'true', 'name' => 'ChangeEventTriggerStatus', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'ResourceOwnerId' => [ 'name' => 'ResourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'callby_cms_owner' => [ 'name' => 'callby_cms_owner', 'tagName' => 'callby_cms_owner', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Uuid' => [ 'name' => 'uuid', 'tagName' => 'Uuid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'status' => [ 'name' => 'status', 'tagName' => 'status', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://pre.cms.aliyun.com/eventFlow/changeTriggerStatus', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'ChangeEventTriggerStatus', ], ],];
