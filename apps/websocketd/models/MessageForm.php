<?php

namespace apps\websocketd\models;

use mix\validators\Validator;

/**
 * Message 表单模型类
 * @author 刘健 <coder.liu@qq.com>
 */
class MessageForm extends Validator
{

    public $uid;
    public $message;

    // 规则
    public function rules()
    {
        return [
            'uid'     => ['integer', 'unsigned' => true, 'minLength' => 1, 'maxLength' => 10],
            'message' => ['string', 'minLength' => 1, 'maxLength' => 300],
        ];
    }

    // 场景
    public function scenarios()
    {
        return [
            'to' => ['required' => ['uid', 'message']],
        ];
    }

}
