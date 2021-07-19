<?php

namespace PhpExample\Models\PosIntegration;

class PosTxnProgram
{
    /**
     * script pos command(s) received in transaction line (can be null)
     * @var string[]
     */
    protected array $scriptPosCommands = [];

    /**
     * Bank2loyalty program id
     * @var string
     */
    protected string $programId;

    /**
     * @return string[]
     */
    public function getScriptPosCommands(): array
    {
        return $this->scriptPosCommands;
    }

    /**
     * @param string[] $scriptPosCommands
     * @return PosTxnProgram
     */
    public function setScriptPosCommands(array $scriptPosCommands): PosTxnProgram
    {
        $this->scriptPosCommands = $scriptPosCommands;
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
     * @return PosTxnProgram
     */
    public function setProgramId(string $programId): PosTxnProgram
    {
        $this->programId = $programId;
        return $this;
    }
}
