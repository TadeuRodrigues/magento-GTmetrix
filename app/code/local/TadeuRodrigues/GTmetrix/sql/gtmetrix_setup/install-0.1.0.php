<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Newsletter
 * @copyright  Copyright (c) 2006-2016 X.commerce, Inc. and affiliates (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Newsletter install
 *
 * @category   Mage
 * @package    Mage_Newsletter
 * @author     Magento Core Team <core@magentocommerce.com>
 */
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

/**
 * Create table 'newsletter/subscriber'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('gtmetrix/gtmetrix'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'GTmetrix Id')
    ->addColumn('test_id', Varien_Db_Ddl_Table::TYPE_TEXT, 30, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Test Id')
    ->addColumn('poll_state_url', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Poll State Url')
    ->addColumn('state', Varien_Db_Ddl_Table::TYPE_TEXT, 25, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Customer Id')
    ->addColumn('error', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Email')
    ->addColumn('report_url', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Status')
    ->addColumn('pagespeed_score', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('yslow_score', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('html_bytes', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('html_load_time', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('page_bytes', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('page_load_time', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('page_elements', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'default'   => null,
        ), 'Subscriber Confirm Code')

    ->addColumn('screenshot', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('har', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('pagespeed', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('pagespeed_files', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('yslow', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('report_pdf', Varien_Db_Ddl_Table::TYPE_TEXT, 120, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('report_pdf_full', Varien_Db_Ddl_Table::TYPE_TEXT, 150, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('video', Varien_Db_Ddl_Table::TYPE_TEXT, 32, array(
        'nullable'  => true,
        'default'   => null,
        ), 'Subscriber Confirm Code')
    ->addColumn('added_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Added At')
    ->addColumn('modified_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Modified At');
$installer->getConnection()->createTable($table);

$installer->endSetup();
