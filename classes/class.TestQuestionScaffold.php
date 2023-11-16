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

class TestQuestionScaffold extends assQuestion
{

    public function saveWorkingData($active_id, $pass = null, $authorized = true): bool
    {
        return true;
    }

    public function calculateReachedPoints($active_id, $pass = null, $authorizedSolution = true, $returndetails = false): float
    {
        return 0.0;
    }

    public function getQuestionType(): string
    {
        return "TestQuestionScaffold";
    }

    public function duplicate($for_test = true, $title = "", $author = "", $owner = "", $testObjId = null): int
    {
        return 0;
    }

    public function getAdditionalTableName(): string
    {
        return "scaffold_qst_data";
    }

    public function isComplete(): bool
    {
        return false;
    }

    public function getAnswerTableName()
    {
        return "qpl_a_scaffold";
    }
}
