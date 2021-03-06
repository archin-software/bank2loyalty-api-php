<?php

namespace Bank2Loyalty\Models\Scripting;

use Bank2Loyalty\Models\Scripting\Steps\ShowCard;
use Bank2Loyalty\Models\Scripting\Steps\ShowEnterAmount;
use Bank2Loyalty\Models\Scripting\Steps\ShowEnterPin;
use Bank2Loyalty\Models\Scripting\Steps\ShowGraphicsMenu;
use Bank2Loyalty\Models\Scripting\Steps\ShowMenu;
use Bank2Loyalty\Models\Scripting\Steps\ShowMessage;
use Bank2Loyalty\Models\Scripting\Steps\ShowOpticalScan;
use Bank2Loyalty\Models\Scripting\Steps\ShowYesNoQuestion;

class ScriptStep extends BaseModel
{
    /**
     * Show a card action screen
     * @var ShowCard|null
     */
    protected ?ShowCard $showCard = null;

    /**
     * Show a menu action screen
     * @var ShowMenu|null
     */
    protected ?ShowMenu $showMenu = null;

    /**
     * Show a message action screen
     * @var ShowMessage|null
     */
    protected ?ShowMessage $showMessage = null;

    /**
     * Show a yes/no question action screen
     * @var ShowYesNoQuestion|null
     */
    protected ?ShowYesNoQuestion $showYesNoQuestion = null;

    /**
     * Show an optical scan action screen
     * @var ShowOpticalScan|null
     */
    protected ?ShowOpticalScan $showOpticalScan = null;

    /**
     * Show a screen to enter an amount
     * @var ShowEnterAmount|null
     */
    protected ?ShowEnterAmount $showEnterAmount = null;

    /**
     * Show a screen to enter a pin
     * @var ShowEnterPin|null
     */
    protected ?ShowEnterPin $showEnterPin = null;

    /**
     * Show a graphical menu
     * @var ShowGraphicsMenu|null
     */
    protected ?ShowGraphicsMenu $showGraphicsMenu = null;

    /**
     * Just perform this (script)action
     * @var ScriptAction|null
     */
    protected ?ScriptAction $scriptAction = null;

    /**
     * @return ShowCard|null
     */
    public function getShowCard(): ?ShowCard
    {
        return $this->showCard;
    }

    /**
     * @param ShowCard|null $showCard
     * @return ScriptStep
     */
    public function setShowCard(?ShowCard $showCard): ScriptStep
    {
        $this->showCard = $showCard;
        return $this;
    }

    /**
     * @return ShowMenu|null
     */
    public function getShowMenu(): ?ShowMenu
    {
        return $this->showMenu;
    }

    /**
     * @param ShowMenu|null $showMenu
     * @return ScriptStep
     */
    public function setShowMenu(?ShowMenu $showMenu): ScriptStep
    {
        $this->showMenu = $showMenu;
        return $this;
    }

    /**
     * @return ShowMessage|null
     */
    public function getShowMessage(): ?ShowMessage
    {
        return $this->showMessage;
    }

    /**
     * @param ShowMessage|null $showMessage
     * @return ScriptStep
     */
    public function setShowMessage(?ShowMessage $showMessage): ScriptStep
    {
        $this->showMessage = $showMessage;
        return $this;
    }

    /**
     * @return ShowYesNoQuestion|null
     */
    public function getShowYesNoQuestion(): ?ShowYesNoQuestion
    {
        return $this->showYesNoQuestion;
    }

    /**
     * @param ShowYesNoQuestion|null $showYesNoQuestion
     * @return ScriptStep
     */
    public function setShowYesNoQuestion(?ShowYesNoQuestion $showYesNoQuestion): ScriptStep
    {
        $this->showYesNoQuestion = $showYesNoQuestion;
        return $this;
    }

    /**
     * @return ShowOpticalScan|null
     */
    public function getShowOpticalScan(): ?ShowOpticalScan
    {
        return $this->showOpticalScan;
    }

    /**
     * @param ShowOpticalScan|null $showOpticalScan
     * @return ScriptStep
     */
    public function setShowOpticalScan(?ShowOpticalScan $showOpticalScan): ScriptStep
    {
        $this->showOpticalScan = $showOpticalScan;
        return $this;
    }

    /**
     * @return ShowEnterAmount|null
     */
    public function getShowEnterAmount(): ?ShowEnterAmount
    {
        return $this->showEnterAmount;
    }

    /**
     * @param ShowEnterAmount|null $showEnterAmount
     * @return ScriptStep
     */
    public function setShowEnterAmount(?ShowEnterAmount $showEnterAmount): ScriptStep
    {
        $this->showEnterAmount = $showEnterAmount;
        return $this;
    }

    /**
     * @return ShowEnterPin|null
     */
    public function getShowEnterPin(): ?ShowEnterPin
    {
        return $this->showEnterPin;
    }

    /**
     * @param ShowEnterPin|null $showEnterPin
     * @return ScriptStep
     */
    public function setShowEnterPin(?ShowEnterPin $showEnterPin): ScriptStep
    {
        $this->showEnterPin = $showEnterPin;
        return $this;
    }

    /**
     * @return ShowGraphicsMenu|null
     */
    public function getShowGraphicsMenu(): ?ShowGraphicsMenu
    {
        return $this->showGraphicsMenu;
    }

    /**
     * @param ShowGraphicsMenu|null $showGraphicsMenu
     * @return ScriptStep
     */
    public function setShowGraphicsMenu(?ShowGraphicsMenu $showGraphicsMenu): ScriptStep
    {
        $this->showGraphicsMenu = $showGraphicsMenu;
        return $this;
    }

    /**
     * @return ScriptAction|null
     */
    public function getScriptAction(): ?ScriptAction
    {
        return $this->scriptAction;
    }

    /**
     * @param ScriptAction|null $scriptAction
     * @return ScriptStep
     */
    public function setScriptAction(?ScriptAction $scriptAction): ScriptStep
    {
        $this->scriptAction = $scriptAction;
        return $this;
    }
}
