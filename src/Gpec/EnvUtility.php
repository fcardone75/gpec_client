<?php

namespace Bni\Gpec\Gpec;

class EnvUtility
{
    const PREFIX = 'BNI_GPEC_';

    const BNI_GPEC_RSM_CALLER = self::PREFIX . 'RSM_CALLER';
    const BNI_GPEC_RSM_HOST_ALIAS = self::PREFIX . 'RSM_HOST_ALIAS';
    const BNI_GPEC_USER = self::PREFIX . 'USER';
    const BNI_GPEC_PASSWORD = self::PREFIX . 'PASSWORD';
    const BNI_GPEC_SUBJECT_ENCODING = self::PREFIX . 'SUBJECT_ENCODING';
    const BNI_GPEC_HEADERS_ENCODING = self::PREFIX . 'HEADERS_ENCODING';
    const BNI_GPEC_BODY_ENCODING = self::PREFIX . 'BODY_ENCODING';
    const BNI_GPEC_PRIORITY = self::PREFIX . 'PRIORITY';
    const BNI_GPEC_WSDL_LOCATION = self::PREFIX . 'WSDL_LOCATION';
    const BNI_GPEC_WSDL_ENDPOINT = self::PREFIX . 'WSDL_ENDPOINT';
    const BNI_APPLICATION_ID = self::PREFIX . 'APPLICATION_ID';
    const BNI_GPEC_USER_ID = self::PREFIX . 'USER_ID';
    const BNI_IS_BODY_HTML = self::PREFIX . 'IS_BODY_HTML';
}
