<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Sheets to HTML</title>
</head>
<body>
    <h1>Dados da Planilha</h1>
    <div id="data-container"></div>

    <script>
        // Autenticação com a API do Google Sheets
        // Substitua 'YOUR_API_KEY' pela sua chave de API
        const apiKey = 'https://sheetdb.io/api/v1/phokgmzctmr0z';
        const spreadsheetId = 'https://docs.google.com/spreadsheets/d/16MvAQPIv1IbUGR2mwh-QAqaWxss5WDkJYODgVKflnB8/edit#gid=0';
        const range = 'Sheet1!A1:B5'; // Range de dados da planilha
        
        // Função para carregar os dados da planilha
        function loadSheet() {
            fetch(https://sheets.googleapis.com/v4/spreadsheets/${spreadsheetId}/values/${range}?key=${apiKey})
            .then(response => response.json())
            .then(data => {
                const values = data.values;
                const container = document.getElementById('data-container');
                container.innerHTML = '<ul>';
                values.forEach(row => {
                    container.innerHTML += <li>${row.join(' | ')}</li>;
                });
                container.innerHTML += '</ul>';
            })
            .catch(error => console.error('Erro ao carregar os dados da planilha:', error));
        }

        // Carregar os dados da planilha ao carregar a página
        window.onload = loadSheet;
    </script>
</body>
</html>