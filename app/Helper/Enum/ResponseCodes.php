<?php

namespace App\Helper\Enum;

abstract class ResponseCodes extends EnumClass
{
    #1xx codes
    const REQUIRED_PARAMETER = 100;
    const ALREADY_REGISTERED_DEVICE = 101;
    const CREATE_FAILED = 102;
    const UPDATED_FAILED = 103;
    const DELETE_FAILED = 104;
    const MIN_MAX_LENGTH = 105;
    const ALREADY_STARTED_JOB = 120;
    const ALREADY_FINISHED_JOB = 121;
    const ALREADY_IN_PROGRESS_JOB = 122;
    const ALREADY_USED_BARCODE = 123;
    const LOAD_COLLECTION_ITEMS = 124;
    const LOAD_COLLECTION_ITEMS_ONLY_MOVER = 125;


    #2xx codes
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NO_CONTENT = 204;
    const RESET_CONTENT = 205;

    #4xx errors
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const PAYMENT_REQUIRED = 402;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const REQUEST_TIMEOUT = 408;
    const NO_RESPONSE = 444;

    #5xx errors
    const INTERNAL_ERROR = 500;
    const BAD_GATEWAY = 502;
    const SERVICE_UNAVAILABLE = 503;

    const RETURNED_NULL_OR_FALSE = 800;


    public static function getErrorMessages()
    {
        return [
            self::REQUIRED_PARAMETER => 'Undefined',

        ];
    }

    public static function getSuccessMessages()
    {
        return [
            self::OK => 'Success',
        ];
    }

}