





class StudentSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            Student::create([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 25),
            ]);
        }
    }
}