<?php

namespace VanillaThunder\DevUtils\Application\Extend;
//class Email_parent extends \OxidEsales\Eshop\Core\Email {}
class_alias('\VanillaThunder\DevUtils\Application\Extend\Email_parent','\OxidEsales\EshopCommunity\Core\Email');
class Language_parent extends \OxidEsales\Eshop\Core\Language {}
class Order_parent extends \OxidEsales\Eshop\Application\Model\Order {}
class Shop_parent extends \OxidEsales\Eshop\Application\Model\Shop {}
class NavigationController_parent extends \OxidEsales\Eshop\Application\Controller\Admin\NavigationController {}
class UtilsView_parent extends \OxidEsales\Eshop\Core\UtilsView {}
class ViewConfig_parent extends \OxidEsales\Eshop\Core\ViewConfig {}

