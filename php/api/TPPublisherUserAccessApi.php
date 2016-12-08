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
 * The TPPublisherUserAccessApi class.
 */
class TPPublisherUserAccessApi  extends TPAPIBase {



    /**
     * @return updateRequestTPPublisherUserAccessApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherUserAccessApi($this->apiClient);
    }


    /**
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function checkAccessRequest(){

        return new checkAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }


    /**
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function listAccessRequest(){

        return new listAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }


    /**
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function grantAccessRequest(){

        return new grantAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }


    /**
     * @return revokeAccessRequestTPPublisherUserAccessApi
     */
    public function revokeAccessRequest(){

        return new revokeAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }
}



/**
 * Update user access
 */
class updateRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();

    /**
     * The access id
     * @param string $accessId
     * @return updateRequestTPPublisherUserAccessApi
     */
    public function accessId($accessId){
        $this->request['accessId'] = $accessId;
        return $this;
    }
    

    /**
     * Expire date
     * @param string $expireDate
     * @return updateRequestTPPublisherUserAccessApi
     */
    public function expireDate($expireDate){
        $this->request['expireDate'] = $expireDate;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherAccess

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['accessId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessId' ) ] = $this->apiClient->toQueryValue($this->request['accessId']);
        }
        if (isset($this->request['expireDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expireDate' ) ] = $this->apiClient->toQueryValue($this->request['expireDate']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess');
        

    }

}


/**
 * Checks user access
 */
class checkAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * User's uid
     * @param string $uid
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    

    /**
     * Unique id for resource
     * @param string $rid
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherAccess

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/check', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess');
        

    }

}


/**
 * Lists a user's access
 */
class listAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * User's uid
     * @param string $uid
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherAccess[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess', 'array');
        

    }

}


/**
 * Grants access to a user
 */
class grantAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Unique id for resource
     * @param string $rid
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    

    /**
     * User's uid
     * @param string $uid
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    

    /**
     * User's email addresses
     * @param string $emails
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function emails($emails){
        $this->request['emails'] = $emails;
        return $this;
    }
    

    /**
     * The access item expire date; null means unlimited
     * @param int $expireDate
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function expireDate($expireDate){
        $this->request['expireDate'] = $expireDate;
        return $this;
    }
    

    /**
     * Flag that email should be sent
     * @param bool $sendEmail
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function sendEmail($sendEmail){
        $this->request['sendEmail'] = $sendEmail;
        return $this;
    }
    

    /**
     * The URL of the page
     * @param string $url
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    

    /**
     * Message
     * @param string $message
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function message($message){
        $this->request['message'] = $message;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherAccess[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        if (isset($this->request['emails'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'emails' ) ] = $this->apiClient->toQueryValue($this->request['emails']);
        }
        if (isset($this->request['expireDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expireDate' ) ] = $this->apiClient->toQueryValue($this->request['expireDate']);
        }
        if (isset($this->request['sendEmail'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'sendEmail' ) ] = $this->apiClient->toQueryValue($this->request['sendEmail']);
        }
        if (isset($this->request['url'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'url' ) ] = $this->apiClient->toQueryValue($this->request['url']);
        }
        if (isset($this->request['message'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'message' ) ] = $this->apiClient->toQueryValue($this->request['message']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/grant', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess', 'array');
        

    }

}


/**
 * Revokes a user's access
 */
class revokeAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();

    /**
     * The access id
     * @param string $accessId
     * @return revokeAccessRequestTPPublisherUserAccessApi
     */
    public function accessId($accessId){
        $this->request['accessId'] = $accessId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherAccess

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['accessId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessId' ) ] = $this->apiClient->toQueryValue($this->request['accessId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/revoke', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess');
        

    }

}

