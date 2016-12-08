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
 * The TPPublisherExperienceApi class.
 */
class TPPublisherExperienceApi  extends TPAPIBase {



    /**
     * @return getRequestTPPublisherExperienceApi
     */
    public function getRequest(){

        return new getRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return updateRequestTPPublisherExperienceApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return loadRequestTPPublisherExperienceApi
     */
    public function loadRequest(){

        return new loadRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return deleteRequestTPPublisherExperienceApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return createRequestTPPublisherExperienceApi
     */
    public function createRequest(){

        return new createRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return saveRequestTPPublisherExperienceApi
     */
    public function saveRequest(){

        return new saveRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return duplicateRequestTPPublisherExperienceApi
     */
    public function duplicateRequest(){

        return new duplicateRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return revisionRequestTPPublisherExperienceApi
     */
    public function revisionRequest(){

        return new revisionRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return revisionsRequestTPPublisherExperienceApi
     */
    public function revisionsRequest(){

        return new revisionsRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return commitRequestTPPublisherExperienceApi
     */
    public function commitRequest(){

        return new commitRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return unpublishRequestTPPublisherExperienceApi
     */
    public function unpublishRequest(){

        return new unpublishRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return embedRequestTPPublisherExperienceApi
     */
    public function embedRequest(){

        return new embedRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return commitRevisionRequestTPPublisherExperienceApi
     */
    public function commitRevisionRequest(){

        return new commitRevisionRequestTPPublisherExperienceApi($this->apiClient);
    }


    /**
     * @return publishRequestTPPublisherExperienceApi
     */
    public function publishRequest(){

        return new publishRequestTPPublisherExperienceApi($this->apiClient);
    }
}



/**
 * Gets the experience
 */
class getRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return getRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Updates an existing experience
 */
class updateRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return updateRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * URL to the image that covers the experience
     * @param string $coverImageUrl
     * @return updateRequestTPPublisherExperienceApi
     */
    public function coverImageUrl($coverImageUrl){
        $this->request['coverImageUrl'] = $coverImageUrl;
        return $this;
    }
    

    /**
     * Experience title
     * @param string $title
     * @return updateRequestTPPublisherExperienceApi
     */
    public function title($title){
        $this->request['title'] = $title;
        return $this;
    }
    

    /**
     * Experience description
     * @param string $description
     * @return updateRequestTPPublisherExperienceApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        if (isset($this->request['coverImageUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'coverImageUrl' ) ] = $this->apiClient->toQueryValue($this->request['coverImageUrl']);
        }
        if (isset($this->request['title'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'title' ) ] = $this->apiClient->toQueryValue($this->request['title']);
        }
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/update', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Loads experiences with stats by filter
 */
class loadRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return loadRequestTPPublisherExperienceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Whether return only published or not, to omit do not pass
     * @param bool $isLive
     * @return loadRequestTPPublisherExperienceApi
     */
    public function isLive($isLive){
        $this->request['isLive'] = $isLive;
        return $this;
    }
    

    /**
     * Search value
     * @param string $q
     * @return loadRequestTPPublisherExperienceApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    

    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return loadRequestTPPublisherExperienceApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    

    /**
     * Maximum index of returned results
     * @param int $limit
     * @return loadRequestTPPublisherExperienceApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperienceStat[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['isLive'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'isLive' ) ] = $this->apiClient->toQueryValue($this->request['isLive']);
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/load', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperienceStat', 'array');
        

    }

}


/**
 * Deletes the experience
 */
class deleteRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return deleteRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/delete', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Creates an experience
 */
class createRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return createRequestTPPublisherExperienceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * URL to the image that covers the experience
     * @param string $coverImageUrl
     * @return createRequestTPPublisherExperienceApi
     */
    public function coverImageUrl($coverImageUrl){
        $this->request['coverImageUrl'] = $coverImageUrl;
        return $this;
    }
    

    /**
     * Experience title
     * @param string $title
     * @return createRequestTPPublisherExperienceApi
     */
    public function title($title){
        $this->request['title'] = $title;
        return $this;
    }
    

    /**
     * Experience description
     * @param string $description
     * @return createRequestTPPublisherExperienceApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        if (isset($this->request['coverImageUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'coverImageUrl' ) ] = $this->apiClient->toQueryValue($this->request['coverImageUrl']);
        }
        if (isset($this->request['title'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'title' ) ] = $this->apiClient->toQueryValue($this->request['title']);
        }
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/create', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Saves experience's draft
 */
class saveRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return saveRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Experience model in JSON format
     * @param string $model
     * @return saveRequestTPPublisherExperienceApi
     */
    public function model($model){
        $this->request['model'] = $model;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        if (isset($this->request['model'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'model' ) ] = $this->apiClient->toQueryValue($this->request['model']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/save', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Gets the experience
 */
class duplicateRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return duplicateRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/duplicate', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Load experience model by version
 */
class revisionRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return revisionRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * The version
     * @param float $version
     * @return revisionRequestTPPublisherExperienceApi
     */
    public function version($version){
        $this->request['version'] = $version;
        return $this;
    }
    

    /**
     * Execute request
    * @return string

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        if (isset($this->request['version'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'version' ) ] = $this->apiClient->toQueryValue($this->request['version']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/revision', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'string');
        

    }

}


/**
 * Loads experience versions
 */
class revisionsRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return revisionsRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperienceVersion[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/revisions', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperienceVersion', 'array');
        

    }

}


/**
 * Commits saved draft as a new version
 */
class commitRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return commitRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/commit', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Unpublishes the current version - highlight that it's not available to run
 */
class unpublishRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return unpublishRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/unpublish', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Returns embed script
 */
class embedRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Application aid
     * @param string $aid
     * @return embedRequestTPPublisherExperienceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    

    /**
     * Execute request
    * @return string[]

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/embed', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'string', 'array');
        

    }

}


/**
 * Commits revision as a current version
 */
class commitRevisionRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return commitRevisionRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * The version
     * @param float $version
     * @return commitRevisionRequestTPPublisherExperienceApi
     */
    public function version($version){
        $this->request['version'] = $version;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        if (isset($this->request['version'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'version' ) ] = $this->apiClient->toQueryValue($this->request['version']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/commitRevision', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}


/**
 * Publishes the current version - highlight that it's available to run
 */
class publishRequestTPPublisherExperienceApi  extends TPAPIBase {
    protected $request = array();

    /**
     * Experience identifier
     * @param string $experienceId
     * @return publishRequestTPPublisherExperienceApi
     */
    public function experienceId($experienceId){
        $this->request['experienceId'] = $experienceId;
        return $this;
    }
    

    /**
     * Execute request
    * @return TPPublisherExperience

    */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['experienceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'experienceId' ) ] = $this->apiClient->toQueryValue($this->request['experienceId']);
        }
        


        $headerParams = array();
        $headerParams['Accept'] = '(mediaType,application/json)';
        $headerParams['Content-Type'] = '';
        


        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/experience/publish', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExperience');
        

    }

}

