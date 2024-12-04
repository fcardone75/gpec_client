<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'getVersion' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetVersion',
            'getVersionResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetVersionResponse',
            'sendMail' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\SendMail',
            'sendMailResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\SendMailResponse',
            'deleteMail' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\DeleteMail',
            'deleteMailResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\DeleteMailResponse',
            'getMailCount' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailCount',
            'getMailCountResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailCountResponse',
            'getMailById' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailById',
            'getMailByIdResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailByIdResponse',
            'getMailsAndReceipts' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsAndReceipts',
            'getMailsAndReceiptsResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsAndReceiptsResponse',
            'getMails' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMails',
            'getMailsResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsResponse',
            'getMailsFrom' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsFrom',
            'getMailsFromResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsFromResponse',
            'getMailsTo' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsTo',
            'getMailsToResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsToResponse',
            'getMailsRange' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsRange',
            'getMailsRangeResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsRangeResponse',
            'moveMessage' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\MoveMessage',
            'moveMessageResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\MoveMessageResponse',
            'SendMailRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\SendMailRequest',
            'Client' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\Client',
            'DeleteMailRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\DeleteMailRequest',
            'GetMailCountRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailCountRequest',
            'GetMailByIdRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailByIdRequest',
            'GetMailsAndReceiptsRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsAndReceiptsRequest',
            'GetMailsRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsRequest',
            'GetMailsFromRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsFromRequest',
            'GetMailsToRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsToRequest',
            'GetMailsRangeRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsRangeRequest',
            'MoveMessageRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\MoveMessageRequest',
            'BaseRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\BaseRequest',
            'BaseResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\BaseResponse',
            'GetMailRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailRequest',
            'MessageInfoSender' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\MessageInfoSender',
            'AttachmentSet' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\AttachmentSet',
            'ArrayOfAttachment' => '\\Bni\\Gpec\\WsdlToPhp\\ArrayType\\ArrayOfAttachment',
            'Attachment' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\Attachment',
            'ArrayOfObjectHeaders' => '\\Bni\\Gpec\\WsdlToPhp\\ArrayType\\ArrayOfObjectHeaders',
            'ObjectHeaders' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\ObjectHeaders',
            'MessageInfo' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\MessageInfo',
            'SendMailResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\SendMailResponse_1',
            'DeleteMailResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\DeleteMailResponse_1',
            'GetMailCountResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailCountResponse_1',
            'GetMailByIdResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailByIdResponse_1',
            'GetMailsAndReceiptsResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsAndReceiptsResponse_1',
            'ArrayOfMessageInfo' => '\\Bni\\Gpec\\WsdlToPhp\\ArrayType\\ArrayOfMessageInfo',
            'GetMailsResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsResponse_1',
            'GetMailsFromResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsFromResponse_1',
            'GetMailsToResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsToResponse_1',
            'GetMailsRangeResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GetMailsRangeResponse_1',
            'MoveMessageResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\MoveMessageResponse_1',
            'GPECHeaderRequest' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GPECHeaderRequest',
            'GPECHeaderResponse' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\GPECHeaderResponse',
            'OperationResult' => '\\Bni\\Gpec\\WsdlToPhp\\StructType\\OperationResult',
        ];
    }
}
