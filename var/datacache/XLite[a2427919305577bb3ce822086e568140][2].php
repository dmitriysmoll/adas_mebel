<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:434:"SELECT x0_.code AS code0, x0_.id AS id1, x0_.code3 AS code32, x0_.enabled AS enabled3, x1_.state_id AS state_id4, x1_.state AS state5, x1_.code AS code6, x0_.currency_id AS currency_id7, x1_.country_code AS country_code8 FROM xc_countries x0_ LEFT JOIN xc_country_translations x2_ ON x0_.code = x2_.id AND (x2_.code = ?) LEFT JOIN xc_states x1_ ON x0_.code = x1_.country_code WHERE x0_.enabled = ? ORDER BY x0_.code ASC, x1_.state ASC";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":14:{s:7:"isMixed";b:0;s:8:"aliasMap";a:2:{s:1:"c";s:19:"XLite\Model\Country";s:1:"s";s:17:"XLite\Model\State";}s:11:"relationMap";a:1:{s:1:"s";s:6:"states";}s:14:"parentAliasMap";a:1:{s:1:"s";s:1:"c";}s:13:"fieldMappings";a:7:{s:5:"code0";s:4:"code";s:3:"id1";s:2:"id";s:6:"code32";s:5:"code3";s:8:"enabled3";s:7:"enabled";s:9:"state_id4";s:8:"state_id";s:6:"state5";s:5:"state";s:5:"code6";s:4:"code";}s:14:"scalarMappings";a:0:{}s:12:"typeMappings";a:0:{}s:14:"entityMappings";a:1:{s:1:"c";N;}s:12:"metaMappings";a:2:{s:12:"currency_id7";s:11:"currency_id";s:13:"country_code8";s:12:"country_code";}s:14:"columnOwnerMap";a:9:{s:5:"code0";s:1:"c";s:3:"id1";s:1:"c";s:6:"code32";s:1:"c";s:8:"enabled3";s:1:"c";s:9:"state_id4";s:1:"s";s:6:"state5";s:1:"s";s:5:"code6";s:1:"s";s:12:"currency_id7";s:1:"c";s:13:"country_code8";s:1:"s";}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:7:{s:5:"code0";s:19:"XLite\Model\Country";s:3:"id1";s:19:"XLite\Model\Country";s:6:"code32";s:19:"XLite\Model\Country";s:8:"enabled3";s:19:"XLite\Model\Country";s:9:"state_id4";s:17:"XLite\Model\State";s:6:"state5";s:17:"XLite\Model\State";s:5:"code6";s:17:"XLite\Model\State";}s:18:"isIdentifierColumn";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:2:{s:3:"lng";a:1:{i:0;i:0;}s:6:"enable";a:1:{i:0;i:1;}}}