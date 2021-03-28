# SwitchCar

Explore latest models from Top Car Brands in Algerie. Choose your model based on reviews, specs, pictures and many more, all hand inspected by our experts. Get the best Car prices at CarSwitch.



# Installation



### Migration

First of all we need to migrate our table in database, please check that you have entered the coordinates of the database on the .env file then run `php artisan migrate`



### Seed

The second step is to fill our database with the random data

Before running the commands you can indicate the number of data you want to generate in .env file

| Name            | Description                        | Default |
| --------------- | ---------------------------------- | ------- |
| MAX_USERS       | Maximum number of clients          | 50      |
| MAX_GARAGES     | Maximum number of garages          | 10      |
| MAX_CARS        | Maximum number of cars             | 30      |
| MAX_ADMINS      | Maximum number of backoffice users | 20      |
| MAX_RDVS        | Maximum number of rdvs             | 20      |
| MAX_INSPECTIONS | Maximum number of inspections      | 10      |
| MAX_BUYERS      | Maximum number of buyers           | 20      |

To run all seed `php artisan db:seed`

To run all seed for **production** mode php artisan `db:seed --class=ProductionSeeder`, this will generate 

- Regions
- Wilayas
- Features
- Questions
- ModelCars
- Roles

To launch data generation for a **single table** run `php artisn db:seed --class=[Name]Seeder`