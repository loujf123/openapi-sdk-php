<?php
return [ 'product' => [ 'name' => 'Ccs', 'domain' => 'ccs.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Ccs', 'isolationType' => 'outer', 'name' => '2017-10-01', 'apiStyle' => 'RPC', ], 'api' => [ 'QueryTicket' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-10-01', 'showJsonItemName' => 'true', 'name' => 'QueryTicket', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ccs', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'CcsInstanceId' => [ 'name' => 'ccsInstanceId', 'tagName' => 'CcsInstanceId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'PageNum' => [ 'name' => 'pageNum', 'tagName' => 'PageNum', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'PageSize' => [ 'name' => 'pageSize', 'tagName' => 'PageSize', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Type' => [ 'name' => 'type', 'tagName' => 'Type', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'StartTime' => [ 'name' => 'startTime', 'tagName' => 'StartTime', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'EndTime' => [ 'name' => 'endTime', 'tagName' => 'EndTime', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'CreatorId' => [ 'name' => 'creatorId', 'tagName' => 'CreatorId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Stage' => [ 'name' => 'stage', 'tagName' => 'Stage', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'ccsSignKey', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'https://csmng-ccs.aliyun.com/gateway/process/ticket/query.api', 'timeout' => '6000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '400', 'controlUnit' => 'Second', ], 'name' => 'QueryTicket', ], 'ProceedTicket' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-10-01', 'showJsonItemName' => 'true', 'name' => 'ProceedTicket', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ccs', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'CcsInstanceId' => [ 'name' => 'ccsInstanceId', 'tagName' => 'CcsInstanceId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Id' => [ 'name' => 'id', 'tagName' => 'Id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Operation' => [ 'name' => 'operation', 'tagName' => 'Operation', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'OperatorId' => [ 'name' => 'operatorId', 'tagName' => 'OperatorId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Memo' => [ 'name' => 'memo', 'tagName' => 'Memo', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'ccsSignKey', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'https://csmng-ccs.aliyun.com/gateway/process/ticket/proceed.api', 'timeout' => '6000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '400', 'controlUnit' => 'Second', ], 'name' => 'ProceedTicket', ], 'CreateTicket' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-10-01', 'showJsonItemName' => 'true', 'name' => 'CreateTicket', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ccs', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'CcsInstanceId' => [ 'name' => 'ccsInstanceId', 'tagName' => 'CcsInstanceId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Type' => [ 'name' => 'type', 'tagName' => 'Type', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Description' => [ 'name' => 'description', 'tagName' => 'Description', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'CreatorId' => [ 'name' => 'creatorId', 'tagName' => 'CreatorId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'CustomFields' => [ 'name' => 'customFields', 'tagName' => 'CustomFields', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'ccsSignKey', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'https://csmng-ccs.aliyun.com/gateway/process/ticket/create.api', 'timeout' => '6000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'apiDefault' => '400', 'controlUnit' => 'Second', ], 'name' => 'CreateTicket', ], 'QueryHotlineRecord' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-10-01', 'showJsonItemName' => 'true', 'name' => 'QueryHotlineRecord', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ccs', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'StartTime' => [ 'name' => 'startTime', 'tagName' => 'StartTime', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'PageNum' => [ 'name' => 'pageNum', 'tagName' => 'PageNum', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'PageSize' => [ 'name' => 'pageSize', 'tagName' => 'PageSize', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'EndTime' => [ 'name' => 'endTime', 'tagName' => 'EndTime', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'VisitorId' => [ 'name' => 'visitorId', 'tagName' => 'VisitorId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'VisitorProvince' => [ 'name' => 'visitorProvince', 'tagName' => 'VisitorProvince', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'VisitorPhone' => [ 'name' => 'visitorPhone', 'tagName' => 'VisitorPhone', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'CallType' => [ 'name' => 'callType', 'tagName' => 'CallType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'AgentId' => [ 'name' => 'agentId', 'tagName' => 'AgentId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'GroupId' => [ 'name' => 'groupId', 'tagName' => 'GroupId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'MaxTalkDuration' => [ 'name' => 'maxTalkDuration', 'tagName' => 'MaxTalkDuration', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'MinTalkDuratoin' => [ 'name' => 'minTalkDuratoin', 'tagName' => 'MinTalkDuratoin', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Status' => [ 'name' => 'status', 'tagName' => 'Status', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Satisfaction' => [ 'name' => 'satisfaction', 'tagName' => 'Satisfaction', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'CategoryIds' => [ 'name' => 'categoryIds', 'tagName' => 'CategoryIds', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'CcsInstanceId' => [ 'name' => 'ccsInstanceId', 'tagName' => 'CcsInstanceId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'ccsSignKey', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'https://csplatform-ccs.aliyun.com/gateway/hotline/record/query.api', 'timeout' => '6000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '400', 'controlUnit' => 'Second', ], 'name' => 'QueryHotlineRecord', ], 'GetHotlineRecord' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-10-01', 'showJsonItemName' => 'true', 'name' => 'GetHotlineRecord', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ccs', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => [ 'Parameter' => [ 'Id' => [ 'name' => 'id', 'tagName' => 'Id', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'CcsInstanceId' => [ 'name' => 'ccsInstanceId', 'tagName' => 'CcsInstanceId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'ccsSignKey', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'https://csplatform-ccs.aliyun.com/gateway/hotline/record/get.api', 'timeout' => '6000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '400', 'controlUnit' => 'Second', ], 'name' => 'GetHotlineRecord', ], ],];
