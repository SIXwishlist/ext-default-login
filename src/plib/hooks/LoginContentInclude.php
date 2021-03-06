<?php
// Copyright 1999-2017. Parallels IP Holdings GmbH. All Rights Reserved.

class Modules_DefaultLogin_LoginContentInclude extends pm_Hook_LoginContentInclude
{
    public function getJsOnReadyContent()
    {
        if (!pm_Auth::isValidCredentials('admin', pm_Config::get('defaultPassword'))) {
            return '';
        }

        $message = Zend_Json::encode(nl2br(pm_Locale::lmsg('defaultCredentials')));

        return "Jsw.addStatusMessage('warning', {$message});";
    }
}
