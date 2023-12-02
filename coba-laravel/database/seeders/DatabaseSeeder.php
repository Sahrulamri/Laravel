<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();



        User::create([
            'name' => 'Sahrul Amri',
            'username' => 'sahrulamri',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('password')
        ]);


        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, itaque! Velit iure id corrupti assumenda ratione delectus sed quaerat in. Cum iusto officiis magni sunt dolores aspernatur, ipsam enim, perferendis temporibus consequatur dolorem quia adipisci corporis autem ut deleniti fuga sequi aut blanditiis distinctio. Quibusdam natus assumenda iure temporibus in perferendis doloremque corrupti dolorem eum deleniti enim nam autem ea a optio hic, reprehenderit inventore rerum suscipit eaque. Consequatur voluptatum voluptatem corrupti dolore tenetur, ea rerum nemo voluptate doloribus blanditiis vel dolorem totam cum architecto ex adipisci incidunt sunt perferendis, quidem labore ad eaque repudiandae facilis voluptates? Consequatur, quisquam possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum animi recusandae minima placeat. Odit consequatur quaerat iusto, modi corrupti omnis soluta. Ipsum eos nisi exercitationem repudiandae! Excepturi error quos enim optio et rem repellendus nemo beatae, ex, ipsam magni neque eius repellat quis ab unde dolore mollitia debitis? Nulla excepturi enim repellat dolore, nobis consequatur consequuntur hic laudantium optio iusto eaque magnam, expedita exercitationem nesciunt, commodi similique atque. Eius quod, aut commodi incidunt saepe, aspernatur quia, beatae a iusto laudantium sit rerum ad fugiat. Eligendi iure consectetur non, perspiciatis quisquam aliquid voluptatem molestiae, natus ut amet accusamus eum voluptatibus enim recusandae sed est possimus? Quis numquam distinctio illo, voluptatem totam soluta error excepturi corrupti eum quisquam, quo temporibus sequi in nulla quae voluptate aliquid aspernatur doloribus. Id odio nesciunt nobis, aut labore voluptas repudiandae culpa officiis, modi sint quod consequuntur fugit laudantium consectetur repellendus voluptatibus cupiditate ab itaque! Est, quo ipsum sequi quod aut earum. Consequuntur at eos officiis doloribus tenetur voluptatibus veritatis impedit eveniet repellendus nemo magnam, odio adipisci eaque reiciendis amet delectus facere iste? Praesentium corrupti, laboriosam, delectus earum alias quam sapiente sunt blanditiis dicta omnis tempora dolor ea eius. Eum rerum saepe odio, voluptatem corporis aliquam reprehenderit maiores alias, animi reiciendis ipsum fuga amet tempora eius inventore velit dolore, ipsam sunt distinctio odit! Voluptate omnis deserunt quia. Soluta distinctio fugiat provident deleniti voluptatibus culpa atque repudiandae tempora recusandae dolore. Officia ratione obcaecati nemo sapiente tempora expedita fugiat minima quasi voluptates! Doloremque, ex quibusdam autem consectetur nam iure sunt nemo porro, aliquid, aperiam debitis dolor exercitationem fuga! Nobis saepe hic id delectus, omnis est veniam earum natus. Nemo, hic aliquid vel eaque cupiditate inventore suscipit, in, id impedit pariatur nisi amet tempore rem aspernatur qui nostrum nulla? Illo, alias nisi assumenda molestiae corrupti velit corporis inventore tempora!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, itaque! Velit iure id corrupti assumenda ratione delectus sed quaerat in. Cum iusto officiis magni sunt dolores aspernatur, ipsam enim, perferendis temporibus consequatur dolorem quia adipisci corporis autem ut deleniti fuga sequi aut blanditiis distinctio. Quibusdam natus assumenda iure temporibus in perferendis doloremque corrupti dolorem eum deleniti enim nam autem ea a optio hic, reprehenderit inventore rerum suscipit eaque. Consequatur voluptatum voluptatem corrupti dolore tenetur, ea rerum nemo voluptate doloribus blanditiis vel dolorem totam cum architecto ex adipisci incidunt sunt perferendis, quidem labore ad eaque repudiandae facilis voluptates? Consequatur, quisquam possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum animi recusandae minima placeat. Odit consequatur quaerat iusto, modi corrupti omnis soluta. Ipsum eos nisi exercitationem repudiandae! Excepturi error quos enim optio et rem repellendus nemo beatae, ex, ipsam magni neque eius repellat quis ab unde dolore mollitia debitis? Nulla excepturi enim repellat dolore, nobis consequatur consequuntur hic laudantium optio iusto eaque magnam, expedita exercitationem nesciunt, commodi similique atque. Eius quod, aut commodi incidunt saepe, aspernatur quia, beatae a iusto laudantium sit rerum ad fugiat. Eligendi iure consectetur non, perspiciatis quisquam aliquid voluptatem molestiae, natus ut amet accusamus eum voluptatibus enim recusandae sed est possimus? Quis numquam distinctio illo, voluptatem totam soluta error excepturi corrupti eum quisquam, quo temporibus sequi in nulla quae voluptate aliquid aspernatur doloribus. Id odio nesciunt nobis, aut labore voluptas repudiandae culpa officiis, modi sint quod consequuntur fugit laudantium consectetur repellendus voluptatibus cupiditate ab itaque! Est, quo ipsum sequi quod aut earum. Consequuntur at eos officiis doloribus tenetur voluptatibus veritatis impedit eveniet repellendus nemo magnam, odio adipisci eaque reiciendis amet delectus facere iste? Praesentium corrupti, laboriosam, delectus earum alias quam sapiente sunt blanditiis dicta omnis tempora dolor ea eius. Eum rerum saepe odio, voluptatem corporis aliquam reprehenderit maiores alias, animi reiciendis ipsum fuga amet tempora eius inventore velit dolore, ipsam sunt distinctio odit! Voluptate omnis deserunt quia. Soluta distinctio fugiat provident deleniti voluptatibus culpa atque repudiandae tempora recusandae dolore. Officia ratione obcaecati nemo sapiente tempora expedita fugiat minima quasi voluptates! Doloremque, ex quibusdam autem consectetur nam iure sunt nemo porro, aliquid, aperiam debitis dolor exercitationem fuga! Nobis saepe hic id delectus, omnis est veniam earum natus. Nemo, hic aliquid vel eaque cupiditate inventore suscipit, in, id impedit pariatur nisi amet tempore rem aspernatur qui nostrum nulla? Illo, alias nisi assumenda molestiae corrupti velit corporis inventore tempora!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, itaque! Velit iure id corrupti assumenda ratione delectus sed quaerat in. Cum iusto officiis magni sunt dolores aspernatur, ipsam enim, perferendis temporibus consequatur dolorem quia adipisci corporis autem ut deleniti fuga sequi aut blanditiis distinctio. Quibusdam natus assumenda iure temporibus in perferendis doloremque corrupti dolorem eum deleniti enim nam autem ea a optio hic, reprehenderit inventore rerum suscipit eaque. Consequatur voluptatum voluptatem corrupti dolore tenetur, ea rerum nemo voluptate doloribus blanditiis vel dolorem totam cum architecto ex adipisci incidunt sunt perferendis, quidem labore ad eaque repudiandae facilis voluptates? Consequatur, quisquam possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum animi recusandae minima placeat. Odit consequatur quaerat iusto, modi corrupti omnis soluta. Ipsum eos nisi exercitationem repudiandae! Excepturi error quos enim optio et rem repellendus nemo beatae, ex, ipsam magni neque eius repellat quis ab unde dolore mollitia debitis? Nulla excepturi enim repellat dolore, nobis consequatur consequuntur hic laudantium optio iusto eaque magnam, expedita exercitationem nesciunt, commodi similique atque. Eius quod, aut commodi incidunt saepe, aspernatur quia, beatae a iusto laudantium sit rerum ad fugiat. Eligendi iure consectetur non, perspiciatis quisquam aliquid voluptatem molestiae, natus ut amet accusamus eum voluptatibus enim recusandae sed est possimus? Quis numquam distinctio illo, voluptatem totam soluta error excepturi corrupti eum quisquam, quo temporibus sequi in nulla quae voluptate aliquid aspernatur doloribus. Id odio nesciunt nobis, aut labore voluptas repudiandae culpa officiis, modi sint quod consequuntur fugit laudantium consectetur repellendus voluptatibus cupiditate ab itaque! Est, quo ipsum sequi quod aut earum. Consequuntur at eos officiis doloribus tenetur voluptatibus veritatis impedit eveniet repellendus nemo magnam, odio adipisci eaque reiciendis amet delectus facere iste? Praesentium corrupti, laboriosam, delectus earum alias quam sapiente sunt blanditiis dicta omnis tempora dolor ea eius. Eum rerum saepe odio, voluptatem corporis aliquam reprehenderit maiores alias, animi reiciendis ipsum fuga amet tempora eius inventore velit dolore, ipsam sunt distinctio odit! Voluptate omnis deserunt quia. Soluta distinctio fugiat provident deleniti voluptatibus culpa atque repudiandae tempora recusandae dolore. Officia ratione obcaecati nemo sapiente tempora expedita fugiat minima quasi voluptates! Doloremque, ex quibusdam autem consectetur nam iure sunt nemo porro, aliquid, aperiam debitis dolor exercitationem fuga! Nobis saepe hic id delectus, omnis est veniam earum natus. Nemo, hic aliquid vel eaque cupiditate inventore suscipit, in, id impedit pariatur nisi amet tempore rem aspernatur qui nostrum nulla? Illo, alias nisi assumenda molestiae corrupti velit corporis inventore tempora!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, itaque! Velit iure id corrupti assumenda ratione delectus sed quaerat in. Cum iusto officiis magni sunt dolores aspernatur, ipsam enim, perferendis temporibus consequatur dolorem quia adipisci corporis autem ut deleniti fuga sequi aut blanditiis distinctio. Quibusdam natus assumenda iure temporibus in perferendis doloremque corrupti dolorem eum deleniti enim nam autem ea a optio hic, reprehenderit inventore rerum suscipit eaque. Consequatur voluptatum voluptatem corrupti dolore tenetur, ea rerum nemo voluptate doloribus blanditiis vel dolorem totam cum architecto ex adipisci incidunt sunt perferendis, quidem labore ad eaque repudiandae facilis voluptates? Consequatur, quisquam possimus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum animi recusandae minima placeat. Odit consequatur quaerat iusto, modi corrupti omnis soluta. Ipsum eos nisi exercitationem repudiandae! Excepturi error quos enim optio et rem repellendus nemo beatae, ex, ipsam magni neque eius repellat quis ab unde dolore mollitia debitis? Nulla excepturi enim repellat dolore, nobis consequatur consequuntur hic laudantium optio iusto eaque magnam, expedita exercitationem nesciunt, commodi similique atque. Eius quod, aut commodi incidunt saepe, aspernatur quia, beatae a iusto laudantium sit rerum ad fugiat. Eligendi iure consectetur non, perspiciatis quisquam aliquid voluptatem molestiae, natus ut amet accusamus eum voluptatibus enim recusandae sed est possimus? Quis numquam distinctio illo, voluptatem totam soluta error excepturi corrupti eum quisquam, quo temporibus sequi in nulla quae voluptate aliquid aspernatur doloribus. Id odio nesciunt nobis, aut labore voluptas repudiandae culpa officiis, modi sint quod consequuntur fugit laudantium consectetur repellendus voluptatibus cupiditate ab itaque! Est, quo ipsum sequi quod aut earum. Consequuntur at eos officiis doloribus tenetur voluptatibus veritatis impedit eveniet repellendus nemo magnam, odio adipisci eaque reiciendis amet delectus facere iste? Praesentium corrupti, laboriosam, delectus earum alias quam sapiente sunt blanditiis dicta omnis tempora dolor ea eius. Eum rerum saepe odio, voluptatem corporis aliquam reprehenderit maiores alias, animi reiciendis ipsum fuga amet tempora eius inventore velit dolore, ipsam sunt distinctio odit! Voluptate omnis deserunt quia. Soluta distinctio fugiat provident deleniti voluptatibus culpa atque repudiandae tempora recusandae dolore. Officia ratione obcaecati nemo sapiente tempora expedita fugiat minima quasi voluptates! Doloremque, ex quibusdam autem consectetur nam iure sunt nemo porro, aliquid, aperiam debitis dolor exercitationem fuga! Nobis saepe hic id delectus, omnis est veniam earum natus. Nemo, hic aliquid vel eaque cupiditate inventore suscipit, in, id impedit pariatur nisi amet tempore rem aspernatur qui nostrum nulla? Illo, alias nisi assumenda molestiae corrupti velit corporis inventore tempora!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
