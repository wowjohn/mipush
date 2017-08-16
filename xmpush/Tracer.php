<?php
/**
 * 消息状态追踪API.
 *
 * @author wangkuiwei
 * @name Tracer
 * @desc   消息状态追踪API。
 *
 */

namespace xmpush;

class Tracer extends HttpBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMessageStatusById($msgId, $retries = 1)
    {
        $fields = [
            'msg_id' => $msgId,
        ];
        $result = $this->getResult(PushRequestPath::V1_MESSAGE_STATUS(), $fields, $retries);

        return $result;
    }

    public function getMessageStatusByJobKey($jobKey, $retries = 1)
    {
        $fields = [
            'job_key' => $jobKey,
        ];
        $result = $this->getResult(PushRequestPath::V1_MESSAGE_STATUS(), $fields, $retries);

        return $result;
    }

    public function getMessagesStatusByTimeArea($beginTime, $endTime, $retries = 1)
    {
        $fields = [
            'begin_time' => $beginTime,
            'end_time'   => $endTime,
        ];
        $result = $this->getResult(PushRequestPath::V1_MESSAGES_STATUS(), $fields, $retries);

        return $result;
    }
}