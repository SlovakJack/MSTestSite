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
 * The TPPublisherInquiryComment model.
 * model
 */
class TPPublisherInquiryComment {
    public static $dataTypes = array(
    "name" => "string",
    "internal" => "string",
    "email" => "string",
    "submitterType" => "int",
    "commentId" => "string",
    "createDate" => "string",
    "message" => "string",
    "user" => "TPPublisherUser",
    );

    /**
     * @var string $name The name
     */
    public $name;

    /**
     * @var string $internal Internal comment
     */
    public $internal;

    /**
     * @var string $email User's email address
     */
    public $email;

    /**
     * @var int $submitterType Submitter type
     */
    public $submitterType;

    /**
     * @var string $commentId Comment
     */
    public $commentId;

    /**
     * @var string $createDate The creation date
     */
    public $createDate;

    /**
     * @var string $message Message
     */
    public $message;

    /**
     * @var TPPublisherUser $user The user
     */
    public $user;

    

}

