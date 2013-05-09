<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class FartScrollPackage extends Package {

	protected $pkgHandle = 'fart_scroll';
	protected $appVersionRequired = '5.5';
	protected $pkgVersion = '1.0';

	public function getPackageName() {
		return t("Fart Scroll");
	}

	public function getPackageDescription() {
		return t("Description... HA!");
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