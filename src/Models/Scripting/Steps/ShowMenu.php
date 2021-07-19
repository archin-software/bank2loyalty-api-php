<?php

namespace PhpExample\Models\Scripting\Steps;

use PhpExample\Models\Scripting\MenuButton;

class ShowMenu extends BaseStep
{
    /**
     * Menu text to display
     * @var string
     */
    protected string $menuText;

    /**
     * At least Button1 MenuButton data must be set
     * @var MenuButton
     */
    protected MenuButton $button1;

    /**
     * Button2 MenuButton data
     * @var MenuButton|null
     */
    protected ?MenuButton $button2 = null;

    /**
     * Button3 MenuButton data
     * @var MenuButton|null
     */
    protected ?MenuButton $button3 = null;

    /**
     * Button4 MenuButton data
     * @var MenuButton|null
     */
    protected ?MenuButton $button4 = null;

    /**
     * @return string
     */
    public function getMenuText(): string
    {
        return $this->menuText;
    }

    /**
     * @param string $menuText
     * @return ShowMenu
     */
    public function setMenuText(string $menuText): ShowMenu
    {
        $this->menuText = $menuText;
        return $this;
    }

    /**
     * @return MenuButton
     */
    public function getButton1(): MenuButton
    {
        return $this->button1;
    }

    /**
     * @param MenuButton $button1
     * @return ShowMenu
     */
    public function setButton1(MenuButton $button1): ShowMenu
    {
        $this->button1 = $button1;
        return $this;
    }

    /**
     * @return MenuButton|null
     */
    public function getButton2(): ?MenuButton
    {
        return $this->button2;
    }

    /**
     * @param MenuButton|null $button2
     * @return ShowMenu
     */
    public function setButton2(?MenuButton $button2): ShowMenu
    {
        $this->button2 = $button2;
        return $this;
    }

    /**
     * @return MenuButton|null
     */
    public function getButton3(): ?MenuButton
    {
        return $this->button3;
    }

    /**
     * @param MenuButton|null $button3
     * @return ShowMenu
     */
    public function setButton3(?MenuButton $button3): ShowMenu
    {
        $this->button3 = $button3;
        return $this;
    }

    /**
     * @return MenuButton|null
     */
    public function getButton4(): ?MenuButton
    {
        return $this->button4;
    }

    /**
     * @param MenuButton|null $button4
     * @return ShowMenu
     */
    public function setButton4(?MenuButton $button4): ShowMenu
    {
        $this->button4 = $button4;
        return $this;
    }
}
