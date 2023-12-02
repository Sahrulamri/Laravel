<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post // extends Model
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo ipsam, reprehenderit dolorem quae esse sit modi dolor illo corporis animi. Magnam sit, numquam quisquam quod doloribus maxime, in dicta fuga totam obcaecati eligendi commodi at velit dignissimos provident veritatis alias fugit? Aspernatur quam provident cum architecto dignissimos, nesciunt, quibusdam impedit nemo optio exercitationem modi vitae aperiam eos odit, reprehenderit iusto commodi dolore inventore quisquam at libero illum temporibus eaque? Deleniti tempora quam, sint laborum quia tempore voluptate maiores a?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-slug-kedua",
            "author" => "Doddy Ferdyansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut saepe, repellat dolorum nisi natus ipsum accusantium quas tempora quasi? Officia qui quam molestias sint esse fugit ratione minus iste aspernatur accusantium. Quaerat fugiat soluta quod maxime magni earum ipsa perspiciatis fuga voluptatibus aliquam eligendi nulla ad quam, dolorum beatae ut, mollitia nemo ipsum similique vero commodi repellendus officiis? Sed eveniet soluta rem blanditiis quidem reiciendis exercitationem, quibusdam dicta provident id inventore quae sit veritatis, aut voluptas fugit autem ipsa. Illo rerum consectetur vitae corporis nam et labore nostrum, in commodi vel. Commodi labore at corrupti architecto temporibus nulla libero expedita eius natus, illum autem ipsam quia fuga dolor dicta officiis quibusdam quam doloremque? Eveniet deserunt sint repellat eligendi quas doloremque!"
        ]
    ];

    private static $blog_posts1 = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo ipsam, reprehenderit dolorem quae esse sit modi dolor illo corporis animi. Magnam sit, numquam quisquam quod doloribus maxime, in dicta fuga totam obcaecati eligendi commodi at velit dignissimos provident veritatis alias fugit? Aspernatur quam provident cum architecto dignissimos, nesciunt, quibusdam impedit nemo optio exercitationem modi vitae aperiam eos odit, reprehenderit iusto commodi dolore inventore quisquam at libero illum temporibus eaque? Deleniti tempora quam, sint laborum quia tempore voluptate maiores a? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque itaque tempora, totam tempore recusandae repudiandae optio aliquid, saepe doloribus quo perferendis facere? Eaque illum, unde temporibus sapiente exercitationem commodi officia dignissimos ratione necessitatibus expedita officiis eveniet qui neque recusandae culpa id totam ad! Et quod in pariatur illum quia quae soluta cum fugiat ullam libero impedit modi dolor quas cumque molestias perspiciatis necessitatibus repellendus, rem ad non consectetur animi! Optio corrupti distinctio adipisci assumenda nobis sed, enim magni, debitis voluptates odit quo similique harum? Repellat rem sequi fugiat numquam minus! Maxime dolore molestias recusandae! Dolores magnam iste vitae odio accusamus, iure tenetur enim sequi doloribus saepe voluptatibus itaque, dignissimos inventore repellat impedit aliquid mollitia aspernatur animi eos alias similique omnis ratione! Doloribus quod praesentium aliquam nihil. Doloribus placeat earum ipsam quo numquam, commodi perspiciatis maxime pariatur corporis tenetur tempore, atque incidunt! Magnam, non temporibus, minima possimus deleniti recusandae cumque adipisci ipsum qui necessitatibus quam sit vero. Rerum at quae esse. Dolore perferendis ab inventore sint fugiat culpa, voluptas a qui explicabo impedit quod quibusdam laborum illo aliquid laboriosam, praesentium soluta, corporis maxime alias. Harum, ipsa, in molestias facere quia corporis, est neque ea earum aspernatur fuga iusto ratione iure. Maxime voluptatibus eum pariatur blanditiis consequatur corporis vero, quisquam adipisci non rem, commodi aspernatur repellendus voluptatem sint laudantium. Labore suscipit corporis neque cupiditate esse quas dicta? Harum possimus assumenda molestias sequi quam provident accusantium temporibus illo ipsa, amet eveniet praesentium illum soluta magni. Fugit libero tempore animi reiciendis ex aspernatur pariatur placeat nihil consequatur sequi non quod, aut omnis, similique nisi, consequuntur magnam at! Voluptatem possimus atque vel ratione tempore perferendis necessitatibus quibusdam, non expedita voluptatum, at consequatur vitae exercitationem, autem aspernatur sed odio laborum modi. Distinctio soluta nam neque incidunt culpa. Vitae ab aliquid consectetur nobis autem quo esse quaerat, ipsum, laudantium amet vel maxime quisquam sed laborum provident adipisci quas odit perferendis tempora labore. Numquam earum vitae, tempore ipsum architecto facere praesentium, eius sit, voluptate fugiat molestiae culpa commodi omnis quibusdam nostrum reprehenderit ipsa officia eligendi est amet. Ipsa a et labore eum! Voluptatibus, quasi quos ducimus voluptates vel optio deserunt laboriosam reprehenderit eaque ea quo consequatur voluptatum! Similique rem, at dolores ex officiis vero corporis beatae eos maiores omnis laborum hic iste voluptates saepe quo et, consectetur ipsum dicta, nam autem. Delectus iste iure aliquid, quibusdam est officia! Provident vitae facere dignissimos sequi eum, odit minus nisi inventore tempora tenetur perferendis aperiam officia eaque voluptatibus voluptas modi fugit ab fugiat dolores, quis delectus? Delectus excepturi rerum animi deserunt magni eaque aliquid quidem possimus dolorem. Autem cupiditate obcaecati sint dolorum? Minus magnam odit voluptas! Voluptatem, eius saepe. Veritatis perspiciatis fugit quod exercitationem saepe molestiae voluptatum obcaecati architecto, dolorem et officiis nisi, eveniet vero blanditiis, ea modi maxime. Reiciendis, aliquid voluptas? Delectus laboriosam exercitationem nemo nulla expedita. Quis, officiis assumenda esse, aspernatur temporibus ratione dignissimos cum ipsam, dolores reiciendis soluta quisquam voluptatibus amet obcaecati. Obcaecati earum nisi eligendi vel soluta ea expedita repudiandae sed et inventore hic, tempore aut quasi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-slug-kedua",
            "author" => "Doddy Ferdyansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut saepe, repellat dolorum nisi natus ipsum accusantium quas tempora quasi? Officia qui quam molestias sint esse fugit ratione minus iste aspernatur accusantium. Quaerat fugiat soluta quod maxime magni earum ipsa perspiciatis fuga voluptatibus aliquam eligendi nulla ad quam, dolorum beatae ut, mollitia nemo ipsum similique vero commodi repellendus officiis? Sed eveniet soluta rem blanditiis quidem reiciendis exercitationem, quibusdam dicta provident id inventore quae sit veritatis, aut voluptas fugit autem ipsa. Illo rerum consectetur vitae corporis nam et labore nostrum, in commodi vel. Commodi labore at corrupti architecto temporibus nulla libero expedita eius natus, illum autem ipsam quia fuga dolor dicta officiis quibusdam quam doloremque? Eveniet deserunt sint repellat eligendi quas doloremque! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam reprehenderit incidunt alias doloribus deleniti, eaque dolorum. Earum voluptatibus esse possimus aliquam optio cumque soluta fugit? Omnis nostrum sapiente doloribus nobis soluta assumenda cupiditate sint dolorem, labore eveniet eos iusto natus veniam neque. Minima autem nemo sint cum provident voluptate sunt aspernatur tenetur itaque fuga quam dolor, voluptatibus fugiat dolore quibusdam iusto saepe minus consequuntur ducimus esse quod ut illo quo pariatur! Architecto sequi voluptates sunt quae, debitis optio aperiam laudantium quis minima libero rem modi ex sed deleniti nam alias provident eius, iusto magni dolor. Suscipit excepturi amet a ullam velit necessitatibus. Voluptatem quam fuga nesciunt cupiditate temporibus consequatur, possimus eum commodi, nihil qui reiciendis dolorum est repellendus distinctio cumque voluptate quis maiores tempora rerum tempore, id laborum. Natus est, laborum nisi, ad deserunt consequatur odio architecto aspernatur commodi, esse adipisci ut! Magni voluptatem sapiente harum ratione. Consequuntur quia sunt inventore odit quod explicabo error est quas corrupti? Nobis fugit assumenda, tenetur aliquam culpa deleniti ipsam eligendi voluptas dolores porro quis minus adipisci officiis earum ab, voluptatum, vitae nesciunt recusandae unde iure magni ducimus? Minima, debitis accusamus consectetur aspernatur laborum voluptatum corporis quos? Quis, expedita! Corporis dolorem voluptate ea eveniet."
        ]

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $post = collect(self::$blog_posts1);

        return $post->firstWhere('slug', $slug);
    }

    // use HasFactory;
}
