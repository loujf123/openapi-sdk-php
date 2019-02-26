<?php
return [ 'product' => [ 'name' => 'Cloudauth', 'domain' => 'cloudauth.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Cloudauth', 'name' => '2018-08-07', 'apiStyle' => 'RPC', ], 'api' => [ 'SubmitMaterials' => [ 'attributes' => [ 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'SubmitMaterials', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cloudauth', ], 'parameters' => [ 'Parameter' => [ 'SourceIp' => [ 'name' => 'sourceIp', 'tagName' => 'SourceIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'resourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VerifyToken' => [ 'name' => 'verifyToken', 'tagName' => 'VerifyToken', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Material' => [ 'name' => 'materials', 'tagName' => 'Material', 'type' => 'RepeatList', 'required' => 'true', 'tagPosition' => 'Query', 'maxNumber' => '10', 'indexName' => 'materialIndex', 'sequence' => 'true', 'invokeDataType' => 'Map', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0.normal', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.yundun.gateway.provider.api.a00.YundunGatewayA014Service', 'method' => 'execute098', 'invokeType' => 'java.lang.Object', 'timeout' => '6000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '50', 'apiDefault' => '500', 'controlUnit' => 'Second', ], 'name' => 'SubmitMaterials', ], 'GetVerifyToken' => [ 'attributes' => [ 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'GetVerifyToken', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cloudauth', ], 'parameters' => [ 'Parameter' => [ 'SourceIp' => [ 'name' => 'sourceIp', 'tagName' => 'SourceIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'resourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Biz' => [ 'name' => 'biz', 'tagName' => 'Biz', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TicketId' => [ 'name' => 'ticketId', 'tagName' => 'TicketId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Binding' => [ 'name' => 'binding', 'tagName' => 'Binding', 'type' => 'Map', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserData' => [ 'name' => 'userData', 'tagName' => 'UserData', 'type' => 'Map', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'VerifyConfigs' => [ 'name' => 'verifyConfigs', 'tagName' => 'VerifyConfigs', 'type' => 'Map', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0.normal', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.yundun.gateway.provider.api.a00.YundunGatewayA014Service', 'method' => 'execute097', 'invokeType' => 'java.lang.Object', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '100', 'apiDefault' => '1000', 'controlUnit' => 'Second', ], 'name' => 'GetVerifyToken', ], 'GetStatus' => [ 'attributes' => [ 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'GetStatus', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cloudauth', ], 'parameters' => [ 'Parameter' => [ 'SourceIp' => [ 'name' => 'sourceIp', 'tagName' => 'SourceIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'resourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Biz' => [ 'name' => 'biz', 'tagName' => 'Biz', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TicketId' => [ 'name' => 'ticketId', 'tagName' => 'TicketId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0.normal', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.yundun.gateway.provider.api.a00.YundunGatewayA014Service', 'method' => 'execute096', 'invokeType' => 'java.lang.Object', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '200', 'apiDefault' => '1000', 'controlUnit' => 'Second', ], 'name' => 'GetStatus', ], 'GetMaterials' => [ 'attributes' => [ 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'GetMaterials', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cloudauth', ], 'parameters' => [ 'Parameter' => [ 'SourceIp' => [ 'name' => 'sourceIp', 'tagName' => 'SourceIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'resourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Biz' => [ 'name' => 'biz', 'tagName' => 'Biz', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TicketId' => [ 'name' => 'ticketId', 'tagName' => 'TicketId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0.normal', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.yundun.gateway.provider.api.a00.YundunGatewayA014Service', 'method' => 'execute095', 'invokeType' => 'java.lang.Object', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '60', 'apiDefault' => '1000', 'controlUnit' => 'Second', ], 'name' => 'GetMaterials', ], 'DetectFaceAttributes' => [ 'attributes' => [ 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'DetectFaceAttributes', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cloudauth', ], 'parameters' => [ 'Parameter' => [ 'SourceIp' => [ 'name' => 'sourceIp', 'tagName' => 'SourceIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'resourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MaterialValue' => [ 'name' => 'materialValue', 'tagName' => 'MaterialValue', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DontSaveDB' => [ 'name' => 'dontSaveDB', 'tagName' => 'DontSaveDB', 'type' => 'Boolean', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ClientTag' => [ 'name' => 'clientTag', 'tagName' => 'ClientTag', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MaxNumPhotosPerCategory' => [ 'name' => 'maxNumPhotosPerCategory', 'tagName' => 'MaxNumPhotosPerCategory', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RetAttributes' => [ 'name' => 'retAttributes', 'tagName' => 'RetAttributes', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MaxFaceNum' => [ 'name' => 'maxFaceNum', 'tagName' => 'MaxFaceNum', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0.normal', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.yundun.gateway.provider.api.a00.YundunGatewayA018Service', 'method' => 'execute030', 'invokeType' => 'java.lang.Object', 'timeout' => '6000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '30', 'apiDefault' => '300', 'controlUnit' => 'Second', ], 'name' => 'DetectFaceAttributes', ], 'CompareFaces' => [ 'attributes' => [ 'version' => '2018-08-07', 'showJsonItemName' => 'true', 'name' => 'CompareFaces', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Cloudauth', ], 'parameters' => [ 'Parameter' => [ 'SourceIp' => [ 'name' => 'sourceIp', 'tagName' => 'SourceIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ResourceOwnerId' => [ 'name' => 'resourceOwnerId', 'tagName' => 'ResourceOwnerId', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TargetImageType' => [ 'name' => 'targetImageType', 'tagName' => 'TargetImageType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SourceImageType' => [ 'name' => 'sourceImageType', 'tagName' => 'SourceImageType', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SourceImageValue' => [ 'name' => 'sourceImageValue', 'tagName' => 'SourceImageValue', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TargetImageValue' => [ 'name' => 'targetImageValue', 'tagName' => 'TargetImageValue', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0.normal', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.yundun.gateway.provider.api.a00.YundunGatewayA014Service', 'method' => 'execute094', 'invokeType' => 'java.lang.Object', 'timeout' => '6000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => [ 'userDefault' => '30', 'apiDefault' => '300', 'controlUnit' => 'Second', ], 'name' => 'CompareFaces', ], ],];
