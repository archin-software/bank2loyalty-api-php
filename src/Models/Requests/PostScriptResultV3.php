<?php

namespace Bank2Loyalty\Models\Requests;

use Bank2Loyalty\Models\Scripting\ScriptActionResults;

class PostScriptResultV3 extends RequestV3
{
    /**
     * Script action results from script processing
     * @var ScriptActionResults
     */
    protected ScriptActionResults $scriptActionResults;

    /**
     * @return ScriptActionResults
     */
    public function getScriptActionResults(): ScriptActionResults
    {
        return $this->scriptActionResults;
    }

    /**
     * @param ScriptActionResults $scriptActionResults
     * @return PostScriptResultV3
     */
    public function setScriptActionResults(ScriptActionResults $scriptActionResults): PostScriptResultV3
    {
        $this->scriptActionResults = $scriptActionResults;
        return $this;
    }
}
