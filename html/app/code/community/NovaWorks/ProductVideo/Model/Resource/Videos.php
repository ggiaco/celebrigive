<?php
class NovaWorks_ProductVideo_Model_Resource_Videos extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('productvideo/videos', 'video_id');
    }
}