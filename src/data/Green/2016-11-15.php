<?php
return [ 'product' => [ 'name' => 'Green', 'domain' => 'green.aliyuncs.com,green-share.aliyuncs.com,green.[RegionId].aliyuncs.com,green-vpc.[RegionId].aliyuncs.com,green-share.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Green', 'name' => '2016-11-15', 'apiStyle' => 'RPC', ], 'api' => [ 'TextWordCorrect' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'TextWordCorrect', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'Text' => [ 'name' => 'content', 'tagName' => 'Text', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/text/word_correct', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'TextWordCorrect', ], 'TextKeywordFilter' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'TextKeywordFilter', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'Text' => [ 'name' => 'content', 'tagName' => 'Text', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/text/keyword_filter', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'TextKeywordFilter', ], 'TextAntispamDetection' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'TextAntispamDetection', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'Text' => [ 'name' => 'contents', 'tagName' => 'Text', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '50', 'subType' => 'String', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/text/antispam', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'TextAntispamDetection', ], 'SampleFeedback' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'SampleFeedback', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'TaskId' => [ 'name' => 'taskIds', 'tagName' => 'TaskId', 'type' => 'RepeatList', 'required' => 'true', 'tagPosition' => 'Query', 'maxNumber' => '50', 'subType' => 'String', 'invokeDataType' => 'Json', ], 'Marking' => [ 'name' => 'marking', 'tagName' => 'Marking', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Category' => [ 'name' => 'category', 'tagName' => 'Category', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/sample/feedback', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'SampleFeedback', ], 'PluginAntispamResults' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'PluginAntispamResults', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'BizScene' => [ 'name' => 'bizScene', 'tagName' => 'BizScene', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ClientVersion' => [ 'name' => 'clientVersion', 'tagName' => 'ClientVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostContentType' => [ 'name' => 'contentType', 'tagName' => 'PostContentType', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageIndex' => [ 'name' => 'pageIndex', 'tagName' => 'PageIndex', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageSize' => [ 'name' => 'pageSize', 'tagName' => 'PageSize', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/plugin/antispam/results', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'PluginAntispamResults', ], 'PluginAntispamFeedback' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'PluginAntispamFeedback', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'ClientVersion' => [ 'name' => 'clientVersion', 'tagName' => 'ClientVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ActionResult' => [ 'name' => 'actionResult', 'tagName' => 'ActionResult', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Ids' => [ 'name' => 'ids', 'tagName' => 'Ids', 'type' => 'RepeatList', 'required' => 'true', 'tagPosition' => 'Query', 'maxNumber' => '50', 'subType' => 'String', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/plugin/antispam/feedback', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'PluginAntispamFeedback', ], 'PluginAntispamDetection' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'PluginAntispamDetection', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'BizScene' => [ 'name' => 'bizScene', 'tagName' => 'BizScene', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ClientVersion' => [ 'name' => 'clientVersion', 'tagName' => 'ClientVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserId' => [ 'name' => 'userId', 'tagName' => 'UserId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TopicId' => [ 'name' => 'topicId', 'tagName' => 'TopicId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'FeedId' => [ 'name' => 'feedId', 'tagName' => 'FeedId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Title' => [ 'name' => 'title', 'tagName' => 'Title', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostTime' => [ 'name' => 'postTime', 'tagName' => 'PostTime', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostContent' => [ 'name' => 'postContent', 'tagName' => 'PostContent', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostContentType' => [ 'name' => 'contentType', 'tagName' => 'PostContentType', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DynamicProp' => [ 'name' => 'dynamicProp', 'tagName' => 'DynamicProp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/plugin/antispam/detection', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'PluginAntispamDetection', ], 'ImageResults' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'ImageResults', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'TaskId' => [ 'name' => 'taskIds', 'tagName' => 'TaskId', 'type' => 'RepeatList', 'required' => 'true', 'tagPosition' => 'Query', 'maxNumber' => '100', 'subType' => 'String', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/image/results', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'GET', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'ImageResults', ], 'ImageDetection' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'ImageDetection', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'Async' => [ 'name' => 'async', 'tagName' => 'Async', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'false', ], 'NotifyUrl' => [ 'name' => 'notifyUrl', 'tagName' => 'NotifyUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'NotifySeed' => [ 'name' => 'notifySeed', 'tagName' => 'NotifySeed', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ImageUrl' => [ 'name' => 'imageUrls', 'tagName' => 'ImageUrl', 'type' => 'RepeatList', 'required' => 'true', 'tagPosition' => 'Query', 'maxNumber' => '50', 'subType' => 'String', 'invokeDataType' => 'Json', ], 'Scene' => [ 'name' => 'scenes', 'tagName' => 'Scene', 'type' => 'RepeatList', 'required' => 'true', 'tagPosition' => 'Query', 'maxNumber' => '10', 'subType' => 'String', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/image/detection', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'ImageDetection', ], 'AntispamResults' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'AntispamResults', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'DataId' => [ 'name' => 'dataIds', 'tagName' => 'DataId', 'type' => 'RepeatList', 'required' => 'true', 'tagPosition' => 'Query', 'maxNumber' => '50', 'subType' => 'String', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/antispam/results', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'AntispamResults', ], 'AntispamDetection' => [ 'attributes' => [ 'version' => '2016-11-15', 'showJsonItemName' => 'true', 'name' => 'AntispamDetection', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Green', ], 'parameters' => [ 'Parameter' => [ 'DataId' => [ 'name' => 'dataId', 'tagName' => 'DataId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostId' => [ 'name' => 'postId', 'tagName' => 'PostId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SceneId' => [ 'name' => 'sceneId', 'tagName' => 'SceneId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostNick' => [ 'name' => 'postNick', 'tagName' => 'PostNick', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostIp' => [ 'name' => 'postIp', 'tagName' => 'PostIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostMac' => [ 'name' => 'postMac', 'tagName' => 'PostMac', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostTime' => [ 'name' => 'postTime', 'tagName' => 'PostTime', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MachineCode' => [ 'name' => 'machineCode', 'tagName' => 'MachineCode', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ParentDataId' => [ 'name' => 'parentDataId', 'tagName' => 'ParentDataId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Title' => [ 'name' => 'title', 'tagName' => 'Title', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PostContent' => [ 'name' => 'content', 'tagName' => 'PostContent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ImageUrl' => [ 'name' => 'imageUrls', 'tagName' => 'ImageUrl', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '50', 'subType' => 'String', 'invokeDataType' => 'Json', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://green.${regionId}.alibaba-inc.com/api/rpc/antispam/detection', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP', 'method' => 'POST', ], 'FlowControl' => [ 'userDefault' => '100', 'controlUnit' => 'Minute', 'special' => 'SpecialGreen20151228', ], 'name' => 'AntispamDetection', ], ],];
