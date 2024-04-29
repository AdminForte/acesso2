<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Financeiro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Sistema Financeiro</h1>
        <form id="transaction-form">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name"><br> <!-- Campo de Nome -->
            <label for="type">Tipo:</label>
            <select name="type" id="type">
                <option value="entrada">Entrada</option>
                <option value="saida">Saída</option>
            </select><br>
            <label for="description">Descrição:</label>
            <input type="text" id="description" name="description"><br>
            <label for="amount">Valor:</label>
            <input type="number" id="amount" name="amount"><br>
            <button type="submit">Adicionar Transação</button>
        </form>
        <div id="transaction-list">
            <h2>Lista de Transações</h2>
            <ul id="transactions"></ul>
            <p id="total">Total: R$ 0.00</p> <!-- Elemento para exibir o total -->
        </div>
        <a href="index.html">Voltar para a página inicial</a>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('transaction-form');
        const transactionList = document.getElementById('transactions');
        const totalElement = document.getElementById('total');

        let totalAmount = 0;
        let localTransactions = [];

        // Recupera as transações salvas localmente quando a página é carregada
        if (localStorage.getItem('transactions')) {
            localTransactions = JSON.parse(localStorage.getItem('transactions'));
            localTransactions.forEach(transaction => {
                addTransactionToList(transaction);
            });
        }

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const name = form.name.value;
            const type = form.type.value;
            const description = form.description.value;
            const amount = parseFloat(form.amount.value);

            if (!name || !type || !description || isNaN(amount)) {
                alert('Por favor, preencha todos os campos corretamente.');
                return;
            }

            const transaction = { name, type, description, amount };
            addTransactionToList(transaction);
            saveTransactionLocally(transaction);

            form.reset();
        });

        function addTransactionToList(transaction) {
            const transactionItem = document.createElement('li');
            transactionItem.textContent = `${transaction.type.toUpperCase()} - ${transaction.name} - ${transaction.description} - R$ ${transaction.amount.toFixed(2)}`;
            transactionList.appendChild(transactionItem);

            // Atualiza o total
            if (transaction.type === 'entrada') {
                totalAmount += transaction.amount;
            } else {
                totalAmount -= transaction.amount;
            }
            totalElement.textContent = `Total: R$ ${totalAmount.toFixed(2)}`;
        }

        function saveTransactionLocally(transaction) {
            localTransactions.push(transaction);
            localStorage.setItem('transactions', JSON.stringify(localTransactions));
        }
    });
</script>
</body>
</html>
