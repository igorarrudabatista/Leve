<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "AlunoNome" => $this->faker->name(),
            "AlunoFiliacao1" => $this->faker->name(),
            "AlunoFiliacao2" => $this->faker->name(),
            "AlunoEndereco" => $this->faker->address,
            "AlunoTelefone" => $this->faker->phoneNumber,
        ];
    }
}

// 'AlunoNome',
// 'AlunoDataNascimento',
// 'AlunoCPF',
// 'AlunoSexo',
// 'AlunoFiliacao1',
// 'AlunoFiliacao2',
// 'AlunoEndereco',
// 'AlunoNumero',
// 'AlunoBairro',
// 'AlunoCEP',
// 'AlunoCidade',
// 'AlunoEstado',
// 'AlunoDDD',
// 'AlunoTelefone',
// 'AlunoObs',