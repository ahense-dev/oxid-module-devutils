<?php
include(dirname(__FILE__)."/../vendormetadata.php");

/**
 * vt dev utilities - mails
 * The MIT License (MIT)
 *
 * Copyright (C) 2015  Marat Bedoev
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * Author:     Marat Bedoev <m@marat.ws>
 */

$sMetadataVersion = '1.1';
$aModule = array(
    'id'          => 'dev-mails',
    'title'       => '[devutils] email preview',
    'description' => 'easy design and debugging for oxid eshop email templates',
    'thumbnail'   => '../oxid-vt.jpg',
    'version'     => '1.2.0 (2017-07-05)',
    'author'      => 'Marat Bedoev',
    'email'       => 'm@marat.ws',
    'url'         => 'https://github.com/vanilla-thunder/vt-devutils',
    'extend'      => array(
            'oxemail' => 'vt-devutils/dev-mails/extend/oxemailvtdevmails',
            'oxorder' => 'vt-devutils/dev-mails/extend/oxordervtdevmails'
        ),
    'files'       => array(
        'devMails' => 'vt-devutils/dev-mails/application/controllers/vtdev_mails.php'
        ),
    'templates'   => array(
            'vtdev_mails.tpl' => 'vt-devutils/dev-mails/application/views/vtdev_mails.tpl'
            //'vt_dev_mails_preview.tpl' => 'vt-devutils/dev-mails/application/views/admin/vt_dev_mails_preview.tpl'
        ),
    'settings'    => array()
);