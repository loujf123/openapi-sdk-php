<?php
return [ 'product' => [ 'name' => 'Httpdns', 'domain' => 'httpdns-api.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Httpdns', 'name' => '2016-02-01', ], 'api' => [ 'SetIPRegionResult' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'SetIPRegionResult', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Payload' => [ 'name' => 'payload', 'tagName' => 'Payload', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'setIPRegionResult', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.SetIPRegionResultRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'SetIPRegionResult', ], 'GetIPRegionResult' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'GetIPRegionResult', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'getIPRegionResult', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.GetIPRegionResultRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'GetIPRegionResult', ], 'SetGrayIPRegion' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'SetGrayIPRegion', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Payload' => [ 'name' => 'payload', 'tagName' => 'Payload', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'setGrayIPRegion', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.SetGrayRegionRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'POST', ], 'FlowControl' => NULL, 'name' => 'SetGrayIPRegion', ], 'GetGrayIPRegion' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'GetGrayIPRegion', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'getGrayIPRegion', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.GetGrayRegionRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS', 'method' => 'GET', ], 'FlowControl' => NULL, 'name' => 'GetGrayIPRegion', ], 'GetResolveCountSummary' => [ 'attributes' => [ 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'GetResolveCountSummary', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'Granularity' => [ 'name' => 'granularity', 'tagName' => 'Granularity', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TimeSpan' => [ 'name' => 'timeSpan', 'tagName' => 'TimeSpan', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'getResolveCountSummary', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.GetResolveCountSummaryRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'GetResolveCountSummary', ], 'SwitchUnsignedInterface' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'SwitchUnsignedInterface', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'EnableInterface' => [ 'name' => 'enableInterface', 'tagName' => 'EnableInterface', 'type' => 'Boolean', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'switchUnsignedInterface', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.SwitchUnsignedInterfaceRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'SwitchUnsignedInterface', ], 'ResolveDomain' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'ResolveDomain', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SourceIp' => [ 'name' => 'sourceIp', 'tagName' => 'SourceIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'resolveDomain', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.ResolveDomainRequest', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'ResolveDomain', ], 'ListDomains' => [ 'attributes' => [ 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'ListDomains', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'PageNumber' => [ 'name' => 'pageNumber', 'tagName' => 'PageNumber', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => '1', 'minValue' => '1', ], 'PageSize' => [ 'name' => 'pageSize', 'tagName' => 'PageSize', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => '20', 'minValue' => '1', 'maxValue' => '100', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'listDomains', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.ListDomainsRequest', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'ListDomains', ], 'GetResolveStatistics' => [ 'attributes' => [ 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'GetResolveStatistics', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Granularity' => [ 'name' => 'granularity', 'tagName' => 'Granularity', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TimeSpan' => [ 'name' => 'timeSpan', 'tagName' => 'TimeSpan', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ProtocolName' => [ 'name' => 'protocolName', 'tagName' => 'ProtocolName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'http', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'getResolveStatistics', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.GetResolveStatisticsRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'GetResolveStatistics', ], 'GetAccountInfo' => [ 'attributes' => [ 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'GetAccountInfo', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => NULL, 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'getAccountInfo', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.GetAccountInfoRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'GetAccountInfo', ], 'DescribeDomains' => [ 'attributes' => [ 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'DescribeDomains', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'AccountId' => [ 'name' => 'accountId', 'tagName' => 'AccountId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PageNumber' => [ 'name' => 'pageNumber', 'tagName' => 'PageNumber', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => '1', 'minValue' => '1', ], 'PageSize' => [ 'name' => 'pageSize', 'tagName' => 'PageSize', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => '20', 'minValue' => '1', 'maxValue' => '100', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'describeDomains', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.DescribeDomainsRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DescribeDomains', ], 'DeleteDomain' => [ 'attributes' => [ 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'DeleteDomain', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'AccountId' => [ 'name' => 'accountId', 'tagName' => 'AccountId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'deleteDomain', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.DeleteDomainRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'DeleteDomain', ], 'AddDomain' => [ 'attributes' => [ 'version' => '2016-02-01', 'showJsonItemName' => 'true', 'name' => 'AddDomain', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Httpdns', ], 'parameters' => [ 'Parameter' => [ 'AccountId' => [ 'name' => 'accountId', 'tagName' => 'AccountId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DomainName' => [ 'name' => 'domainName', 'tagName' => 'DomainName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0-SNAPSHOT', 'protocol' => 'hsf', 'interface' => 'com.aliyun.ams.httpdns.openapi.v20160201.OpenAPIService', 'method' => 'addDomain', 'group' => 'HSF', 'invokeType' => 'com.aliyun.ams.httpdns.openapi.v20160201.request.AddDomainRequest', 'timeout' => '2000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => NULL, 'name' => 'AddDomain', ], ],];
