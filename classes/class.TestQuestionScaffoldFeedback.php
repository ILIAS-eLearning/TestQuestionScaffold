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

class TestQuestionScaffoldFeedback extends ilAssQuestionFeedback
{
    /**
     * @inheritDoc
     */
    public function getSpecificAnswerFeedbackTestPresentation($questionId, $questionIndex, $answerIndex) : string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function completeSpecificFormProperties(ilPropertyFormGUI $form) : void
    {
    }

    /**
     * @inheritDoc
     */
    public function initSpecificFormProperties(ilPropertyFormGUI $form) : void
    {
    }

    /**
     * @inheritDoc
     */
    public function saveSpecificFormProperties(ilPropertyFormGUI $form) : void
    {
    }

    /**
     * @inheritDoc
     */
    public function getSpecificAnswerFeedbackContent($questionId, $questionIndex, $answerIndex) : string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function getAllSpecificAnswerFeedbackContents($questionId) : string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function saveSpecificAnswerFeedbackContent($questionId, $questionIndex, $answerIndex, $feedbackContent) : int
    {
        return 1;
    }

    /**
     * @inheritDoc
     */
    public function deleteSpecificAnswerFeedbacks($questionId, $isAdditionalContentEditingModePageObject) : void
    {
    }

    /**
     * @inheritDoc
     */
    protected function duplicateSpecificFeedback($originalQuestionId, $duplicateQuestionId) : void
    {
    }

    /**
     * @inheritDoc
     */
    protected function isSpecificAnswerFeedbackId($feedbackId) : bool
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    protected function syncSpecificFeedback($originalQuestionId, $duplicateQuestionId) : void
    {
    }

    /**
     * @inheritDoc
     */
    public function getSpecificAnswerFeedbackExportPresentation($questionId, $questionIndex, $answerIndex) : string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function importSpecificAnswerFeedback($questionId, $questionIndex, $answerIndex, $feedbackContent) : void
    {
    }
}
