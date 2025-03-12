<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $type = $this->faker->randomElement(['phone', 'email', 'whatsapp', 'fax', 'telegram', 'skype', 'messenger', 'signal', 'wechat', 'other']),
            'contact_value' => (function() use ($type) {
                switch ($type) {
                    case 'email':
                        return $this->faker->unique()->safeEmail;
                    case 'phone':
                    case 'whatsapp':
                    case 'fax':
                    case 'telegram':
                    case 'skype':
                    case 'messenger':
                    case 'signal':
                    case 'wechat':
                        return $this->faker->phoneNumber;
                    default:
                        return $this->faker->word;
                }
            })(),
        ];
    }
}
