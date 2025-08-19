<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #174389;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 0 0 15px;
        }
        .content strong {
            color: #333333;
        }
        .info-section {
            border-top: 1px solid #dddddd;
            padding-top: 20px;
            margin-top: 20px;
        }
        .info-section h2 {
            font-size: 18px;
            color: #174389;
            margin: 0 0 10px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            text-align: left;
        }
        .info-table td.label {
            background-color: #f9f9f9;
            font-weight: bold;
            color: #333333;
        }
        .info-table td.value {
            background-color: #ffffff;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            color: #666666;
            font-size: 14px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nova Cotação de Frete</h1>
        </div>
        <div class="content">
            <p>Você recebeu uma nova cotação de frete da Transcendental.</p>

            <table class="info-table">
                <tr>
                    <td class="label">Origem:</td>
                    <td class="value">{{ $origem }}</td>
                </tr>
                <tr>
                    <td class="label">Destino:</td>
                    <td class="value">{{ $destino }}</td>
                </tr>
                <tr>
                    <td class="label">Quantidade:</td>
                    <td class="value">{{ $quantidade }}</td>
                </tr>
                <tr>
                    <td class="label">Peso:</td>
                    <td class="value">{{ $peso }} kg</td>
                </tr>
                <tr>
                    <td class="label">Valor:</td>
                    <td class="value">R$ {{ $valor_de_nota }}</td>
                </tr>
            </table>

            <div class="info-section">
                <h2>Dados de Contato</h2>
                <table class="info-table">
                    <tr>
                        <td class="label">Nome:</td>
                        <td class="value">{{ $nome }}</td>
                    </tr>
                    <tr>
                        <td class="label">E-mail:</td>
                        <td class="value">{{ $email }}</td>
                    </tr>
                    <tr>
                        <td class="label">Telefone:</td>
                        <td class="value">{{ $telefone }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>