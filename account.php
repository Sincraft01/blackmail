<?php
include_once 'https://thebinbandit.com/BlackMail/libraries/afterlogic/api.php';
if (class_exists('CApi') && CApi::IsValid()) {
    $oApiDomainsManager = CApi::Manager('domains');
    $oApiUsersManager = CApi::Manager('users');

    $oDomain = $oApiDomainsManager->getDomainByName('domain.com');
    /* Or, you can access default domain instead */
    /* $oDomain = $oApiDomainsManager->getDefaultDomain(); */
    if ($oDomain) {
        $oAccount = new CAccount($oDomain);
        
        $oAccount->Email = $_POST['sEmail'];
        $oAccount->IncomingMailLogin = $_POST['sEmail'];
        $oAccount->IncomingMailPassword = $_POST['sPassword'];
        
        if ($oApiUsersManager->createAccount($oAccount, false)) {
            echo 'Account '.$oAccount->Email.' is created successfully.';
        } else {
            echo $oApiUsersManager->GetLastErrorMessage();
        }
    } else {
        echo 'Domain doesn\'t exist';
    }
} else {
    echo 'WebMail API isn\'t available';
}
?>