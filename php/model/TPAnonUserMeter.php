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
 * The TPAnonUserMeter model.
 * model
 */
class TPAnonUserMeter {
    public static $dataTypes = array(
    "showCloseButton" => "bool",
    "expires" => "int",
    "cookieValue" => "string",
    "trackPageView" => "bool",
    "cookieDomain" => "string",
    "state" => "string",
    "reminderTemplateId" => "string",
    "meterName" => "string",
    "showReminder" => "bool",
    "reason" => "string",
    "paywallId" => "int",
    "maxViews" => "int",
    "countryCode" => "string",
    "renewalDaysRemaining" => "int",
    "cookieExpires" => "int",
    "canRenew" => "bool",
    "offerId" => "string",
    "cookieName" => "string",
    "viewsLeft" => "int",
    "views" => "int",
    "region" => "string",
    "curtainTemplateId" => "string",
    );

    /**
     * @var bool $showCloseButton Whether to show the close button
     */
    public $showCloseButton;

    /**
     * @var int $expires Meter expiration
     */
    public $expires;

    /**
     * @var string $cookieValue User meter cookie value
     */
    public $cookieValue;

    /**
     * @var bool $trackPageView Track page views
     */
    public $trackPageView;

    /**
     * @var string $cookieDomain User meter cookie domain
     */
    public $cookieDomain;

    /**
     * @var string $state Meter state
     */
    public $state;

    /**
     * @var string $reminderTemplateId The template id of the reminder
     */
    public $reminderTemplateId;

    /**
     * @var string $meterName Current meter name
     */
    public $meterName;

    /**
     * @var bool $showReminder Whether to show the reminder
     */
    public $showReminder;

    /**
     * @var string $reason Reason
     */
    public $reason;

    /**
     * @var int $paywallId The paywall id
     */
    public $paywallId;

    /**
     * @var int $maxViews How many views total
     */
    public $maxViews;

    /**
     * @var string $countryCode Country code
     */
    public $countryCode;

    /**
     * @var int $renewalDaysRemaining Renewal days remaining
     */
    public $renewalDaysRemaining;

    /**
     * @var int $cookieExpires When the meter could should expire
     */
    public $cookieExpires;

    /**
     * @var bool $canRenew Whether renewal is supported
     */
    public $canRenew;

    /**
     * @var string $offerId The offer ID
     */
    public $offerId;

    /**
     * @var string $cookieName User meter cookie name
     */
    public $cookieName;

    /**
     * @var int $viewsLeft How many views left for this meter
     */
    public $viewsLeft;

    /**
     * @var int $views Current user meter views
     */
    public $views;

    /**
     * @var string $region Region
     */
    public $region;

    /**
     * @var string $curtainTemplateId The template id of the curtain
     */
    public $curtainTemplateId;

    

}

