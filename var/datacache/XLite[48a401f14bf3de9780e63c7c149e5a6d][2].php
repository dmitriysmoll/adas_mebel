<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:1871:"SELECT x0_.order_id AS order_id0, x0_.shipping_id AS shipping_id1, x0_.shipping_method_name AS shipping_method_name2, x0_.payment_method_name AS payment_method_name3, x0_.tracking AS tracking4, x0_.date AS date5, x0_.lastRenewDate AS lastRenewDate6, x0_.notes AS notes7, x0_.adminNotes AS adminNotes8, x0_.orderNumber AS orderNumber9, x0_.total AS total10, x0_.subtotal AS subtotal11, x1_.profile_id AS profile_id12, x1_.login AS login13, x1_.password AS password14, x1_.password_hint AS password_hint15, x1_.password_hint_answer AS password_hint_answer16, x1_.passwordResetKey AS passwordResetKey17, x1_.passwordResetKeyDate AS passwordResetKeyDate18, x1_.access_level AS access_level19, x1_.cms_profile_id AS cms_profile_id20, x1_.cms_name AS cms_name21, x1_.added AS added22, x1_.first_login AS first_login23, x1_.last_login AS last_login24, x1_.status AS status25, x1_.referer AS referer26, x1_.language AS language27, x1_.last_shipping_id AS last_shipping_id28, x1_.last_payment_id AS last_payment_id29, x1_.anonymous AS anonymous30, x1_.forceChangePassword AS forceChangePassword31, x2_.currency_id AS currency_id32, x2_.code AS code33, x2_.symbol AS symbol34, x2_.prefix AS prefix35, x2_.suffix AS suffix36, x2_.e AS e37, x2_.decimalDelimiter AS decimalDelimiter38, x2_.thousandDelimiter AS thousandDelimiter39, x0_.is_order AS is_order40, x0_.profile_id AS profile_id41, x0_.orig_profile_id AS orig_profile_id42, x0_.payment_status_id AS payment_status_id43, x0_.shipping_status_id AS shipping_status_id44, x0_.currency_id AS currency_id45, x1_.order_id AS order_id46, x1_.membership_id AS membership_id47, x1_.pending_membership_id AS pending_membership_id48 FROM xc_orders x0_ LEFT JOIN xc_profiles x1_ ON x0_.profile_id = x1_.profile_id LEFT JOIN xc_currencies x2_ ON x0_.currency_id = x2_.currency_id WHERE (x0_.order_id = ?) AND x0_.is_order IN ('0') LIMIT 1";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":14:{s:7:"isMixed";b:0;s:8:"aliasMap";a:3:{s:1:"c";s:16:"XLite\Model\Cart";s:7:"profile";s:19:"XLite\Model\Profile";s:8:"currency";s:20:"XLite\Model\Currency";}s:11:"relationMap";a:2:{s:7:"profile";s:7:"profile";s:8:"currency";s:8:"currency";}s:14:"parentAliasMap";a:2:{s:7:"profile";s:1:"c";s:8:"currency";s:1:"c";}s:13:"fieldMappings";a:40:{s:9:"order_id0";s:8:"order_id";s:12:"shipping_id1";s:11:"shipping_id";s:21:"shipping_method_name2";s:20:"shipping_method_name";s:20:"payment_method_name3";s:19:"payment_method_name";s:9:"tracking4";s:8:"tracking";s:5:"date5";s:4:"date";s:14:"lastRenewDate6";s:13:"lastRenewDate";s:6:"notes7";s:5:"notes";s:11:"adminNotes8";s:10:"adminNotes";s:12:"orderNumber9";s:11:"orderNumber";s:7:"total10";s:5:"total";s:10:"subtotal11";s:8:"subtotal";s:12:"profile_id12";s:10:"profile_id";s:7:"login13";s:5:"login";s:10:"password14";s:8:"password";s:15:"password_hint15";s:13:"password_hint";s:22:"password_hint_answer16";s:20:"password_hint_answer";s:18:"passwordResetKey17";s:16:"passwordResetKey";s:22:"passwordResetKeyDate18";s:20:"passwordResetKeyDate";s:14:"access_level19";s:12:"access_level";s:16:"cms_profile_id20";s:14:"cms_profile_id";s:10:"cms_name21";s:8:"cms_name";s:7:"added22";s:5:"added";s:13:"first_login23";s:11:"first_login";s:12:"last_login24";s:10:"last_login";s:8:"status25";s:6:"status";s:9:"referer26";s:7:"referer";s:10:"language27";s:8:"language";s:18:"last_shipping_id28";s:16:"last_shipping_id";s:17:"last_payment_id29";s:15:"last_payment_id";s:11:"anonymous30";s:9:"anonymous";s:21:"forceChangePassword31";s:19:"forceChangePassword";s:13:"currency_id32";s:11:"currency_id";s:6:"code33";s:4:"code";s:8:"symbol34";s:6:"symbol";s:8:"prefix35";s:6:"prefix";s:8:"suffix36";s:6:"suffix";s:3:"e37";s:1:"e";s:18:"decimalDelimiter38";s:16:"decimalDelimiter";s:19:"thousandDelimiter39";s:17:"thousandDelimiter";}s:14:"scalarMappings";a:0:{}s:12:"typeMappings";a:0:{}s:14:"entityMappings";a:1:{s:1:"c";N;}s:12:"metaMappings";a:9:{s:10:"is_order40";s:8:"is_order";s:12:"profile_id41";s:10:"profile_id";s:17:"orig_profile_id42";s:15:"orig_profile_id";s:19:"payment_status_id43";s:17:"payment_status_id";s:20:"shipping_status_id44";s:18:"shipping_status_id";s:13:"currency_id45";s:11:"currency_id";s:10:"order_id46";s:8:"order_id";s:15:"membership_id47";s:13:"membership_id";s:23:"pending_membership_id48";s:21:"pending_membership_id";}s:14:"columnOwnerMap";a:49:{s:9:"order_id0";s:1:"c";s:12:"shipping_id1";s:1:"c";s:21:"shipping_method_name2";s:1:"c";s:20:"payment_method_name3";s:1:"c";s:9:"tracking4";s:1:"c";s:5:"date5";s:1:"c";s:14:"lastRenewDate6";s:1:"c";s:6:"notes7";s:1:"c";s:11:"adminNotes8";s:1:"c";s:12:"orderNumber9";s:1:"c";s:7:"total10";s:1:"c";s:10:"subtotal11";s:1:"c";s:12:"profile_id12";s:7:"profile";s:7:"login13";s:7:"profile";s:10:"password14";s:7:"profile";s:15:"password_hint15";s:7:"profile";s:22:"password_hint_answer16";s:7:"profile";s:18:"passwordResetKey17";s:7:"profile";s:22:"passwordResetKeyDate18";s:7:"profile";s:14:"access_level19";s:7:"profile";s:16:"cms_profile_id20";s:7:"profile";s:10:"cms_name21";s:7:"profile";s:7:"added22";s:7:"profile";s:13:"first_login23";s:7:"profile";s:12:"last_login24";s:7:"profile";s:8:"status25";s:7:"profile";s:9:"referer26";s:7:"profile";s:10:"language27";s:7:"profile";s:18:"last_shipping_id28";s:7:"profile";s:17:"last_payment_id29";s:7:"profile";s:11:"anonymous30";s:7:"profile";s:21:"forceChangePassword31";s:7:"profile";s:13:"currency_id32";s:8:"currency";s:6:"code33";s:8:"currency";s:8:"symbol34";s:8:"currency";s:8:"prefix35";s:8:"currency";s:8:"suffix36";s:8:"currency";s:3:"e37";s:8:"currency";s:18:"decimalDelimiter38";s:8:"currency";s:19:"thousandDelimiter39";s:8:"currency";s:10:"is_order40";s:1:"c";s:12:"profile_id41";s:1:"c";s:17:"orig_profile_id42";s:1:"c";s:19:"payment_status_id43";s:1:"c";s:20:"shipping_status_id44";s:1:"c";s:13:"currency_id45";s:1:"c";s:10:"order_id46";s:7:"profile";s:15:"membership_id47";s:7:"profile";s:23:"pending_membership_id48";s:7:"profile";}s:20:"discriminatorColumns";a:1:{s:1:"c";s:10:"is_order40";}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:40:{s:9:"order_id0";s:16:"XLite\Model\Cart";s:12:"shipping_id1";s:16:"XLite\Model\Cart";s:21:"shipping_method_name2";s:16:"XLite\Model\Cart";s:20:"payment_method_name3";s:16:"XLite\Model\Cart";s:9:"tracking4";s:16:"XLite\Model\Cart";s:5:"date5";s:16:"XLite\Model\Cart";s:14:"lastRenewDate6";s:16:"XLite\Model\Cart";s:6:"notes7";s:16:"XLite\Model\Cart";s:11:"adminNotes8";s:16:"XLite\Model\Cart";s:12:"orderNumber9";s:16:"XLite\Model\Cart";s:7:"total10";s:16:"XLite\Model\Cart";s:10:"subtotal11";s:16:"XLite\Model\Cart";s:12:"profile_id12";s:19:"XLite\Model\Profile";s:7:"login13";s:19:"XLite\Model\Profile";s:10:"password14";s:19:"XLite\Model\Profile";s:15:"password_hint15";s:19:"XLite\Model\Profile";s:22:"password_hint_answer16";s:19:"XLite\Model\Profile";s:18:"passwordResetKey17";s:19:"XLite\Model\Profile";s:22:"passwordResetKeyDate18";s:19:"XLite\Model\Profile";s:14:"access_level19";s:19:"XLite\Model\Profile";s:16:"cms_profile_id20";s:19:"XLite\Model\Profile";s:10:"cms_name21";s:19:"XLite\Model\Profile";s:7:"added22";s:19:"XLite\Model\Profile";s:13:"first_login23";s:19:"XLite\Model\Profile";s:12:"last_login24";s:19:"XLite\Model\Profile";s:8:"status25";s:19:"XLite\Model\Profile";s:9:"referer26";s:19:"XLite\Model\Profile";s:10:"language27";s:19:"XLite\Model\Profile";s:18:"last_shipping_id28";s:19:"XLite\Model\Profile";s:17:"last_payment_id29";s:19:"XLite\Model\Profile";s:11:"anonymous30";s:19:"XLite\Model\Profile";s:21:"forceChangePassword31";s:19:"XLite\Model\Profile";s:13:"currency_id32";s:20:"XLite\Model\Currency";s:6:"code33";s:20:"XLite\Model\Currency";s:8:"symbol34";s:20:"XLite\Model\Currency";s:8:"prefix35";s:20:"XLite\Model\Currency";s:8:"suffix36";s:20:"XLite\Model\Currency";s:3:"e37";s:20:"XLite\Model\Currency";s:18:"decimalDelimiter38";s:20:"XLite\Model\Currency";s:19:"thousandDelimiter39";s:20:"XLite\Model\Currency";}s:18:"isIdentifierColumn";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:1:{s:2:"id";a:1:{i:0;i:0;}}}