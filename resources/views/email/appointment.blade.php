<html>
Buna {{$mailData['name']}},
<p>Programarea de mai jos a fost <strong>creata. </strong> O poti gasi in contul dvs., la sectiunea "Programarile mele".</p>
<br>
    <ul>
        <li><strong>Data programarii:</strong> {{$mailData['date']}} </li>
        <li><strong>Ora programarii:</strong> {{$mailData['time']}} </li>
        <li><strong>Personalul medical:</strong> {{$mailData['doctorName']}} </li>
        <li><strong>Adresa:</strong> Dispensar, Str. Principala 134 BLAJ</li>
    </ul>
<br>
Multumim,
Echipa Dispensar.
<style type="text/css">
    li{
        text-decoration: none;
    }
</style>
</html>