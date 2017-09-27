<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Sphinx Search Ultimate
 * @version   2.3.4
 * @build     1379
 * @copyright Copyright (C) 2017 Mirasvit (http://mirasvit.com/)
 */



require_once 'abstract.php';

class Mirasvit_Shell_Misspell extends Mage_Shell_Abstract
{
    public function run()
    {
        $indexer = Mage::getSingleton('misspell/indexer');
        $indexer->reindexAll();
    }
}

$shell = new Mirasvit_Shell_Misspell();
$shell->run();
