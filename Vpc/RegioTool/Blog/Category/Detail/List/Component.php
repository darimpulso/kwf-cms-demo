<?php
class Vpc_RegioTool_Blog_Category_Detail_List_Component
    extends Vpc_Directories_Category_Detail_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['view'] = 'Vpc_RegioTool_Blog_View_Component';
        return $ret;
    }
}
