<?php
class Vpc_FeedCreator_Blog_Category_Detail_Component extends Vpc_Directories_Category_Detail_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['list'] = 'Vpc_FeedCreator_Blog_Category_Detail_List_Component';
        return $ret;
    }
}
