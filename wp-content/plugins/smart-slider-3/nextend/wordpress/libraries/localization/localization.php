<?php

class N2Localization extends N2LocalizationAbstract {

    static function getLocale() {
        if(function_exists('get_user_locale')){
            return get_user_locale();
        } else {
            return get_locale();
        }
    }
}
