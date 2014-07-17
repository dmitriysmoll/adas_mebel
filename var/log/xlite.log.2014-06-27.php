<?php die(1); ?>
Ð˜ÑŽÐ½ 27 11:22:37 XLite [warning] Warning: simplexml_load_file() [<a href='function.simplexml-load-file'>function.simplexml-load-file</a>]: http:// wrapper is disabled in the server configuration by allow_url_fopen=0 in /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/View/RSS.php on line 127
Server API: apache2handler;
Request method: GET;
URI: /admin.php;

Ð˜ÑŽÐ½ 27 15:53:43 XLite [warning] Warning: simplexml_load_file() [<a href='function.simplexml-load-file'>function.simplexml-load-file</a>]: http:// wrapper is disabled in the server configuration by allow_url_fopen=0 in /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/View/RSS.php on line 127
Server API: apache2handler;
Request method: GET;
URI: /admin.php?1403870022.4861&cpid=664f59bec6d480539a629efb3e12b3ca;

Èþí 27 19:36:30 XLite [warning] Form ID checking failure (target: product, action: update)
Server API: apache2handler;
Request method: POST;
URI: /admin.php?target=product;

Èþí 27 20:21:54 XLite [error] Catchable fatal error: Argument 2 passed to XLite\Model\AEntity::processFiles() must be an array, null given, called in /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/View/FormField/Inline/FileUploader/Image.php on line 48 and defined in /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/AEntity.php on line 348
Server API: apache2handler;
Request method: POST;
URI: /admin.php?target=categories;
Backtrace:
	file <compiled classes repository>/classes/XLite/Model/AEntity.php : 348
	file <compiled classes repository>/classes/XLite/View/FormField/Inline/FileUploader/Image.php : 48
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 680
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 566
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 542
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 499
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 179
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 168
	file <compiled classes repository>/classes/XLite/Controller/Admin/Categories.php : 107
	file <compiled classes repository>/classes/XLite/Controller/AController.php : 1215
	file <compiled classes repository>/classes/XLite/Controller/AController.php : 1234
	file <compiled classes repository>/classes/XLite/Controller/AController.php : 468
	file <compiled classes repository>/classes/XLite/Controller/Admin/AAdmin.php : 153
	file <compiled classes repository>/classes/XLite.php : 417
	file <compiled classes repository>/classes/XLite.php : 442
	file <X-Cart root>/admin.php : 37

Èþí 27 20:22:13 XLite [error] Catchable fatal error: Argument 2 passed to XLite\Model\AEntity::processFiles() must be an array, null given, called in /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/View/FormField/Inline/FileUploader/Image.php on line 48 and defined in /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/AEntity.php on line 348
Server API: apache2handler;
Request method: POST;
URI: /admin.php?target=categories;
Backtrace:
	file <compiled classes repository>/classes/XLite/Model/AEntity.php : 348
	file <compiled classes repository>/classes/XLite/View/FormField/Inline/FileUploader/Image.php : 48
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 680
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 566
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 542
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 499
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 179
	file <compiled classes repository>/classes/XLite/View/ItemsList/Model/AModel.php : 168
	file <compiled classes repository>/classes/XLite/Controller/Admin/Categories.php : 107
	file <compiled classes repository>/classes/XLite/Controller/AController.php : 1215
	file <compiled classes repository>/classes/XLite/Controller/AController.php : 1234
	file <compiled classes repository>/classes/XLite/Controller/AController.php : 468
	file <compiled classes repository>/classes/XLite/Controller/Admin/AAdmin.php : 153
	file <compiled classes repository>/classes/XLite.php : 417
	file <compiled classes repository>/classes/XLite.php : 442
	file <X-Cart root>/admin.php : 37

