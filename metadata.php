<?php
	/**
	 * vt Dev Utils
	 * Copyright (C) 2012-2013  Marat Bedoev
	 *
	 * This program is free software;
	 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
	 * either version 3 of the License, or (at your option) any later version.
	 *
	 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
	 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
	 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
	 *
	 * Version:    2.0
	 * Author:     Marat Bedoev <oxid@marat.ws>
	 */

	$sMetadataVersion = '1.1';
	$aModule = array(
		'id'          => 'vt-devutils',
		'title'       => '<strong style="color:#c700bb;border: 1px solid #c700bb;padding: 0 2px;background:white;">VT</strong> Dev Utils',
		'description' => 'some helpful functions for OXID developing',
		'thumbnail'   => 'oxid-vt.jpg',
		'version'     => '2.0 from 2013-30-05 / newest version: <img src="https://raw.github.com/vanilla-thunder/vt-devutils/module/version.jpg" /><br/>
		 <a style="display: inline-block; padding: 1px 15px; background: #f0f0f0; border: 1px solid gray" href="https://github.com/vanilla-thunder/vt-devutils/" target="_blank">info</a> <a style="display: inline-block; padding: 1px 15px; background: #f0f0f0; border: 1px solid gray" href="https://github.com/vanilla-thunder/vt-devutils/archive/master.zip">download</a>',
		'author'      => 'Marat Bedoev',
		'email'       => 'oxid@marat.ws',
		'url'         => 'http://marat.ws',
		'extend'      => array(
			/* core + models */
			'oxviewconfig'  => 'vt-devutils/extend/oxviewconfig_vtdu',
			'oxmodule'      => 'vt-devutils/extend/oxmodule_vtdu',

			/* backend */
			'module_config' => 'vt-devutils/extend/module_config_vtdu',
			'navigation'    => 'vt-devutils/extend/navigation_vtdu',


			/* frontend */
			'thankyou'      => 'vt-devutils/extend/thankyou_vtdu',
		),
		'files'       => array(
			'vtdu'            => 'vt-devutils/controller/vtdu.php',
			'vtdu_logs'       => 'vt-devutils/controller/vtdu_logs.php',
			'vtdu_scratchpad' => 'vt-devutils/controller/vtdu_scratchpad.php',
			/* frontend controller */
			//'vtscratchpad'=>'vt-devutils/core/vtscratchpad.php',
		),
		'templates'   => array(
			'navigation_vtdu.tpl' => 'vt-devutils/views/navigation_vtdu.tpl',
			'vtdu_frame.tpl'      => 'vt-devutils/views/vtdu_frame.tpl',
			'vtdu_ajax.tpl'       => 'vt-devutils/views/vtdu_ajax.tpl',
			'vtdu_logs.tpl'       => 'vt-devutils/views/vtdu_logs.tpl',
			'vtdu_scratchpad.tpl' => 'vt-devutils/views/vtdu_scratchpad.tpl'
		),
		'blocks'      => array(
			array('template' => 'headitem.tpl', 'block' => 'admin_headitem_inccss', 'file' => '/views/blocks/admin_headitem_inccss.tpl'),
			//array('template' => 'bottomnaviitem.tpl', 	'block' => 'admin_bottomnaviitem', 	 'file' => '/blocks/admin_bottomnaviitem.tpl'),
			array('template' => 'bottomnaviitem.tpl', 'block' => 'admin_bottomnavicustom', 'file' => '/views/blocks/admin_bottomnavicustom.tpl'),
			array('template' => 'layout/base.tpl', 'block' => 'base_js', 'file' => '/views/blocks/base_js.tpl'),

		),
		'settings'    => array(
			// logs
			array('group' => 'vtduExLog', 'name' => 'bExLog', 'type' => 'bool', 'position' => 1, 'value' => true),
			array('group' => 'vtduExLog', 'name' => 'iExLog', 'type' => 'str', 'position' => 2, 'value' => '10'),
			array('group' => 'vtduErrLog', 'name' => 'bErrLog', 'type' => 'bool', 'position' => 3, 'value' => true),
			array('group' => 'vtduErrLog', 'name' => 'sErrLog', 'type' => 'str', 'position' => 4, 'value' => '/var/log/...'),
			array('group' => 'vtduErrLog', 'name' => 'iErrLog', 'type' => 'str', 'position' => 5, 'value' => '10'),
			array('group' => 'vtduSQLLog', 'name' => 'bDbLog', 'type' => 'bool', 'position' => 6, 'value' => false),
			array('group' => 'vtduSQLLog', 'name' => 'sDbLog', 'type' => 'str', 'position' => 7, 'value' => '/var/log/mysql.log'),
			array('group' => 'vtduSQLLog', 'name' => 'iDbLog', 'type' => 'str', 'position' => 8, 'value' => '10'),
			array('group' => 'vtduMailLog', 'name' => 'bMailLog', 'type' => 'bool', 'position' => 9, 'value' => false),
			array('group' => 'vtduMailLog', 'name' => 'sMailLog', 'type' => 'str', 'position' => 10, 'value' => '/var/log/mails'),
			array('group' => 'vtduMailLog', 'name' => 'iMailLog', 'type' => 'str', 'position' => 11, 'value' => '10'),
			array('group' => 'vtduCust1Log', 'name' => 'bCust1Log', 'type' => 'bool', 'position' => 12, 'value' => false),
			array('group' => 'vtduCust1Log', 'name' => 'sCust1Name', 'type' => 'str', 'position' => 13, 'value' => 'Custom log 1'),
			array('group' => 'vtduCust1Log', 'name' => 'sCust1Log', 'type' => 'str', 'position' => 14, 'value' => ''),
			array('group' => 'vtduCust1Log', 'name' => 'iCust1Log', 'type' => 'str', 'position' => 15, 'value' => '10'),
			array('group' => 'vtduCust2Log', 'name' => 'bCust2Log', 'type' => 'bool', 'position' => 16, 'value' => false),
			array('group' => 'vtduCust2Log', 'name' => 'sCust2Name', 'type' => 'str', 'position' => 17, 'value' => 'Custom log 2'),
			array('group' => 'vtduCust2Log', 'name' => 'sCust2Log', 'type' => 'str', 'position' => 18, 'value' => ''),
			array('group' => 'vtduCust2Log', 'name' => 'iCust2Log', 'type' => 'str', 'position' => 19, 'value' => '10'),
			array('group' => 'vtduCust3Log', 'name' => 'bCust3Log', 'type' => 'bool', 'position' => 20, 'value' => false),
			array('group' => 'vtduCust3Log', 'name' => 'sCust3Name', 'type' => 'str', 'position' => 21, 'value' => 'Custom log 3'),
			array('group' => 'vtduCust3Log', 'name' => 'sCust3Log', 'type' => 'str', 'position' => 22, 'value' => ''),
			array('group' => 'vtduCust3Log', 'name' => 'iCust3Log', 'type' => 'str', 'position' => 23, 'value' => '10'),


			/* debug settings */
			array('group' => 'vtduDebug', 'name' => 'bShowCl', 'type' => 'bool', 'position' => 1, 'value' => true),
			array('group' => 'vtduDebug', 'name' => 'bShowTpl', 'type' => 'bool', 'position' => 2, 'value' => true),
			array('group' => 'vtduDebug', 'name' => 'bKeepBasket', 'type' => 'bool', 'position' => 3, 'value' => true),
		)
	);