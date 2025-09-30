<x-mail::message>
# <span>Ha recibido una Solicitud de Atención al Ciudadano!</span>

<x-mail::panel>
<strong>Nombre: </strong><span style="color:#374151;">{{ $firstname }}</span><strong>Apellido: </strong><span style="color:#374151;">{{ $lastname }}</span><br>
<strong>Correo: </strong><span style="color:#374151;">{{ $email }}</span><br>
<strong>Cedula: </strong><span style="color:#374151;">{{ $id }}</span><br>
<strong>Número de Telefono: </strong><span style="color:#374151;">{{ $phone }}</span><br>
<strong>Departamento: </strong><span style="color:#374151;">{{ $department }}</span><br>
</x-mail::panel>
<strong>Solicitud: </strong><span style="color:#374151;">{{ $application }}</span><br>
</x-mail::message>
