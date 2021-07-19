<?php

namespace PhpExample\Models\Requests;

use PhpExample\Models\Scripting\ScriptActionResults;

class PostScriptResult extends PostRequest
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
     * @return PostScriptResult
     */
    public function setScriptActionResults(ScriptActionResults $scriptActionResults): PostScriptResult
    {
        $this->scriptActionResults = $scriptActionResults;
        return $this;
    }
}
