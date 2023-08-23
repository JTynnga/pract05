<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class=" px-8 h-[15vh] w-full flex justify-between items-center">
        <p class="text-[#5d6266] font-semibold text-xl">Gestión de Usuarios</p>
        <a href="/usuarios">
            <div class="bg-[#004c6c] py-2 px-3 rounded-md text-white flex gap-2" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>

                Agregar
            </div>
        </a>
    </div>
    <div class=" h-[85vh] w-full flex flex-col justify-center items-center">
        <table class=" w-[70%] h-2/3 text-[#5d6266]">
            <thead class="border-b-4">
                <tr>
                    <th>Usuario</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                ?>
                @foreach ($usuarios as $usuario)
                    <?php
                    $i++;
                    ?>
                    <tr class="border-b">
                        <td class="text-center">{{ $usuario->nombre }}</td>
                        <td class="text-center">{{ $usuario->correo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-[70%] ">
            <p class="text-[#5d6266]">Usuarios <?php
            echo $i;
            ?></p>
        </div>

    </div>
</body>

</html>
