<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class EscolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          //  "EscolaCod" => $this->faker->number(),
            "EscolaNome" => $this->faker->name(),
         //   "EscolaNumero" => $this->faker->number(),
            "EscolaEndereco" => $this->faker->address,
            "EscolaTel" => $this->faker->phoneNumber,
        //    "EscolaEmail" => $this->faker->mail,
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