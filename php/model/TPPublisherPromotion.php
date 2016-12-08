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
 * The TPPublisherPromotion model.
 * model
 */
class TPPublisherPromotion {
    public static $dataTypes = array(
    "discountType" => "string",
    "name" => "string",
    "startDate" => "int",
    "updateBy" => "string",
    "aid" => "string",
    "fixedPromotionCode" => "string",
    "uses" => "int",
    "termDependencyType" => "string",
    "discountCurrency" => "string",
    "updateDate" => "int",
    "createDate" => "int",
    "applyToAllBillingPeriods" => "bool",
    "neverAllowZero" => "bool",
    "endDate" => "int",
    "fixedDiscountList" => "TPPublisherPromotionFixedDiscountt[]",
    "newCustomersOnly" => "bool",
    "status" => "string",
    "percentageDiscount" => "float",
    "unlimitedUses" => "bool",
    "discountAmount" => "float",
    "promotionId" => "string",
    "promotionCodePrefix" => "string",
    "createBy" => "string",
    "type" => "string",
    "usesAllowed" => "int",
    "discount" => "string",
    "deleted" => "bool",
    );

    /**
     * @var string $discountType Type of promotion discount 
     */
    public $discountType;

    /**
     * @var string $name Promotion name
     */
    public $name;

    /**
     * @var int $startDate The start date
     */
    public $startDate;

    /**
     * @var string $updateBy The last user to update the object
     */
    public $updateBy;

    /**
     * @var string $aid Application aid
     */
    public $aid;

    /**
     * @var string $fixedPromotionCode Fixed value for all promotion codes
     */
    public $fixedPromotionCode;

    /**
     * @var int $uses Defines how many times promotion has been used
     */
    public $uses;

    /**
     * @var string $termDependencyType Type of dependency to terms
     */
    public $termDependencyType;

    /**
     * @var string $discountCurrency Promotion discount currency
     */
    public $discountCurrency;

    /**
     * @var int $updateDate The update date
     */
    public $updateDate;

    /**
     * @var int $createDate The creation date
     */
    public $createDate;

    /**
     * @var bool $applyToAllBillingPeriods Promotion discount applies to first billing period or all billing periods
     */
    public $applyToAllBillingPeriods;

    /**
     * @var bool $neverAllowZero Never allow the value of checkout to be zero
     */
    public $neverAllowZero;

    /**
     * @var int $endDate The end date
     */
    public $endDate;

    /**
     * @var TPPublisherPromotionFixedDiscountt[] $fixedDiscountList 
     */
    public $fixedDiscountList;

    /**
     * @var bool $newCustomersOnly whether promotion allows new customers only
     */
    public $newCustomersOnly;

    /**
     * @var string $status Status
     */
    public $status;

    /**
     * @var float $percentageDiscount Promotion percentage discount
     */
    public $percentageDiscount;

    /**
     * @var bool $unlimitedUses Whether to allow unlimited uses
     */
    public $unlimitedUses;

    /**
     * @var float $discountAmount Promotion discount
     */
    public $discountAmount;

    /**
     * @var string $promotionId Promotion id
     */
    public $promotionId;

    /**
     * @var string $promotionCodePrefix Prefix for all codes
     */
    public $promotionCodePrefix;

    /**
     * @var string $createBy The user who created the object
     */
    public $createBy;

    /**
     * @var string $type Promotion type
     */
    public $type;

    /**
     * @var int $usesAllowed Number of uses allowed by promotion
     */
    public $usesAllowed;

    /**
     * @var string $discount Formated promotion discount
     */
    public $discount;

    /**
     * @var bool $deleted If the object is deleted
     */
    public $deleted;

    

}

