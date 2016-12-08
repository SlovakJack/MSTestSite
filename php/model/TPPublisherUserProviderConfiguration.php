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
 * The TPPublisherUserProviderConfiguration model.
 * model
 */
class TPPublisherUserProviderConfiguration {
    public static $dataTypes = array(
    "isDisabled" => "bool",
    "source" => "string",
    "clientId" => "string",
    "userProviderConfigurationId" => "string",
    "appName" => "string",
    "app" => "TPPublisherApp",
    "appId" => "string",
    "typeName" => "string",
    "clientSecret" => "string",
    "title" => "string",
    "isEditable" => "bool",
    );

    /**
     * @var bool $isDisabled User provider configuration is disabled
     */
    public $isDisabled;

    /**
     * @var string $source User provider configuration source
     */
    public $source;

    /**
     * @var string $clientId Janrain client id
     */
    public $clientId;

    /**
     * @var string $userProviderConfigurationId User provider configuration id
     */
    public $userProviderConfigurationId;

    /**
     * @var string $appName Janrain app name as part of url to janrain api. It looks like https://[app-name].rpxnow.com
     */
    public $appName;

    /**
     * @var TPPublisherApp $app Application ref
     */
    public $app;

    /**
     * @var string $appId Janrain app id
     */
    public $appId;

    /**
     * @var string $typeName Janrain entity type
     */
    public $typeName;

    /**
     * @var string $clientSecret Janrain client secret key
     */
    public $clientSecret;

    /**
     * @var string $title The title
     */
    public $title;

    /**
     * @var bool $isEditable User provider configuration is editable
     */
    public $isEditable;

    

}

