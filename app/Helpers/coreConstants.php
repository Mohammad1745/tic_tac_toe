<?php
/**
 * Created by PhpStorm.
 * User: debu
 * Date: 7/5/19
 * Time: 1:37 PM
 */


const ADMIN_ROLE = 1;
const USER_ROLE = 2;

const ALL_ROLE = 99;

const STATUS_PENDING = 0;
const STATUS_ACTIVE = 1;
const STATUS_INACTIVE = 2;
const STATUS_SUCCESSFUL = 3;
const STATUS_FAILED = 4;
const STATUS_CANCELLED = 5;
const STATUS_DELETED = 6;
const STATUS_CLOSED = 7;
const STATUS_PENDING_FOR_APPROVAL = 8;
const STATUS_APPROVED_BY_ADMIN = 9;
const STATUS_SERVED = 10;
const STATUS_DRAFT = 11;
const STATUS_EXPIRED = 12;
const STATUS_INCOMPLETE = 13;
const STATUS_COMPLETE = 14;
const STATUS_NOT_STARTED = 15;
const STATUS_INTERVIEWING = 16;
const STATUS_HIRED = 17;
const STATUS_REJECTED = 18;
const STATUS_BLOCKED = 19;

const SEX_MALE =  1;
const SEX_FEMALE =  2;
const SEX_OTHER =  3;

const SMS_API_USER_ID  = '';
const SMS_API_PASSWORD  = '';
const SMS_SID = '';

const PAYMENT_METHOD_BKASH = 1;
const PAYMENT_METHOD_ROCKET = 2;
const PAYMENT_METHOD_NAGAD = 3;
const PAYMENT_METHOD_BANK = 4;

const PAGINATE_SMALL = 10;
const PAGINATE_MEDIUM = 25;
const PAGINATE_LARGE = 50;
const PAGINATE_EXTRA_LARGE = 100;
const PAGINATION_LIMIT = 200;

const EXPIRE_TIME_OF_FORGET_PASSWORD_CODE = 10;
const PHONE_VERIFICATION_CODE_DURATION_IN_SECONDS = 60;
const USER_PENDING_STATUS = 0;
const USER_ACTIVE_STATUS = 1;

const DEFAULT_TIME = 10;

const ENGLISH_LANGUAGE = 1;
const BANGLA_LANGUAGE = 2;
const DAUTCH_LANGUAGE = 3;

const THOUSAND = 1000;
const MILLION = THOUSAND*THOUSAND;
const BILLION = MILLION*THOUSAND;
const TRILLION = BILLION*THOUSAND;
const QUADRILLION = TRILLION*THOUSAND;


const PROVIDER_GOOGLE = 'google';
const PROVIDER_LINKEDIN = 'linkedin';
const PROVIDER_GITHUB = 'github';
