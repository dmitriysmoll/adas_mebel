<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:344:"SELECT x0_.zone_id AS zone_id0, x0_.zone_name AS zone_name1, x0_.is_default AS is_default2, x1_.element_id AS element_id3, x1_.element_value AS element_value4, x1_.element_type AS element_type5, x1_.zone_id AS zone_id6 FROM xc_zones x0_ LEFT JOIN xc_zone_elements x1_ ON x0_.zone_id = x1_.zone_id ORDER BY x0_.is_default DESC, x0_.zone_name ASC";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":14:{s:7:"isMixed";b:0;s:8:"aliasMap";a:2:{s:1:"z";s:16:"XLite\Model\Zone";s:2:"ze";s:23:"XLite\Model\ZoneElement";}s:11:"relationMap";a:1:{s:2:"ze";s:13:"zone_elements";}s:14:"parentAliasMap";a:1:{s:2:"ze";s:1:"z";}s:13:"fieldMappings";a:6:{s:8:"zone_id0";s:7:"zone_id";s:10:"zone_name1";s:9:"zone_name";s:11:"is_default2";s:10:"is_default";s:11:"element_id3";s:10:"element_id";s:14:"element_value4";s:13:"element_value";s:13:"element_type5";s:12:"element_type";}s:14:"scalarMappings";a:0:{}s:12:"typeMappings";a:0:{}s:14:"entityMappings";a:1:{s:1:"z";N;}s:12:"metaMappings";a:1:{s:8:"zone_id6";s:7:"zone_id";}s:14:"columnOwnerMap";a:7:{s:8:"zone_id0";s:1:"z";s:10:"zone_name1";s:1:"z";s:11:"is_default2";s:1:"z";s:11:"element_id3";s:2:"ze";s:14:"element_value4";s:2:"ze";s:13:"element_type5";s:2:"ze";s:8:"zone_id6";s:2:"ze";}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:6:{s:8:"zone_id0";s:16:"XLite\Model\Zone";s:10:"zone_name1";s:16:"XLite\Model\Zone";s:11:"is_default2";s:16:"XLite\Model\Zone";s:11:"element_id3";s:23:"XLite\Model\ZoneElement";s:14:"element_value4";s:23:"XLite\Model\ZoneElement";s:13:"element_type5";s:23:"XLite\Model\ZoneElement";}s:18:"isIdentifierColumn";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:0:{}}