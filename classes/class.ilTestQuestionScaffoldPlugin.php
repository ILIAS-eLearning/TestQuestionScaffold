<?php

/**
 * This file is part of ILIAS, a powerful learning management system
 * published by ILIAS open source e-Learning e.V.
 *
 * ILIAS is licensed with the GPL-3.0,
 * see https://www.gnu.org/licenses/gpl-3.0.en.html
 * You should have received a copy of said license along with the
 * source code, too.
 *
 * If this is not the case or you just want to try ILIAS, you'll find
 * us at:
 * https://www.ilias.de
 * https://github.com/ILIAS-eLearning
 *
 *********************************************************************/

class ilTestQuestionScaffoldPlugin extends ilQuestionsPlugin
{
    /** @var string */
    public const CTYPE = "Modules";
    /** @var string */
    public const CNAME = "TestQuestionPool";
    /** @var string */
    public const SLOT_ID = "qst";
    /** @var string */
    public const PNAME = "TestQuestionScaffold";

    public function getPluginName(): string
    {
        return self::PNAME;
    }

    public function getQuestionType(): string
    {
        return "TestQuestionScaffold";
    }

    final public function getQuestionTypeTranslation(): string
    {
        return $this->txt($this->getQuestionType());
    }

    protected function beforeUninstall(): bool
    {
        return parent::beforeUninstall();
    }
}
