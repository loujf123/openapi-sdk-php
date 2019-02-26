<?php
return [ 'product' => [ 'name' => 'Cms', 'domain' => 'metrics.aliyuncs.com,metrics.[RegionId].aliyuncs.com,metrics-share.aliyuncs.com,metrics-share.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Cms', 'name' => '2017-06-20', ], 'api' => [ 'UpdateTemplateApplyGroups' => [ 'attributes' => [ 'version' => '2017-06-20', 'showJsonItemName' => 'true', 'name' => 'UpdateTemplateApplyGroups', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'TemplateId' => [ 'name' => 'templateId', 'tagName' => 'TemplateId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'GroupIds' => [ 'name' => 'groupIds', 'tagName' => 'GroupIds', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://cms.aliyun.com/alarmTemplate/updateTemplateApplyGroups', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'UpdateTemplateApplyGroups', ], 'GetProductGroupsAction' => [ 'attributes' => [ 'version' => '2017-06-20', 'showJsonItemName' => 'true', 'name' => 'GetProductGroupsAction', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => NULL, 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://cms.aliyun.com/productGroup/getGroupActionList', 'timeout' => '2000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'GetProductGroupsAction', ], 'PutAlertTemplate' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-06-20', 'showJsonItemName' => 'true', 'name' => 'PutAlertTemplate', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'TemplateId' => [ 'name' => 'templateId', 'tagName' => 'TemplateId', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TemplateName' => [ 'name' => 'name', 'tagName' => 'TemplateName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TemplateDescribe' => [ 'name' => 'templateDescribe', 'tagName' => 'TemplateDescribe', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SilenceTime' => [ 'name' => 'silenceTime', 'tagName' => 'SilenceTime', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'EnableStartTime' => [ 'name' => 'enableStartTime', 'tagName' => 'EnableStartTime', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'EnableEndTime' => [ 'name' => 'enableEndTime', 'tagName' => 'EnableEndTime', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'NotifyLevel' => [ 'name' => 'notifyLevel', 'tagName' => 'NotifyLevel', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TemplateType' => [ 'name' => 'templateType', 'tagName' => 'TemplateType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ApplyGroups' => [ 'name' => 'applyGroups', 'tagName' => 'ApplyGroups', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'AlarmTemplateItems' => [ 'name' => 'templates', 'tagName' => 'AlarmTemplateItems', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Body', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://cms.aliyun.com/alarmTemplate/putAlarmTemplates', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'PutAlertTemplate', ], 'ListAlertTemplate' => [ 'attributes' => [ 'version' => '2017-06-20', 'showJsonItemName' => 'true', 'name' => 'ListAlertTemplate', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'TemplateId' => [ 'name' => 'templateId', 'tagName' => 'TemplateId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Page' => [ 'name' => 'page', 'tagName' => 'Page', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'pageSize', 'tagName' => 'PageSize', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://cms.aliyun.com/alarmTemplate/getAlarmTemplates', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'ListAlertTemplate', ], 'DeleteAlertTemplate' => [ 'attributes' => [ 'version' => '2017-06-20', 'showJsonItemName' => 'true', 'name' => 'DeleteAlertTemplate', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cms', ], 'parameters' => [ 'Parameter' => [ 'TemplateId' => [ 'name' => 'templateId', 'tagName' => 'TemplateId', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://cms.aliyun.com/alarmTemplate/deleteTemplate', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DeleteAlertTemplate', ], ],];
