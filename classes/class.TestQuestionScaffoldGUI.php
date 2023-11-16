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
 * If this is not the case or you just want to try ILIAS, you"ll find
 * us at:
 * https://www.ilias.de
 * https://github.com/ILIAS-eLearning
 *
 *********************************************************************/

/**
 * @ilCtrl_IsCalledBy TestQuestionScaffoldGUI: ilObjQuestionPoolGUI, ilObjTestGUI, ilQuestionEditGUI, ilTestExpressPageObjectGUI
 */
class TestQuestionScaffoldGUI extends assQuestionGUI
{
    /**
     * @inheritDoc
     */
    public function getSolutionOutput(
        $active_id,
        $pass = null,
        $graphicalOutput = false,
        $result_output = false,
        $show_question_only = true,
        $show_feedback = false,
        $show_correct_solution = false,
        $show_manual_scoring = false,
        $show_question_text = true
    ): string {
        return '';
    }

    public function getPreview($show_question_only = false, $showInlineFeedback = false): string
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getTestOutput(
        $active_id,
        $pass,
        $is_question_postponed,
        $user_post_solutions,
        $show_specific_inline_feedback
    ): string {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getSpecificFeedbackOutput($userSolution) : string
    {
        return "";
    }
}
