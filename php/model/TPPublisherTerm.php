<?php
/**
 * Copyright (c) 2014, Tinypass, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * The TPPublisherTerm model.
 * model
 */
class TPPublisherTerm {
    public static $dataTypes = array(
    "paymentAllowRenewDays" => "int",
    "termId" => "string",
    "name" => "string",
    "adviewVastUrl" => "string",
    "paymentIsSubscription" => "bool",
    "customDefaultAccessPeriod" => "int",
    "registrationAccessPeriod" => "int",
    "aid" => "string",
    "description" => "string",
    "paymentHasFreeTrial" => "bool",
    "registrationGracePeriod" => "int",
    "paymentNewCustomersOnly" => "bool",
    "paymentAllowPromoCodes" => "bool",
    "createDate" => "int",
    "paymentBillingPlanDescription" => "string",
    "resource" => "TPPublisherResource",
    "customRequireUser" => "bool",
    "paymentBillingPlan" => "string",
    "paymentAllowGift" => "bool",
    "paymentForceAutoRenew" => "bool",
    "paymentTrialNewCustomersOnly" => "bool",
    "paymentCurrency" => "string",
    "type" => "string",
    "adviewAccessPeriod" => "int",
    "paymentRenewGracePeriod" => "int",
    "paymentIsCustomPriceAvailable" => "bool",
    );

    /**
     * @var int $paymentAllowRenewDays How many days in advance a user can renew
     */
    public $paymentAllowRenewDays;

    /**
     * @var string $termId Term ID
     */
    public $termId;

    /**
     * @var string $name Term name
     */
    public $name;

    /**
     * @var string $adviewVastUrl The VAST URL to use
     */
    public $adviewVastUrl;

    /**
     * @var bool $paymentIsSubscription Payment is subscription
     */
    public $paymentIsSubscription;

    /**
     * @var int $customDefaultAccessPeriod The default access period
     */
    public $customDefaultAccessPeriod;

    /**
     * @var int $registrationAccessPeriod The access time period 
     */
    public $registrationAccessPeriod;

    /**
     * @var string $aid Application aid
     */
    public $aid;

    /**
     * @var string $description Term description
     */
    public $description;

    /**
     * @var bool $paymentHasFreeTrial Payment has free trial
     */
    public $paymentHasFreeTrial;

    /**
     * @var int $registrationGracePeriod The time period after registration that will count it as a valid registration conversion
     */
    public $registrationGracePeriod;

    /**
     * @var bool $paymentNewCustomersOnly Whether to allow buy only first time
     */
    public $paymentNewCustomersOnly;

    /**
     * @var bool $paymentAllowPromoCodes Whether to allow promo codes to be applied
     */
    public $paymentAllowPromoCodes;

    /**
     * @var int $createDate The creation date
     */
    public $createDate;

    /**
     * @var string $paymentBillingPlanDescription Term billing plan description
     */
    public $paymentBillingPlanDescription;

    /**
     * @var TPPublisherResource $resource The resource
     */
    public $resource;

    /**
     * @var bool $customRequireUser Whether a valid user is required to complete the term
     */
    public $customRequireUser;

    /**
     * @var string $paymentBillingPlan Term billing plan
     */
    public $paymentBillingPlan;

    /**
     * @var bool $paymentAllowGift Whether the term can be gifted
     */
    public $paymentAllowGift;

    /**
     * @var bool $paymentForceAutoRenew Payment forces the auto renewal of subscriptions
     */
    public $paymentForceAutoRenew;

    /**
     * @var bool $paymentTrialNewCustomersOnly Whether to allow trial period only first time
     */
    public $paymentTrialNewCustomersOnly;

    /**
     * @var string $paymentCurrency Currency of the term
     */
    public $paymentCurrency;

    /**
     * @var string $type Term type
     */
    public $type;

    /**
     * @var int $adviewAccessPeriod The length of time a user gets access for
     */
    public $adviewAccessPeriod;

    /**
     * @var int $paymentRenewGracePeriod The number of days after expiration to still allow access to the resource
     */
    public $paymentRenewGracePeriod;

    /**
     * @var bool $paymentIsCustomPriceAvailable Payment is available custom price
     */
    public $paymentIsCustomPriceAvailable;

    

}

