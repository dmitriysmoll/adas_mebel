<?php die(); ?>          0O:34:"Doctrine\ORM\Mapping\ClassMetadata":19:{s:19:"associationMappings";a:4:{s:6:"object";a:19:{s:9:"fieldName";s:6:"object";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:9:"object_id";s:20:"referencedColumnName";s:10:"product_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;}}s:7:"cascade";a:2:{i:0;s:5:"merge";i:1;s:6:"detach";}s:10:"inversedBy";s:11:"order_items";s:12:"targetEntity";s:19:"XLite\Model\Product";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:21:"XLite\Model\OrderItem";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:1;s:15:"isCascadeDetach";b:1;s:24:"sourceToTargetKeyColumns";a:1:{s:9:"object_id";s:10:"product_id";}s:20:"joinColumnFieldNames";a:1:{s:9:"object_id";s:9:"object_id";}s:24:"targetToSourceKeyColumns";a:1:{s:10:"product_id";s:9:"object_id";}s:13:"orphanRemoval";b:0;}s:5:"order";a:19:{s:9:"fieldName";s:5:"order";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:8:"order_id";s:20:"referencedColumnName";s:8:"order_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;}}s:7:"cascade";a:0:{}s:10:"inversedBy";s:5:"items";s:12:"targetEntity";s:17:"XLite\Model\Order";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:21:"XLite\Model\OrderItem";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:8:"order_id";s:8:"order_id";}s:20:"joinColumnFieldNames";a:1:{s:8:"order_id";s:8:"order_id";}s:24:"targetToSourceKeyColumns";a:1:{s:8:"order_id";s:8:"order_id";}s:13:"orphanRemoval";b:0;}s:10:"surcharges";a:16:{s:9:"fieldName";s:10:"surcharges";s:8:"mappedBy";s:5:"owner";s:12:"targetEntity";s:31:"XLite\Model\OrderItem\Surcharge";s:7:"cascade";a:5:{i:0;s:6:"remove";i:1;s:7:"persist";i:2;s:7:"refresh";i:3;s:5:"merge";i:4;s:6:"detach";}s:13:"orphanRemoval";b:0;s:5:"fetch";i:2;s:7:"orderBy";a:1:{s:2:"id";s:3:"ASC";}s:4:"type";i:4;s:10:"inversedBy";N;s:12:"isOwningSide";b:0;s:12:"sourceEntity";s:21:"XLite\Model\OrderItem";s:15:"isCascadeRemove";b:1;s:16:"isCascadePersist";b:1;s:16:"isCascadeRefresh";b:1;s:14:"isCascadeMerge";b:1;s:15:"isCascadeDetach";b:1;}s:15:"attributeValues";a:15:{s:9:"fieldName";s:15:"attributeValues";s:8:"mappedBy";s:9:"orderItem";s:12:"targetEntity";s:36:"XLite\Model\OrderItem\AttributeValue";s:7:"cascade";a:5:{i:0;s:6:"remove";i:1;s:7:"persist";i:2;s:7:"refresh";i:3;s:5:"merge";i:4;s:6:"detach";}s:13:"orphanRemoval";b:0;s:5:"fetch";i:2;s:4:"type";i:4;s:10:"inversedBy";N;s:12:"isOwningSide";b:0;s:12:"sourceEntity";s:21:"XLite\Model\OrderItem";s:15:"isCascadeRemove";b:1;s:16:"isCascadePersist";b:1;s:16:"isCascadeRefresh";b:1;s:14:"isCascadeMerge";b:1;s:15:"isCascadeDetach";b:1;}}s:11:"columnNames";a:9:{s:7:"item_id";s:7:"item_id";s:4:"name";s:4:"name";s:3:"sku";s:3:"sku";s:5:"price";s:5:"price";s:12:"itemNetPrice";s:12:"itemNetPrice";s:18:"discountedSubtotal";s:18:"discountedSubtotal";s:6:"amount";s:6:"amount";s:5:"total";s:5:"total";s:8:"subtotal";s:8:"subtotal";}s:13:"fieldMappings";a:9:{s:7:"item_id";a:9:{s:9:"fieldName";s:7:"item_id";s:4:"type";s:7:"integer";s:6:"length";N;s:9:"precision";i:0;s:5:"scale";i:0;s:8:"nullable";b:0;s:6:"unique";b:0;s:2:"id";b:1;s:10:"columnName";s:7:"item_id";}s:4:"name";a:8:{s:9:"fieldName";s:4:"name";s:4:"type";s:6:"string";s:6:"length";i:255;s:9:"precision";i:0;s:5:"scale";i:0;s:8:"nullable";b:0;s:6:"unique";b:0;s:10:"columnName";s:4:"name";}s:3:"sku";a:8:{s:9:"fieldName";s:3:"sku";s:4:"type";s:6:"string";s:6:"length";i:32;s:9:"precision";i:0;s:5:"scale";i:0;s:8:"nullable";b:0;s:6:"unique";b:0;s:10:"columnName";s:3:"sku";}s:5:"price";a:9:{s:9:"fieldName";s:5:"price";s:4:"type";s:5:"money";s:6:"length";N;s:9:"precision";i:0;s:5:"scale";i:0;s:8:"nullable";b:0;s:6:"unique";b:0;s:7:"options";a:3:{i:0;O:39:"XLite\Core\Doctrine\Annotation\Behavior":2:{s:4:"list";a:1:{i:0;s:7:"taxable";}s:5:"value";N;}i:1;O:38:"XLite\Core\Doctrine\Annotation\Purpose":3:{s:4:"name";s:3:"net";s:6:"source";s:5:"clear";s:5:"value";N;}i:2;O:38:"XLite\Core\Doctrine\Annotation\Purpose":3:{s:4:"name";s:7:"display";s:6:"source";s:3:"net";s:5:"value";N;}}s:10:"columnName";s:5:"price";}s:12:"itemNetPrice";a:8:{s:9:"fieldName";s:12:"itemNetPrice";s:4:"type";s:7:"decimal";s:6:"length";N;s:9:"precision";i:14;s:5:"scale";i:4;s:8:"nullable";b:0;s:6:"unique";b:0;s:10:"columnName";s:12:"itemNetPrice";}s:18:"discountedSubtotal";a:8:{s:9:"fieldName";s:18:"discountedSubtotal";s:4:"type";s:7:"decimal";s:6:"length";N;s:9:"precision";i:14;s:5:"scale";i:4;s:8:"nullable";b:0;s:6:"unique";b:0;s:10:"columnName";s:18:"discountedSubtotal";}s:6:"amount";a:8:{s:9:"fieldName";s:6:"amount";s:4:"type";s:7:"integer";s:6:"length";N;s:9:"precision";i:0;s:5:"scale";i:0;s:8:"nullable";b:0;s:6:"unique";b:0;s:10:"columnName";s:6:"amount";}s:5:"total";a:8:{s:9:"fieldName";s:5:"total";s:4:"type";s:7:"decimal";s:6:"length";N;s:9:"precision";i:14;s:5:"scale";i:4;s:8:"nullable";b:0;s:6:"unique";b:0;s:10:"columnName";s:5:"total";}s:8:"subtotal";a:8:{s:9:"fieldName";s:8:"subtotal";s:4:"type";s:7:"decimal";s:6:"length";N;s:9:"precision";i:14;s:5:"scale";i:4;s:8:"nullable";b:0;s:6:"unique";b:0;s:10:"columnName";s:8:"subtotal";}}s:10:"fieldNames";a:9:{s:7:"item_id";s:7:"item_id";s:4:"name";s:4:"name";s:3:"sku";s:3:"sku";s:5:"price";s:5:"price";s:12:"itemNetPrice";s:12:"itemNetPrice";s:18:"discountedSubtotal";s:18:"discountedSubtotal";s:6:"amount";s:6:"amount";s:5:"total";s:5:"total";s:8:"subtotal";s:8:"subtotal";}s:10:"identifier";a:1:{i:0;s:7:"item_id";}s:21:"isIdentifierComposite";b:0;s:4:"name";s:21:"XLite\Model\OrderItem";s:9:"namespace";s:11:"XLite\Model";s:5:"table";a:2:{s:4:"name";s:14:"xc_order_items";s:7:"indexes";a:4:{s:3:"ooo";a:1:{s:7:"columns";a:3:{i:0;s:8:"order_id";i:1;s:11:"object_type";i:2;s:9:"object_id";}}s:9:"object_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"object_id";}}s:5:"price";a:1:{s:7:"columns";a:1:{i:0;s:5:"price";}}s:6:"amount";a:1:{s:7:"columns";a:1:{i:0;s:6:"amount";}}}}s:14:"rootEntityName";s:21:"XLite\Model\OrderItem";s:11:"idGenerator";O:33:"Doctrine\ORM\Id\IdentityGenerator":1:{s:43:" Doctrine\ORM\Id\IdentityGenerator _seqName";N;}s:25:"customRepositoryClassName";s:27:"\XLite\Model\Repo\OrderItem";s:15:"inheritanceType";i:3;s:19:"discriminatorColumn";a:4:{s:4:"name";s:11:"object_type";s:4:"type";s:6:"string";s:6:"length";i:16;s:9:"fieldName";s:11:"object_type";}s:18:"discriminatorValue";s:7:"product";s:16:"discriminatorMap";a:1:{s:7:"product";s:21:"XLite\Model\OrderItem";}s:13:"parentClasses";a:0:{}s:10:"subClasses";a:0:{}s:13:"generatorType";i:4;}