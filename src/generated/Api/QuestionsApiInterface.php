<?php
/**
 * QuestionsApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Testbed API
 *
 * API for Testbed project.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: jens.wegar@gmail.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\Question;
use OpenAPI\Server\Model\QuestionRequest;

/**
 * QuestionsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface QuestionsApiInterface
{

    /**
     * Operation createQuestion
     *
     * @param  OpenAPI\Server\Model\QuestionRequest $questionRequest  Create a new question (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Question
     *
     */
    public function createQuestion(QuestionRequest $questionRequest, &$responseCode, array &$responseHeaders);

    /**
     * Operation deleteQuestion
     *
     * @param  int $id   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function deleteQuestion($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation getQuestion
     *
     * @param  int $id   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Question
     *
     */
    public function getQuestion($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation getQuestions
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Question[]
     *
     */
    public function getQuestions(&$responseCode, array &$responseHeaders);

    /**
     * Operation getRandomQuestion
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Question
     *
     */
    public function getRandomQuestion(&$responseCode, array &$responseHeaders);

    /**
     * Operation updateQuestion
     *
     * @param  int $id   (required)
     * @param  OpenAPI\Server\Model\QuestionRequest $questionRequest  Update an existing question (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Question
     *
     */
    public function updateQuestion($id, QuestionRequest $questionRequest, &$responseCode, array &$responseHeaders);
}