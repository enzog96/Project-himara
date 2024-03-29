<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([

            ['image' => 'single/single1.jpg',
            'title' => 'ISTANBUL',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€89',
            'bed' => '1 King',
            'guest' => 2,
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => '5',
            'size' => '80 Sq mt',
            'category_rooms_id' => '1'],

            ['image' => 'double/double.jpg',
            'title' => 'TANGER',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€129',
            'bed' => '2 king',
            'guest' => '4',
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => '5',
            'size' => '80 Sq mt',
            'category_rooms_id' => '2'],

            ['image' => 'deluxe/deluxe.jpg',
            'title' => 'TOKYO',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€189',
            'bed' => '1 King',
            'guest' => '2',
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => '5',
            'size' => '80 Sq mt',
            'category_rooms_id' => '4'],

            ['image' => 'family/family.jpg',
            'title' => 'PARIS',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€149',
            'bed' => '2 King and 1 Sofabed',
            'guest' => '4',
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => '5',
            'size' => '80 Sq mt',
            'category_rooms_id' => '1'],

            ['image' => 'king/king.jpg',
            'title' => 'RIO DE JANEIRO',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€289',
            'bed' => '1 King',
            'guest' => '2',
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => 5,
            'size' => '80 Sq mt',
            'category_rooms_id' => '1'],

            ['image' => 'honeymoon/honeymoon.jpg',
            'title' => 'SICILIA',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€169',
            'bed' => '1 King',
            'guest' => 2,
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => 5,
            'size' => '80 Sq mt',
            'category_rooms_id' => '1'],

            ['image' => 'view/view.jpg',
            'title' => 'MOSCOU',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€119',
            'bed' => '1 King and 1 Sofabed',
            'guest' => 4,
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => 5,
            'size' => '80 Sq mt',
            'category_rooms_id' => '1'],

            ['image' => 'luxury/luxury.jpg',
            'title' => 'LONDON',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€349',
            'bed' => '2 King',
            'guest' => 4,
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => 5,
            'size' => '80 Sq mt',
            'category_rooms_id' => '1'],

            ['image' => 'small/small.jpg',
            'title' => 'DUBAI',
            'description' => 'Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim. ',
            'smalldescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ..',
            'price' => '€39',
            'bed' => '1 King',
            'guest' => '2',
            'rating' => '5.00 BASED ON 3 RATINGS',
            'stars' => 5,
            'size' => '80 Sq mt',
            'category_rooms_id' => '1'],

            
            
        ]);
    }
}
