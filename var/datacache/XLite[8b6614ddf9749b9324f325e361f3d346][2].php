<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:409:"SELECT COUNT(DISTINCT x0_.product_id) AS sclr0 FROM xc_products x0_ LEFT JOIN xc_product_translations x1_ ON x0_.product_id = x1_.id AND (x1_.code = ?) INNER JOIN xc_category_products x2_ ON x0_.product_id = x2_.product_id INNER JOIN xc_categories x3_ ON x2_.category_id = x3_.category_id INNER JOIN xc_inventory x4_ ON x0_.product_id = x4_.id WHERE x3_.lpos BETWEEN 13 AND 14 ORDER BY x2_.orderby ASC LIMIT 1";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":14:{s:7:"isMixed";b:0;s:8:"aliasMap";a:0:{}s:11:"relationMap";a:0:{}s:14:"parentAliasMap";a:0:{}s:13:"fieldMappings";a:0:{}s:14:"scalarMappings";a:1:{s:5:"sclr0";i:1;}s:12:"typeMappings";a:1:{s:5:"sclr0";s:6:"string";}s:14:"entityMappings";a:0:{}s:12:"metaMappings";a:0:{}s:14:"columnOwnerMap";a:0:{}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:0:{}s:18:"isIdentifierColumn";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:1:{s:3:"lng";a:1:{i:0;i:0;}}}