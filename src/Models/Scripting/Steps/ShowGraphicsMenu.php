<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Scripting\ScriptAction;

class ShowGraphicsMenu extends BaseStep
{
    /**
     * Set the cancel action when the user pressed the cancel button
     * @var ScriptAction|null
     */
    protected ?ScriptAction $cancelAction = null;

    /**
     * The page title that is shown on the top area
     * @var string|null
     */
    protected ?string $title = null;

    /**
     * The page number to show when the menu is started
     * @var int
     */
    protected int $initialImageIndex;

    /**
     * The list of graphical elements to show as menu choices
     * @var GraphInfo[]
     */
    protected array $graphList;

    /**
     * @return ScriptAction|null
     */
    public function getCancelAction(): ?ScriptAction
    {
        return $this->cancelAction;
    }

    /**
     * @param ScriptAction|null $cancelAction
     * @return ShowGraphicsMenu
     */
    public function setCancelAction(?ScriptAction $cancelAction): ShowGraphicsMenu
    {
        $this->cancelAction = $cancelAction;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return ShowGraphicsMenu
     */
    public function setTitle(?string $title): ShowGraphicsMenu
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getInitialImageIndex(): int
    {
        return $this->initialImageIndex;
    }

    /**
     * @param int $initialImageIndex
     * @return ShowGraphicsMenu
     */
    public function setInitialImageIndex(int $initialImageIndex): ShowGraphicsMenu
    {
        $this->initialImageIndex = $initialImageIndex;
        return $this;
    }

    /**
     * @return GraphInfo[]
     */
    public function getGraphList(): array
    {
        return $this->graphList;
    }

    /**
     * @param GraphInfo[] $graphList
     * @return ShowGraphicsMenu
     */
    public function setGraphList(array $graphList): ShowGraphicsMenu
    {
        $this->graphList = $graphList;
        return $this;
    }
}
