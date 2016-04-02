<?php

use yii\db\Schema;
use yii\db\Migration;

class m160331_023259_add_conferences_table extends Migration
{
    public function up()
    {
        $this->createTable('conference_events', [
            'id'           => Schema::TYPE_PK,
            'title'        => Schema::TYPE_STRING . '(255) NOT NULL',
            'status'       => "ENUM('draft', 'active', 'archived') NOT NULL",
            'type'         => "ENUM('conference', 'event') NOT NULL",
            'start_at'     => Schema::TYPE_DATE,
            'end_at'       => Schema::TYPE_DATE,
            'internal_url' => Schema::TYPE_STRING . '(255) NOT NULL',
            'slug'         => Schema::TYPE_STRING . '(255) NOT NULL',
            'created_at'   => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
        $this->createTable('conference_event_dates', [
            'id'                  => Schema::TYPE_PK,
            'conference_event_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'action'              => Schema::TYPE_STRING . '(255) NOT NULL',
            'action_at'           => Schema::TYPE_DATETIME . ' NOT NULL',
            'action_at_border'    => "ENUM('eq', 'lt') NOT NULL",
            'created_at'          => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
        $this->addForeignKey('fk_conference_event_dates', 'conference_event_dates', 'conference_event_id', 'conference_events', 'id', 'CASCADE', 'CASCADE');
        $this->batchInsert('conference_events', ['id', 'slug', 'title', 'start_at', 'end_at', 'status', 'type', 'internal_url'], [
            [1, 'conference-09-2015',  'Перспективные направления развития отечественных информационных технологий', '2015-09-23', '2015-09-25', 'archived', 'conference', '/2015-09-info'],
            [2, 'it-festival-09-2015', 'IT-Фестиваль', '2015-09-23', '2015-09-25', 'archived', 'event', '/2015-09-it-festival'],
            [3, 'conference-09-2016',  'Перспективные направления развития отечественных информационных технологий', '2016-09-13', '2016-09-17', 'active', 'conference', '/info'],
        ]);
        $this->batchInsert('conference_event_dates', ['conference_event_id', 'action_at', 'action_at_border', 'action'], [
            // 2015
            [1, '2015-09-10', 'lt', 'Представление аннотаций докладов (до 600 символов)'],
            [1, '2015-09-13', 'lt', 'Сообщение о включении доклада в программу конференции'],
            [1, '2015-09-22', 'lt', 'Представление заявок участников конференции'],
            [1, '2015-09-22', 'lt', 'Оплата за участие в конференции <br/>(после получения сообщения о включении доклада в программу конференции)'],
            [1, '2015-09-22', 'lt', 'Рассылка официальных приглашений и программы конференции'],
            [1, '2015-09-22', 'eq', 'День заезда, поселение, регистрация'],
            [1, '2015-09-23', 'eq', 'Регистрация, открытие и работа конференции'],
            [1, '2015-09-25', 'eq', 'Закрытие конференции'],
            [1, '2015-09-26', 'eq', 'День отъезда'],

            // 2016
            [3, '2016-08-15', 'lt', 'Представление аннотаций докладов (до 600 символов)'],
            [3, '2016-09-08', 'lt', 'Представление заявок участников конференции'],
            [3, '2016-09-12', 'lt', 'Оплата за участие в конференции <br/>(после получения сообщения о включении доклада в программу конференции)'],
            [3, '2016-09-12', 'lt', 'Рассылка официальных приглашений и программы конференции'],
            [3, '2016-09-12', 'eq', 'День заезда, поселение, регистрация'],
            [3, '2016-09-13', 'eq', 'Регистрация, открытие и работа конференции'],
            [3, '2016-09-17', 'eq', 'Закрытие конференции'],
            [3, '2016-09-18', 'eq', 'День отъезда'],
        ]);

        $this->addColumn('categories', 'conference_event_id', Schema::TYPE_INTEGER." NOT NULL");
        $this->execute('UPDATE categories SET conference_event_id = 1');
        $this->addForeignKey('fk_categories', 'categories', 'conference_event_id', 'conference_events', 'id', 'CASCADE', 'CASCADE');

        $this->batchInsert('categories', ['conference_event_id', 'name'], [
            [3, 'Политика информатизации и стратегия развития информационного общества'],
            [3, 'Информационная война и информационная безопасность '],
            [3, 'Информационные технологии в ОПК и критических инфраструктурах'],
            [3, 'Импортозамещение и технологическая безопасность ИТ-сферы'],
            [3, 'Информационная среда и телекоммуникационная инфраструктура'],
            [3, 'Безопасный интеллектуальный район-город-регион '],
            [3, 'ИТ-специалисты и кадровый потенциал промышленных предприятий '],
            [3, 'Теоретические проблемы развития перспективных информационных технологий'],
            [3, 'ИТ-продукты и услуги'],
            [3, 'ИТ в машиностроении, приборостроении'],
            [3, 'ИТ в морехозяйственной деятельности'],
            [3, 'Информатизация социальной сферы '],
            [3, 'Подготовка и переподготовка ИТ-специалистов'],
            [3, 'Образовательные и профессиональные стандарты в ИТ-сфере'],
        ]);
    }

    public function down()
    {
        echo "m160331_023259_add_conferences_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
