<?php
namespace SolidPrinciples;

class Relatorio
{
    public function dadosRelatorio()
    {
        $usersData = DB::table('UsersTable')->get();

        $usersName = [];
        foreach ($usersData as $user) {
            $usersName[] = $user->getName();
        }

        return [
            'usuarios' => $usersName,
            'qtd' => count($usersName)
        ];
    }

    public function print()
    {
        return json_encode($this->dadosRelatorio()) . "\n";
    }
}

class DB
{

    public static function table($tableName)
    {
        $klss = __NAMESPACE__ . "\\${tableName}";
        return new $klss;
    }
}

class UsersTable
{

    private $fakeData = [];

    public function __construct()
    {
        $this->fakeData[] = new User([ 'nome' => 'Salviano' ]);
        $this->fakeData[] = new User([ 'nome' => 'Larissa' ]);
        $this->fakeData[] = new User([ 'nome' => 'Thiask' ]);
        $this->fakeData[] = new User([ 'nome' => 'Cleriston' ]);
    }

    public function get()
    {
        // Faria um select no banco trazendo todos os usuarios
        return $this->fakeData;
    }
}

class User
{
    private $nome;

    public function __construct($options)
    {
        $this->nome = $options['nome'];
    }

    public function getName()
    {
        return $this->nome;
    }
}

//Main
$report = new Relatorio();
echo $report->print();
