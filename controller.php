<?php

/**
*
* FartScroll v2 (Concrete >= 8.0) Package.
* @author Michael Krasnow <mnkras@gmail.com>
* @link http://www.mnkras.com
* @author VasilSlavchev <vasilslavchev@gmail.com>
* @link https://www.vasilslavchev.info
* @license http://creativecommons.org/licenses/by/3.0/ CC 3.0 Unported
* @version 2.0
* @description From the Creators of "I am gonna farttt" and "Its the final fartdown"
*
*/

namespace Concrete\Package\FartScroll;

use Package;
use Concrete\Core\View\View;
// Important to load up legacy: concrete\src\legacy\loader.
use Concrete\Core\Legacy\Loader;

class Controller extends Package {

    protected $pkgHandle = 'fart_scroll';
    protected $appVersionRequired = '8.0';
    protected $pkgVersion = '2.0';
    protected $pkgDescription = 'From the Creators of "I am gonna farttt" and "Its the final fartdown".';

    public function getPackageName() {
        return t("Fart Scroll v2.0 (Concrete >= 8.0)");
    }

    public function getPackageDescription() {
        return t('From the Creators of "I am gonna farttt" and "Its the final fartdown".');
    }

    public function on_start() {
        $v = View::getInstance();
        $v->addFooterItem(Loader::helper('html')->javascript('fartscroll.js', $this->pkgHandle));
        $v->addFooterItem('<script type="text/javascript">$(document).fartscroll();</script>');
    }

    public function install() {
        $pkg = parent::install();
    }

    public function uninstall() {
        $pkg = parent::uninstall();
    }
}