<?php die(1); ?>
[20-Jun-2014 07:27:28] Error (code: 0): A new entity was found through the relationship 'XLite\Model\Order#profile' that was not configured to cascade persist operations for entity: XLite\Model\Proxy\__CG__\XLite\Model\Profile@00000000495541b100000000b7e303c1. To solve this issue: Either explicitly call EntityManager#persist() on this unknown entity or configure cascade persist  this association in the mapping for example @ManyToOne(..,cascade={"persist"}).  If you cannot find out which entity causes the problem implement 'XLite\Model\Profile#__toString()' to get a clue.
Server API: apache2handler;
Request method: GET;
URI: /stul-ya;
Backtrace: 
#0 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/UnitOfWork.php(748): Doctrine\ORM\ORMInvalidArgumentException::newEntityFoundThroughRelationship(Array, Object(XLite\Model\Proxy\__CG__\XLite\Model\Profile))
#1 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/UnitOfWork.php(639): Doctrine\ORM\UnitOfWork->computeAssociationChanges(Array, Object(XLite\Model\Proxy\__CG__\XLite\Model\Profile))
#2 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/UnitOfWork.php(698): Doctrine\ORM\UnitOfWork->computeChangeSet(Object(Doctrine\ORM\Mapping\ClassMetadata), Object(XLite\Model\Cart))
#3 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/UnitOfWork.php(270): Doctrine\ORM\UnitOfWork->computeChangeSets()
#4 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/EntityManager.php(355): Doctrine\ORM\UnitOfWork->commit(NULL)
#5 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Core/Session.php(557): Doctrine\ORM\EntityManager->flush()
#6 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Core/Session.php(460): XLite\Core\Session->createSession()
#7 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Base/Singleton.php(55): XLite\Core\Session->__construct()
#8 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/Cart.php(321): XLite\Base\Singleton::getInstance()
#9 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/Mapping/ClassMetadataInfo.php(1884): XLite\Model\Cart->prepareBeforeRemove()
#10 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/UnitOfWork.php(1602): Doctrine\ORM\Mapping\ClassMetadataInfo->invokeLifecycleCallbacks('preRemove', Object(XLite\Model\Cart))
#11 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/UnitOfWork.php(1564): Doctrine\ORM\UnitOfWork->doRemove(Object(XLite\Model\Cart), Array)
#12 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/lib/Doctrine/ORM/EntityManager.php(515): Doctrine\ORM\UnitOfWork->remove(Object(XLite\Model\Cart))
#13 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/Repo/Order.php(140): Doctrine\ORM\EntityManager->remove(Object(XLite\Model\Cart))
#14 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Core/Session.php(783): XLite\Model\Repo\Order->collectGarbage()
#15 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Core/Session.php(746): XLite\Core\Session->runGarbageCollectOrders()
#16 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Core/Session.php(463): XLite\Core\Session->runCronTasks()
#17 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Base/Singleton.php(55): XLite\Core\Session->__construct()
#18 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/Repo/Base/I18n.php(127): XLite\Base\Singleton::getInstance()
#19 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/Repo/Base/I18n.php(83): XLite\Model\Repo\Base\I18n->getTranslationCode()
#20 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/Repo/Base/I18n.php(47): XLite\Model\Repo\Base\I18n->addLanguageQuery(Object(XLite\Model\QueryBuilder\Product), 'p', NULL)
#21 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/Repo/ProductAbstract.php(196): XLite\Model\Repo\Base\I18n->createQueryBuilder('p', NULL)
#22 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Model/Repo/ProductAbstract.php(216): XLite\Model\Repo\ProductAbstract->createQueryBuilder('p')
#23 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite/Core/ConverterAbstract.php(445): XLite\Model\Repo\ProductAbstract->findOneByCleanURL('stul-ya')
#24 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite.php(546): XLite\Core\ConverterAbstract::parseCleanUrl('stul-ya', '', '', '')
#25 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite.php(532): XLite::getTargetByCleanURL()
#26 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite.php(298): XLite::dispatchRequest()
#27 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite.php(311): XLite::getTarget()
#28 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite.php(174): XLite::getControllerClass()
#29 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite.php(417): XLite::getController()
#30 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/var/run/classes/XLite.php(442): XLite->runController()
#31 /home/users1/d/dmitriysmoll/domains/adas-mebel.ru/cart.php(35): XLite->processRequest()
#32 {main}

