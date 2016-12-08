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
 * The TPPublisherUserPayment model.
 * model
 */
class TPPublisherUserPayment {
    public static $dataTypes = array(
    "refundable" => "bool",
    "tax" => "float",
    "term" => "TPPublisherTerm",
    "userSubscription" => "TPPublisherUserSubscription",
    "userPaymentId" => "string",
    "amount" => "float",
    "createDate" => "string",
    "renewal" => "bool",
    "currency" => "string",
    );

    /**
     * @var bool $refundable User payment is refundable
     */
    public $refundable;

    /**
     * @var float $tax User payment tax
     */
    public $tax;

    /**
     * @var TPPublisherTerm $term 
     */
    public $term;

    /**
     * @var TPPublisherUserSubscription $userSubscription 
     */
    public $userSubscription;

    /**
     * @var string $userPaymentId User payment id
     */
    public $userPaymentId;

    /**
     * @var float $amount User payment amount
     */
    public $amount;

    /**
     * @var string $createDate User payment creation date
     */
    public $createDate;

    /**
     * @var bool $renewal User payment renewal
     */
    public $renewal;

    /**
     * @var string $currency User payment currency
     */
    public $currency;

    

}

