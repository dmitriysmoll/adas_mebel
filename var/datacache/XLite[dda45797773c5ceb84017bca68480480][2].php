<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:696:"SELECT x0_.category_id AS category_id0, x0_.lpos AS lpos1, x0_.rpos AS rpos2, x0_.enabled AS enabled3, x0_.show_title AS show_title4, x0_.depth AS depth5, x0_.pos AS pos6, x0_.root_category_look AS root_category_look7, x0_.cleanURL AS cleanURL8, x0_.parent_id AS parent_id9 FROM xc_categories x0_ LEFT JOIN xc_category_translations x1_ ON x0_.category_id = x1_.id AND (x1_.code = ?) LEFT JOIN xc_category_membership_links x3_ ON x0_.category_id = x3_.category_id LEFT JOIN xc_memberships x2_ ON x2_.membership_id = x3_.membership_id WHERE x0_.enabled = ? AND x2_.membership_id IS NULL AND x0_.category_id <> ? AND (x0_.lpos BETWEEN 1 AND 18) AND (x0_.rpos BETWEEN 19 AND 28) ORDER BY x0_.lpos ASC";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":14:{s:7:"isMixed";b:0;s:8:"aliasMap";a:1:{s:1:"c";s:20:"XLite\Model\Category";}s:11:"relationMap";a:0:{}s:14:"parentAliasMap";a:0:{}s:13:"fieldMappings";a:9:{s:12:"category_id0";s:11:"category_id";s:5:"lpos1";s:4:"lpos";s:5:"rpos2";s:4:"rpos";s:8:"enabled3";s:7:"enabled";s:11:"show_title4";s:10:"show_title";s:6:"depth5";s:5:"depth";s:4:"pos6";s:3:"pos";s:19:"root_category_look7";s:18:"root_category_look";s:9:"cleanURL8";s:8:"cleanURL";}s:14:"scalarMappings";a:0:{}s:12:"typeMappings";a:0:{}s:14:"entityMappings";a:1:{s:1:"c";N;}s:12:"metaMappings";a:1:{s:10:"parent_id9";s:9:"parent_id";}s:14:"columnOwnerMap";a:10:{s:12:"category_id0";s:1:"c";s:5:"lpos1";s:1:"c";s:5:"rpos2";s:1:"c";s:8:"enabled3";s:1:"c";s:11:"show_title4";s:1:"c";s:6:"depth5";s:1:"c";s:4:"pos6";s:1:"c";s:19:"root_category_look7";s:1:"c";s:9:"cleanURL8";s:1:"c";s:10:"parent_id9";s:1:"c";}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:9:{s:12:"category_id0";s:20:"XLite\Model\Category";s:5:"lpos1";s:20:"XLite\Model\Category";s:5:"rpos2";s:20:"XLite\Model\Category";s:8:"enabled3";s:20:"XLite\Model\Category";s:11:"show_title4";s:20:"XLite\Model\Category";s:6:"depth5";s:20:"XLite\Model\Category";s:4:"pos6";s:20:"XLite\Model\Category";s:19:"root_category_look7";s:20:"XLite\Model\Category";s:9:"cleanURL8";s:20:"XLite\Model\Category";}s:18:"isIdentifierColumn";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:3:{s:3:"lng";a:1:{i:0;i:0;}s:7:"enabled";a:1:{i:0;i:1;}s:6:"rootId";a:1:{i:0;i:2;}}}