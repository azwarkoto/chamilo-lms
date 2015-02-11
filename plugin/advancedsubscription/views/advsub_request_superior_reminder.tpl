<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Solicitud recibida para el curso {{ session.name }}</title>
    <style type="text/css">
        .titulo {
            color: #93c5cd;
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
            font-weight: bold;
            border-bottom-width: 2px;
            border-bottom-style: solid;
            border-bottom-color: #93c5cd;
         }
    </style>
</head>

<body>
<table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><img src="{{ _p.web_plugin }}advancedsubscription/views/img/header.png" width="700" height="20" alt=""></td>
    </tr>
    <tr>
        <td><img src="{{ _p.web_plugin }}advancedsubscription/views/img/line.png" width="700" height="25" alt=""></td>
    </tr>
    <tr>
        <td valign="top"><table width="700" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="50">&nbsp;</td>
                    <td width="394"><img src="{{ _p.web_plugin }}advancedsubscription/views/img/logo-minedu.png" width="230" height="60" alt="Ministerio de Educación"></td>
                    <td width="50">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td style="color: #93c5cd; font-family: Times New Roman, Times, serif; font-size: 24px; font-weight: bold; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: #93c5cd;">Solicitud de consideración de curso para un colaborador</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td height="356">&nbsp;</td>
                    <td valign="top"><p>Estimado:</p>
                        <h2>{{ superior.complete_name }}</h2>
                        <p>Le recordamos que hemos recibido las siguientes solicitudes de suscripción<strong> </strong>al curso <strong>{{ session.name }}</strong> de parte de sus colaboradores. El curso se iniciará el <strong>{{ session.date_start }}</strong>. Detalles del curso: <strong>{{ session.description }}</strong>. </p>
                        <p>Le invitamos a aprobar o desarprobar las suscripciones, dando clic en el botón correspondiente a continuación para cada colaborador.</p>
                        <table width="100%" border="0" cellspacing="3" cellpadding="4" style="background:#EDE9EA">
                            {% for student in students %}
                            <tr>
                                <td valign="middle"><img src="{{ student.picture.file }}" width="50" height="50" alt=""></td>
                                <td valign="middle"><h4>{{ student.complete_name }}</h4></td>
                                <td valign="middle"><a href="{{ student.acceptUrl }}"><img src="{{ _p.web_plugin }}advancedsubscription/views/img/aprobar.png" width="90" height="25" alt=""></a></td>
                                <td valign="middle"><a href="{{ student.rejectUrl }}"><img src="{{ _p.web_plugin }}advancedsubscription/views/img/desaprobar.png" width="90" height="25" alt=""></a></td>
                            </tr>
                            {% endfor %}
                        </table>
                        <p>Gracias.</p>
                        <p><strong>Equipo Forge</strong></p></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td width="50">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="50">&nbsp;</td>
                </tr>
            </table></td>
    </tr>
    <tr>
        <td><img src="{{ _p.web_plugin }}advancedsubscription/views/img/line.png" width="700" height="25" alt=""></td>
    </tr>
    <tr>
        <td><img src="{{ _p.web_plugin }}advancedsubscription/views/img/footer.png" width="700" height="20" alt=""></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
