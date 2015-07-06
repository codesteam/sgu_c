<?php
namespace app\commands;

use yii;
use yii\console\Controller;

/**
 * Development command
 */
class DevController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionAuthRules($message = 'hello world')
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $application_moderate = $auth->createPermission('application_moderate');
        $application_moderate->description = 'Application moderation';
        $auth->add($application_moderate);
        $application_listing = $auth->createPermission('application_listing');
        $application_listing->description = 'View applications listing';
        $auth->add($application_listing);
        $application_set_status = $auth->createPermission('application_set_status');
        $application_set_status->description = 'Directly set application status';
        $auth->add($application_set_status);

        $ticket_listing = $auth->createPermission('ticket_listing');
        $ticket_listing->description = 'View tickets listing';
        $auth->add($ticket_listing);

        $moderator = $auth->createRole('moderator');
        $auth->add($moderator);
        $auth->addChild($moderator, $application_moderate);
        $auth->addChild($moderator, $application_listing);
        $auth->addChild($moderator, $ticket_listing);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $application_moderate);
        $auth->addChild($admin, $application_listing);
        $auth->addChild($admin, $application_set_status);
        $auth->addChild($admin, $ticket_listing);
    }
}
