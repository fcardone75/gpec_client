<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'gpec.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:~5.0 to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'gpec.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Bni\Gpec\WsdlToPhp\ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \Bni\Gpec\WsdlToPhp\ServiceType\Get($options);
$get->setSoapHeaderHeaderRequest($headerRequest);
/**
 * Sample call for getVersion operation/method
 */
if ($get->getVersion(new \Bni\Gpec\WsdlToPhp\StructType\GetVersion()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMailCount operation/method
 */
if ($get->getMailCount(new \Bni\Gpec\WsdlToPhp\StructType\GetMailCount()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMailById operation/method
 */
if ($get->getMailById(new \Bni\Gpec\WsdlToPhp\StructType\GetMailById()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMailsAndReceipts operation/method
 */
if ($get->getMailsAndReceipts(new \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceipts()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMails operation/method
 */
if ($get->getMails(new \Bni\Gpec\WsdlToPhp\StructType\GetMails()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMailsFrom operation/method
 */
if ($get->getMailsFrom(new \Bni\Gpec\WsdlToPhp\StructType\GetMailsFrom()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMailsTo operation/method
 */
if ($get->getMailsTo(new \Bni\Gpec\WsdlToPhp\StructType\GetMailsTo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMailsRange operation/method
 */
if ($get->getMailsRange(new \Bni\Gpec\WsdlToPhp\StructType\GetMailsRange()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Bni\Gpec\WsdlToPhp\ServiceType\Send($options);
$send->setSoapHeaderHeaderRequest($headerRequest);
/**
 * Sample call for sendMail operation/method
 */
if ($send->sendMail(new \Bni\Gpec\WsdlToPhp\StructType\SendMail()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Bni\Gpec\WsdlToPhp\ServiceType\Delete($options);
$delete->setSoapHeaderHeaderRequest($headerRequest);
/**
 * Sample call for deleteMail operation/method
 */
if ($delete->deleteMail(new \Bni\Gpec\WsdlToPhp\StructType\DeleteMail()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \Bni\Gpec\WsdlToPhp\ServiceType\Move($options);
$move->setSoapHeaderHeaderRequest($headerRequest);
/**
 * Sample call for moveMessage operation/method
 */
if ($move->moveMessage(new \Bni\Gpec\WsdlToPhp\StructType\MoveMessage()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
