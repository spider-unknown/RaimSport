<?php

use Illuminate\Database\Seeder;
use App\Models\AboutUs;
class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::insert([
            'title' => 'Raim1Sport - компания создана для продвижения Казахстанского спорта!',
            'description' => '<p>Наша команда работает на территории нашей страны в сфере проектирования, строительства, модернизации спортивных объектов любого уровня сложности. За время существования нами были воплощены много проектов, которые благополучно работают и приносят людям пользу по сей день. Использую высокие мировые стандарты в спортивных покрытиях, мы внедряем все лучшее в наши проекты, это касается всего остального, что связано с материалами в строительстве спортивных объектов. Мы всегда готовы помочь, и поделиться знанием, опытом для реализации новых идей.</p>',
            'type'=> AboutUs::MAIN
        ]);

        AboutUs::insert([
            'title' => 'Наша миссия',
            'description' => '<p>Создать в Казахстане благоприятные условия для развития спорта</p>',
            'type'=> AboutUs::CHILD
        ]);

        AboutUs::insert([
            'title' => 'Наше видение',
            'description' => '<p>Спортивный Казахстан</p>',
            'type'=> AboutUs::CHILD
        ]);

        AboutUs::insert([
            'title' => 'Наши ценности',
            'description' => '<p>Спортивная молодежь</p>',
            'type'=> AboutUs::CHILD
        ]);


        AboutUs::insert([
            'title' => 'Лет Опыта',
            'description' => '3',
            'type'=> AboutUs::COUNT_CHILD
        ]);
        AboutUs::insert([
            'title' => 'СДЕЛАННЫХ ПРОЕКТОВ',
            'description' => '2',
            'type'=> AboutUs::COUNT_CHILD
        ]);
        AboutUs::insert([
            'title' => 'ДОВОЛЬНЫХ КЛИЕНТОВ',
            'description' => '4',
            'type'=> AboutUs::COUNT_CHILD
        ]);
        AboutUs::insert([
            'title' => 'БИЗНЕС ПАРТНЕРОВ',
            'description' => '5',
            'type'=> AboutUs::COUNT_CHILD
        ]);

    }
}
