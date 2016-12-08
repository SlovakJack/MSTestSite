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
 * The TPPublisherPaymentInquiry model.
 * model
 */
class TPPublisherPaymentInquiry {
    public static $dataTypes = array(
    "source" => "string",
    "startDate" => "string",
    "state" => "int",
    "inquiryReason" => "string",
    "updateStateDate" => "string",
    "createDate" => "string",
    "paymentInquiryId" => "string",
    "transactionId" => "string",
    "resource" => "TPPublisherResource",
    "expireDate" => "string",
    "currency" => "string",
    "category" => "string",
    "app" => "TPPublisherApp",
    "transactionDate" => "string",
    "refundedDate" => "string",
    "inquiryComments" => "TPPublisherInquiryComment[]",
    "updateStateBy" => "TPPublisherUser",
    "spentMoney" => "float",
    );

    /**
     * @var string $source Source
     */
    public $source;

    /**
     * @var string $startDate The start date
     */
    public $startDate;

    /**
     * @var int $state Inquiry state
     */
    public $state;

    /**
     * @var string $inquiryReason Inquiry reason
     */
    public $inquiryReason;

    /**
     * @var string $updateStateDate Date when state was updated
     */
    public $updateStateDate;

    /**
     * @var string $createDate The creation date
     */
    public $createDate;

    /**
     * @var string $paymentInquiryId Payment inquiry public id
     */
    public $paymentInquiryId;

    /**
     * @var string $transactionId Transaction id
     */
    public $transactionId;

    /**
     * @var TPPublisherResource $resource The resource
     */
    public $resource;

    /**
     * @var string $expireDate Expire date
     */
    public $expireDate;

    /**
     * @var string $currency User payment currency
     */
    public $currency;

    /**
     * @var string $category Category
     */
    public $category;

    /**
     * @var TPPublisherApp $app Application ref
     */
    public $app;

    /**
     * @var string $transactionDate Date of transaction
     */
    public $transactionDate;

    /**
     * @var string $refundedDate Refunded date
     */
    public $refundedDate;

    /**
     * @var TPPublisherInquiryComment[] $inquiryComments 
     */
    public $inquiryComments;

    /**
     * @var TPPublisherUser $updateStateBy 
     */
    public $updateStateBy;

    /**
     * @var float $spentMoney spent money
     */
    public $spentMoney;

    

}

