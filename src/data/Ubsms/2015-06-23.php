<?php
return [ 'product' => [ 'name' => 'Ubsms', 'domain' => 'ubsms.aliyuncs.com,ubsms.[RegionId].aliyuncs.com,ubsms-center.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Ubsms', 'name' => '2015-06-23', ], 'api' => [ 'DescribeBusinessStatusOfUser' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2015-06-23', 'showJsonItemName' => 'false', 'name' => 'DescribeBusinessStatusOfUser', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ubsms', 'controlPolicy' => 'ControlPolicyForUbsms', ], 'parameters' => [ 'Parameter' => [ 'callerBid' => [ 'name' => 'callerBid', 'tagName' => 'callerBid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Uid' => [ 'name' => 'uid', 'tagName' => 'Uid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ServiceCode' => [ 'name' => 'serviceCode', 'tagName' => 'ServiceCode', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey' => [ 'name' => 'statusKeys', 'tagName' => 'StatusKey', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '100', 'subType' => 'String', 'invokeDataType' => 'Map', ], 'Password' => [ 'name' => 'password', 'tagName' => 'Password', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'C71yxnnvXJmGFfw6', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.ubsms.pop.v20150623.api.DescribeBusinessStatusOfUser', 'method' => 'describeBusinessStatusOfUser', 'invokeType' => 'com.aliyun.ubsms.pop.v20150623.request.UidRequest', 'timeout' => '5000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DescribeBusinessStatusOfUser', ], 'DescribeBidUserBusinessStatus' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2015-06-23', 'showJsonItemName' => 'false', 'name' => 'DescribeBidUserBusinessStatus', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ubsms', 'controlPolicy' => 'ControlPolicyForUbsms', ], 'parameters' => [ 'Parameter' => [ 'callerBid' => [ 'name' => 'callerBid', 'tagName' => 'callerBid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Bid' => [ 'name' => 'bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ServiceCode' => [ 'name' => 'serviceCode', 'tagName' => 'ServiceCode', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey' => [ 'name' => 'statusKeys', 'tagName' => 'StatusKey', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '100', 'subType' => 'String', 'invokeDataType' => 'Map', ], 'Password' => [ 'name' => 'password', 'tagName' => 'Password', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'C71yxnnvXJmGFfw6', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.ubsms.pop.v20150623.api.DescribeBidUserBusinessStatus', 'method' => 'describeBidUserBusinessStatus', 'invokeType' => 'com.aliyun.ubsms.pop.v20150623.request.BidRequest', 'timeout' => '5000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DescribeBidUserBusinessStatus', ], 'DescribeBusinessStatus' => [ 'attributes' => [ 'version' => '2015-06-23', 'showJsonItemName' => 'true', 'name' => 'DescribeBusinessStatus', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ubsms', ], 'parameters' => [ 'Parameter' => [ 'callerBid' => [ 'name' => 'callerBid', 'tagName' => 'callerBid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Password' => [ 'name' => 'password', 'tagName' => 'Password', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'C71yxnnvXJmGFfw6', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.ubsms.pop.v20150623.api.DescribeBusinessStatus', 'method' => 'describeBusinessStatus', 'invokeType' => 'com.aliyun.ubsms.pop.v20150623.request.BaseRequest', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DescribeBusinessStatus', ], 'SetUserBusinessStatuses' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2015-06-23', 'showJsonItemName' => 'true', 'name' => 'SetUserBusinessStatuses', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ubsms', 'controlPolicy' => 'ControlPolicyForUbsms', ], 'parameters' => [ 'Parameter' => [ 'Uid' => [ 'name' => 'uid', 'tagName' => 'Uid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ServiceCode' => [ 'name' => 'serviceCode', 'tagName' => 'ServiceCode', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey1' => [ 'name' => 'statusKey1', 'tagName' => 'StatusKey1', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue1' => [ 'name' => 'statusValue1', 'tagName' => 'StatusValue1', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey2' => [ 'name' => 'statusKey2', 'tagName' => 'StatusKey2', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue2' => [ 'name' => 'statusValue2', 'tagName' => 'StatusValue2', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey3' => [ 'name' => 'statusKey3', 'tagName' => 'StatusKey3', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue3' => [ 'name' => 'statusValue3', 'tagName' => 'StatusValue3', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey4' => [ 'name' => 'statusKey4', 'tagName' => 'StatusKey4', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue4' => [ 'name' => 'statusValue4', 'tagName' => 'StatusValue4', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey5' => [ 'name' => 'statusKey5', 'tagName' => 'StatusKey5', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue5' => [ 'name' => 'statusValue5', 'tagName' => 'StatusValue5', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey6' => [ 'name' => 'statusKey6', 'tagName' => 'StatusKey6', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue6' => [ 'name' => 'statusValue6', 'tagName' => 'StatusValue6', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey7' => [ 'name' => 'statusKey7', 'tagName' => 'StatusKey7', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue7' => [ 'name' => 'statusValue7', 'tagName' => 'StatusValue7', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey8' => [ 'name' => 'statusKey8', 'tagName' => 'StatusKey8', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue8' => [ 'name' => 'statusValue8', 'tagName' => 'StatusValue8', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey9' => [ 'name' => 'statusKey9', 'tagName' => 'StatusKey9', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue9' => [ 'name' => 'statusValue9', 'tagName' => 'StatusValue9', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey10' => [ 'name' => 'statusKey10', 'tagName' => 'StatusKey10', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue10' => [ 'name' => 'statusValue10', 'tagName' => 'StatusValue10', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Password' => [ 'name' => 'password', 'tagName' => 'Password', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'C71yxnnvXJmGFfw6', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.ubsms.pop.v20150623.api.SetUserBusinessStatuses', 'method' => 'setUserBusinessStatuses', 'invokeType' => 'com.aliyun.ubsms.pop.v20150623.request.SetUserBusinessStatusesRequest', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'SetUserBusinessStatuses', ], 'NotifyUserBusinessCommand' => [ 'attributes' => [ 'version' => '2015-06-23', 'showJsonItemName' => 'true', 'name' => 'NotifyUserBusinessCommand', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ubsms', ], 'parameters' => [ 'Parameter' => [ 'Uid' => [ 'name' => 'uid', 'tagName' => 'Uid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ServiceCode' => [ 'name' => 'serviceCode', 'tagName' => 'ServiceCode', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Cmd' => [ 'name' => 'cmd', 'tagName' => 'Cmd', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Region' => [ 'name' => 'region', 'tagName' => 'Region', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'InstanceId' => [ 'name' => 'instanceId', 'tagName' => 'InstanceId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ClientToken' => [ 'name' => 'clientToken', 'tagName' => 'ClientToken', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Password' => [ 'name' => 'password', 'tagName' => 'Password', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'C71yxnnvXJmGFfw6', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.ubsms.pop.v20150623.api.NotifyUserBusinessCommand', 'method' => 'notifyCommand', 'invokeType' => 'com.aliyun.ubsms.pop.v20150623.request.NotifyUserBusinessCommandRequest', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'NotifyUserBusinessCommand', ], 'SetUserBusinessStatus' => [ 'attributes' => [ 'version' => '2015-06-23', 'name' => 'SetUserBusinessStatus', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ubsms', ], 'parameters' => [ 'Parameter' => [ 'Uid' => [ 'name' => 'uid', 'tagName' => 'Uid', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Service' => [ 'name' => 'service', 'tagName' => 'Service', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusKey' => [ 'name' => 'status', 'tagName' => 'StatusKey', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'StatusValue' => [ 'name' => 'value', 'tagName' => 'StatusValue', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'dubbo', 'interface' => 'com.aliyun.ubsms.pop.v20150623.api.SetUserBusinessStatus', 'method' => 'setUserBusinessStatus', 'invokeType' => 'com.aliyun.ubsms.pop.v20150623.request.SetUserBusinessStatusRequest', 'timeout' => '3000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'SetUserBusinessStatus', ], ],];
