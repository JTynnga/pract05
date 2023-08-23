<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class=" px-8 h-[15vh] w-full flex justify-between items-center">
        <p class="text-[#5d6266] font-semibold text-xl">Agregar Usuarios</p>
        <a href="/api/showUsuario">
            <div class="bg-[#004c6c] py-2 px-3 rounded-md text-white flex gap-2" type="button"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                Volver al listado</div>
        </a>
    </div>
    <div class=" h-[85vh] w-full flex justify-center items-center">
        <form class=" w-2/4 h-2/3 flex flex-col justify-between" method="POST" action="/api/newUsuario">
            @csrf
            <div class="flex w-full justify-between ">
                <div class="flex flex-col w-[45%] gap-3">
                    <label class="text-[#5d6266] font-semibold" for="nombre">Nombre</label>
                    <input class="border border-zinc-400 p-2" id="nombre" name="nombre" type="text"
                        placeholder="Ingrese el nombre" required>
                </div>
                <div class="flex flex-col w-[45%] gap-3">
                    <label class="text-[#5d6266] font-semibold" for="apellido">Apellido</label>
                    <input class="border border-zinc-400 p-2" id="apellido" name="apellido" type="text"
                        placeholder="Ingrese el apellido" required>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <label class="text-[#5d6266] font-semibold" for="correo">E-mail</label>
                <input class="border border-zinc-400 p-2" id="correo" name="correo" type="email"
                    placeholder="Ingrese el E-mail" required>
            </div>
            <div class="flex flex-col w-[45%] gap-3">
                <label class="text-[#5d6266] font-semibold" for="contrasena">Contraseña</label>
                <input class="border border-zinc-400 p-2 truncate" id="contrasena" name="contrasena" type="password"
                    placeholder="Ingrese la Contraseña" required>
            </div>
            <div class="flex justify-center w-full">
                <button class="bg-[#004c6c] py-2 w-64 rounded-md text-white" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>

</html>
