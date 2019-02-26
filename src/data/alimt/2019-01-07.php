<?php
return [ 'product' => [ 'name' => 'alimt', 'domain' => 'mt.aliyuncs.com,mt.[RegionId].aliyuncs.com,mt-inner.[RegionId].aliyuncs.com,mt-share.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'alimt', 'isolationType' => 'outer', 'name' => '2019-01-07', 'apiStyle' => 'RPC', ], 'api' => [ 'TranslateGeneral' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2019-01-07', 'showJsonItemName' => 'false', 'name' => 'TranslateGeneral', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'alimt', 'keepClientResourceOwnerId' => 'false', ], 'parameters' => [ 'Parameter' => [ 'FormatType' => [ 'name' => 'formatType', 'tagName' => 'FormatType', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'SourceLanguage' => [ 'name' => 'sourceLanguage', 'tagName' => 'SourceLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TargetLanguage' => [ 'name' => 'targetLanguage', 'tagName' => 'TargetLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'SourceText' => [ 'name' => 'sourceText', 'tagName' => 'SourceText', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Scene' => [ 'name' => 'scene', 'tagName' => 'Scene', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'docRequired' => 'false', 'checkBlank' => 'false', 'defaultValue' => 'general', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'false', 'signKeyName' => '', 'resultType' => 'Object', 'httpHost' => 'http://mt-console.aliyun.com/api/translate/general', 'timeout' => '3000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '100', 'controlUnit' => 'Second', ], 'name' => 'TranslateGeneral', ], 'TranslateECommerce' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2019-01-07', 'showJsonItemName' => 'false', 'name' => 'TranslateECommerce', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'alimt', 'keepClientResourceOwnerId' => 'false', ], 'parameters' => [ 'Parameter' => [ 'FormatType' => [ 'name' => 'formatType', 'tagName' => 'FormatType', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'TargetLanguage' => [ 'name' => 'targetLanguage', 'tagName' => 'TargetLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'SourceLanguage' => [ 'name' => 'sourceLanguage', 'tagName' => 'SourceLanguage', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'SourceText' => [ 'name' => 'sourceText', 'tagName' => 'SourceText', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], 'Scene' => [ 'name' => 'scene', 'tagName' => 'Scene', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'docRequired' => 'true', 'checkBlank' => 'false', 'visibility' => 'Public', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'false', 'resultType' => 'Object', 'httpHost' => 'http://mt-console.aliyun.com/api/translate/ecommerce', 'timeout' => '3000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'method' => 'POST|GET', ], 'FlowControl' => [ 'apiDefault' => '100', 'controlUnit' => 'Second', ], 'name' => 'TranslateECommerce', ], ],];
