<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

// \yii\base\Event::on(
//     \BuzzingPixel\CraftScheduler\CraftSchedulerPlugin::class,
//     \BuzzingPixel\CraftScheduler\CraftSchedulerPlugin::EVEN_SET_DEFAULT_CONTAINER,
//     function (\BuzzingPixel\CraftScheduler\ScheduleRetrieval\SetDefaultContainerEvent $e) {
//         $e->setDefaultContainer('asdf');
//     }
// );

// \yii\base\Event::on(
//     \BuzzingPixel\CraftScheduler\ScheduleRetrieval\RetrieveSchedule::class,
//     \BuzzingPixel\CraftScheduler\ScheduleRetrieval\RetrieveSchedule::EVENT_RETRIEVE_SCHEDULE,
//     static function (\BuzzingPixel\CraftScheduler\ScheduleRetrieval\RetrieveScheduleEvent $e): void {
//         $e->scheduleConfigItems()->addItem(item: new \BuzzingPixel\CraftScheduler\ScheduleRetrieval\ScheduleConfigItem::__construct(
//             TestClass::class,
//             \BuzzingPixel\CraftScheduler\Frequency::ALWAYS,
//         ));
//     }
// );

return [
    'defaultWeekStartDay' => 1,
    'omitScriptNameInUrls' => true,
    'cpTrigger' => 'admin',
    'securityKey' => 'bROI6mc4AXG5BKnj-4arI-FyDTq0vKxh',
    'devMode' => true,
    'allowAdminChanges' => true,
];
