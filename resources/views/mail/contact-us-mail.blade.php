<x-mail::message>
# <span>Ha recibido una Solicitud de Atención al Ciudadano!</span>

<x-mail::panel>
<strong>Nombre: </strong><span style="color:###1a1a1a;">{{ $firstname }}</span><strong>Apellido: </strong><span style="color:###1a1a1a;">{{ $lastname }}</span><br>
<strong>Correo: </strong><span style="color:###1a1a1a;">{{ $email }}</span><br>
<strong>Cedula: </strong><span style="color:###1a1a1a;">{{ $id }}</span><br>
<strong>Número de Telefono: </strong><span style="color:###1a1a1a;">{{ $phone }}</span><br>
<strong>Departamento: </strong><span style="color:###1a1a1a;">{{ $department }}</span><br>
</x-mail::panel>
<strong>Solicitud: </strong><span style="color:###1a1a1a;">{{ $application }}</span><br>
</x-mail::message>
