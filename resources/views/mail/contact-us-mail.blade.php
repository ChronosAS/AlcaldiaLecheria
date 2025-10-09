<x-mail::message>
# <span  style="color:#000000;">Ha recibido una Solicitud de Atención al Ciudadano!</span>

<x-mail::panel>
<span style="color:#000000;"><strong>Nombre:</strong></span><span style="color:#000000;">{{ $data['fullName'] }}</span><br>
<span style="color:#000000;"><strong>Correo:</strong></span><span style="color:#000000;">{{ $data['email'] }}</span><br>
<span style="color:#000000;"><strong>Cedula:</strong></span><span style="color:#000000;">{{ $data['document'] }}</span><br>
<span style="color:#000000;"><strong>Número de Telefono:</strong></span><span style="color:#000000;">{{ $data['phone'] }}</span><br>
<span style="color:#000000;"><strong>Departamento:</span><span style="color:#000000;">{{ $data['department'] }}</span><br>
</x-mail::panel>
<span style="color:#000000;"><strong>Solicitud:</strong></span><span style="color:#000000;">{{ $data['content'] }}</span><br>
</x-mail::message>
