<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\Expression;
use app\models\Application;

/**
 * Application moderation form
 */
class FormAdminApplicationModeration extends Model
{
    public $status;
    public $decline_comment;

    /**
     * Validation rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['status', 'required'],
        ];
    }

    /**
     * Create application message
     *
     * @param object $application application object
     *
     * @return bool
     */
    public function create($application)
    {
        if (!$this->validate()) {
            return false;
        }

        if ($this->status == Application::STATUS_DECLINED) {
            $application->status          = Application::STATUS_DECLINED;
            $application->decline_comment = $this->decline_comment;
            $application->save(true, ['status', 'decline_comment']);
        } else {
            $application->status = Application::STATUS_APPROVED;
            $application->save(true, ['status']);
        }
        return true;
    }
}