<?php

namespace Bank2Loyalty\Models\Requests;

abstract class BaseRequest
{
    /**
     * Current version of request
     * @var int
     */
    protected int $protocolVersion;

    /**
     * ProgramId that is called, Guid format
     * @var string
     */
    protected string $programId;

    /**
     * OverrideProgramId if set in portal, to allow identifying your program
     * @var string|null
     */
    protected ?string $overrideProgramId = null;

    /**
     * @return int
     */
    public function getProtocolVersion(): int
    {
        return $this->protocolVersion;
    }

    /**
     * @param int $protocolVersion
     * @return PostRequest
     */
    public function setProtocolVersion(int $protocolVersion): BaseRequest
    {
        $this->protocolVersion = $protocolVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getProgramId(): string
    {
        return $this->programId;
    }

    /**
     * @param string $programId
     * @return BaseRequest
     */
    public function setProgramId(string $programId): BaseRequest
    {
        $this->programId = $programId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOverrideProgramId(): ?string
    {
        return $this->overrideProgramId;
    }

    /**
     * @param string|null $overrideProgramId
     * @return BaseRequest
     */
    public function setOverrideProgramId(?string $overrideProgramId): BaseRequest
    {
        $this->overrideProgramId = $overrideProgramId;
        return $this;
    }
}
