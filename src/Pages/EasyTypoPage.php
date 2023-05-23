<?php

namespace EasyTypo;

use SilverStripe\Control\Director;

class EasyTypoPage extends \Page{
    private static $table_name = 'EasyTypoPage';
    private static $singular_name = 'EasyTypoPage';
    private static $plural_name = 'EasyTypoPages';
    private static $description = 'Hiermit kann eine Übersicht ausgegeben werden, in der alle relevanten Typographischen Elemente ausgegeben werden um diese übersichtlich zu stylen.';

    public function canCreate($member = null, $context = [])
    {
        if(Director::isDev()){
            return true;
        }
        return false;
    }
}