<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the software license agreement
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.x-cart.com/license-agreement.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@x-cart.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  X-Cart 5
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\XC\Olark\View;

/**
 * Olark chat
 *
 * @ListChild (list="center")
 */
class Olark extends \XLite\View\AView
{

    /**
     * Get JS files 
     * 
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        $list[] = 'modules/XC/Olark/chat.js';

        return $list;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/XC/Olark/chat.tpl';
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible()
            && \XLite\Core\Config::getInstance()->XC->Olark->siteId
            && !$this->isAJAX();
    }

    /**
     * Return status
     *
     * @return string
     */
    protected function getTextStatus()
    {
        $total = $this->getCart()->getTotal();

        return ($this->getCart()->isEmpty())
            ? static::t('cart is empty')
            : static::t(
                'cart has X items; subtotal: Y',
                array(
                    'items' => $this->getCart()->countItems(),
                    'subtotal' => $this->getCart()->getCurrency()->formatValue($total),
                )
            );
    }

    /**
     * Return array commands Olark
     *
     * @return array
     */
    protected function getOlarkCommands()
    {
        $commands = array('olark.identify("' . \XLite\Core\Config::getInstance()->XC->Olark->siteId . '")');

        if (\XLite\Core\Auth::getInstance()->isLogged()) {
            $commands[] = 'olark(\'api.visitor.updateFullName\', {fullName:\''
                . htmlentities(\XLite\Core\Auth::getInstance()->getProfile()->getName()) . '\'});';

            $commands[] = 'olark(\'api.visitor.updateEmailAddress\', {emailAddress: \''
                . htmlentities(\XLite\Core\Auth::getInstance()->getProfile()->getLogin()) . '\'});';
            $commands[] = 'olark(\'api.chat.updateVisitorStatus\', {snippet: \''
                . $this->getTextStatus() . '\'});';

            $address = \XLite\Core\Auth::getInstance()->getProfile()->getShippingAddress();
            if ($address && $address->getPhone()) {
                $commands[] = 'olark(\'api.visitor.updatePhoneNumber\', {phoneNumber: \''
                    . htmlentities($address->getPhone())
                    . '\'});';
            }
        }

        return $commands;
    }

    /**
     * Return script
     *
     * @return string
     */
    protected function getCodeScript()
    {
        $commands = implode(';' . PHP_EOL, $this->getOlarkCommands());

        return <<<TEXT
            /*<![CDATA[*/
            window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";
                    var nt=function(){f[z]=function(){(a.s=a.s||[]).push(arguments)};
                        var a=f[z]._={},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
                    f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
                0:+new Date};a.P=function(u){
                a.p[u]=new Date-a.p[0]};function s(){
                a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
                hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
                return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
                b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
                b.contentWindow[g].open()}catch(w){
                c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
                var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
                b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
                loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});

            /* custom configuration goes here (www.olark.com/documentation) */
            $commands

TEXT;

    }
}

