<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\TwiceTelVerifyResponseBody\twiceTelVerifyResult;
use AlibabaCloud\Tea\Model;

class TwiceTelVerifyResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var twiceTelVerifyResult
     */
    public $twiceTelVerifyResult;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'twiceTelVerifyResult' => 'TwiceTelVerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->twiceTelVerifyResult) {
            $res['TwiceTelVerifyResult'] = null !== $this->twiceTelVerifyResult ? $this->twiceTelVerifyResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TwiceTelVerifyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TwiceTelVerifyResult'])) {
            $model->twiceTelVerifyResult = twiceTelVerifyResult::fromMap($map['TwiceTelVerifyResult']);
        }

        return $model;
    }
}
