








class CourseSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Course::create([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph,
            ]);
        }
    }
}