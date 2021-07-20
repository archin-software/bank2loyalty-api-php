<?php

namespace Bank2Loyalty\Models\PosIntegration;

class ProgramResponse
{
    /**
     * programId of program involved
     * @var string
     */
    protected string $programId;

    /**
     * HTTP response
     * @var int
     */
    protected int $httpResponse;

    /**
     * The content type as received from program
     * @var string
     */
    protected string $contentType;

    /**
     * Base64 encoded response from program
     * @var string
     */
    protected string $body;

    /**
     * @return string
     */
    public function getProgramId(): string
    {
        return $this->programId;
    }

    /**
     * @param string $programId
     * @return ProgramResponse
     */
    public function setProgramId(string $programId): ProgramResponse
    {
        $this->programId = $programId;
        return $this;
    }

    /**
     * @return int
     */
    public function getHttpResponse(): int
    {
        return $this->httpResponse;
    }

    /**
     * @param int $httpResponse
     * @return ProgramResponse
     */
    public function setHttpResponse(int $httpResponse): ProgramResponse
    {
        $this->httpResponse = $httpResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return ProgramResponse
     */
    public function setContentType(string $contentType): ProgramResponse
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return ProgramResponse
     */
    public function setBody(string $body): ProgramResponse
    {
        $this->body = $body;
        return $this;
    }
}
